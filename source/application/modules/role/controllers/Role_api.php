<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Role_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	} 
	/*
    =================================================================================
    Author:Shubhangi Jagadale                        Date:13/06/2020
    =================================================================================
	Purpose: Get User role
	return array(
	{
		 "msg": "Succesfully Fetch Record!",
         "state": true,
         "details": [
        {
            "role_id": "2nWpd",
            "role_name": "admin",
            "role_desc": "admin",
            "display": "Y",
            "inserted_by": "2",
            "inserted_on": "2020-06-13 11:37:38",
            "modified_by": "2",
            "modified_on": "2020-06-13 11:44:16",
            "in_use": "Y"
        }
    ]
    }
    });
    */
	public function _get_role($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['role_id']))
		{
			$results = $this->standard_model->selectAllWhr('tbl_role','role_id',$details['role_id']);
		}
		else if(isset($details['all']))
		{
			$results= $this->standard_model->selectAll('tbl_role');
		}
		else
		{
			$results= $this->standard_model->selectAll('tbl_role','in_use','Y');
		}
		if($results)
		{
			$data=array();
			foreach ($results as $result)
			{
				$data[] = (array)$result;  
			}
			if(isset($data) && is_array($data)){
			$result = $this->encryptArray($data);
			}
			return array(
				'msg'=>'Succesfully Fetch Record!',
				'state'=>true,
				'details'=>$result
			);
		}
		else
		{
			return array(
				'msg'=>'Unable Fetch Record!',
				'state'=>false,
				'details'=>False
			);
		}
    }
	/*
	=================================================================================
    Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	Purpose: Save user role
	return array(
			'state'=>TRUE,
			'msg'=>'New role added!',
			'details'=>$details
		);
    */
    public function _set_role($details=array())
	{
		$validation_error='';
		$details = $this->decryptArray($details);
		if(isset($details['role_id']) && !empty($details['role_id']))
		{
			$falg=1;
		}
		else
		{
			$falg=0;
        }
		if($this->validationroleMasterDetails($details,$falg))
		{
			if($details)
			{
				$user_id= $this->session->userdata('user_id');
				$role = array(
					'role_id'=>isset($details['role_id'])?$details['role_id']:NULL,
						'role_name'=>$details['role_name'],
						'role_desc'=>$details['role_desc'],
						'modified_by'=>$user_id,
						'modified_on'=>date('Y-m-d H:i:s')
						);
				if(!isset($details['role_id']) && empty($details['role_id']))
				{
					$role['inserted_by']=$user_id;
					$role['inserted_on']=date('Y-m-d H:i:s');
				}
				$role_id = $this->standard_model->single_insert('tbl_role',$role);
				echo $this->db->last_query();
				$role['role_id']=$role_id;
				$role= $this->encryptArray($role);
				if(isset($details['role_id']) && !empty($details['role_id']))
				{
					$results = $this->standard_model->selectAllWhr('tbl_role','role_id',$details['role_id']); 
					echo $this->db->last_query();
					if($results)
					{
						if(isset($details['role_id']) && !empty($details['role_id']))
						{
						$falg=1;
						}
						else
						{
						$falg=0;
						}	
						return array(
							'state'=>true,
							'msg'=>'Record Updated!',
							'details'=>$role
						);							
					}
					else{
						return array(
							'state'=>false,
							'msg'=>'Id Not Found!',
							'details'=>false
						);
						}
				}
				else{
					return array(
						'state'=>true,
						'msg'=>'new Role Added!',
						'details'=>$role
					);
				}
			}
			else
			{
				return array(
					'state'=>False,
					'msg'=>'Role Failed to Saved!',
					'details'=>false
				);
			}
		}
		else
		{
			$validation_error = validation_errors();
			return array(
				'state'=>False,
				'msg'=>$validation_error,
				'details'=>'Validation is failed'
			);
		}	
    }
    /*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	Purpose: validation for role
	*/
	function validationroleMasterDetails($details,$falg)
    {
		$var1="'";
	 	$var2='"';
	 	$this->form_validation->set_error_delimiters('','');
        $this->form_validation->set_data(
        array(
			'role_id'=>isset($details['role_id'])?$details['role_id'] :'',
	 		'role_name'=>isset($details['role_name'])?$details['role_name'] :'',
			'role_desc'=>isset($details['role_desc'])?$details['role_desc'] :'',
		)); 
	    $this->form_validation->set_rules('role_id','role_id', array('min_length[1]','max_length[11]',"regex_match[/^([0-9][0-9]{0,10})$/]"),
	    array(    
		   'min_length'=>'role_id Min 1 Number Required.',
		   'max_length'=>'role_id Max 11 Number allowed.',
		   'regex_match'=>'role_id Should Have Only Numbers'
		));
		if($falg==0)
		{
			$this->form_validation->set_rules('role_name','role_name',array('required','min_length[2]','max_length[255]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\<\>\_\'\"\?\:\;\&\s]{1,254})$/]','is_unique[tbl_role.role_name]'),
	        array(
				'required'=>'Role Name  Required',  
				'min_length'=>'Role Name Min 2 Character Required.',
				'max_length'=>'Role Name Max 255 Character Allowed.',
				'regex_match'=>'Role Name Should Have Only Alphanumeric character and Special Character ,'.$var1.'( ) <>'.$var2.' - \ & _ ? : ; | & Space are Allowed'
		    ));
		}
		else{
			$this->form_validation->set_rules('role_name','role_name',array('required','min_length[2]','max_length[255]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\<\>\_\'\"\?\:\;\&\s]{1,254})$/]'),
	        array(
				'required'=>'Role Name  Required',  
				'min_length'=>'Role Name Min 2 Character Required.',
				'max_length'=>'Role Name Max 255 Character Allowed.',
				'regex_match'=>'Role Name Should Have Only Alphanumeric character and Special Character ,'.$var1.'( ) <>'.$var2.' - \ & _ ? : ; | & Space are Allowed'
		    ));
		}
		$this->form_validation->set_rules('role_desc','role_desc',array('required','min_length[2]','max_length[500]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\_\'\"\:\;\&\s]{1,500})$/]'),
		array(
			'required'=>'Role Description  Required',  
			'min_length'=>'Role Description Min 2 Character Required.',
			'max_length'=>'Role Description Max 500 Character Allowed.',
			'regex_match'=>'Role Description Should Have Only Alphanumeric character and Special Character ,'.$var1.'( ) <>'.$var2.' - \ & _ : ; | & Space are Allowed'			
		));
	    if($this->form_validation->run()==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
    /*
	=================================================================================
	 Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	Purpose: Hide role
	return array(
	 		'state'=>TRUE,
	 		'msg'=>'Role hidden!',
	 		'details'=>$details
	 	);
	*/
	public function _hide_role($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['role_id']))
		{
			$id=$details['role_id'];
			$role=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_role','role_id',$id,$role);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_role','role_id',$details['role_id']);
				if($fetchdata)
				{
				    $data=array();
					foreach ($fetchdata as $result)
					{
						$data[] = (array)$result;  
					}
					if(isset($data) && is_array($data)){
					$result = $this->encryptArray($data);
					}
					return array(
						'msg'=>'Hide Record!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide role';
				return array(
					'state'=>false,
					'msg'=>$message,
					'details'=>false
				);
			}
		}
		else
		{
			return array(
				'state'=>false,
				'msg'=>'role_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose: Restore role
	return array(
		'state'=>TRUE,
		'msg'=>'Role restored!',
		'details'=>$details
	);
	*/
	public function _restore_role($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['role_id']))
		{	
		    $id=$details['role_id'];
			$role=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_role','role_id',$id,$role);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_role','role_id',$details['role_id']);
				if($fetchdata)
				{
				   $data=array();
					foreach ($fetchdata as $result)
					{
						$data[] = (array)$result;  
					}
					if(isset($data) && is_array($data)){
					$result = $this->encryptArray($data);
					}
					return array(
						'msg'=>'Restore Record!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide role';
				return array(
					'state'=>false,
					'msg'=>$message,
					'details'=>false
				);
			}
		}
		else
		{
			return array(
			'state'=>false,
			'msg'=>'Role_topic_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose:Delete role
	/*return array(
		'state'=>TRUE,
		'msg'=>'Role deleted!',
		'details'=>$details
	);
	*/
	public function _delete_role($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['role_id']))
		{    
			$id=$details['role_id'];
			$role=array(
				'display'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_role','role_id',$id,$role);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Role Delete!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete role';
				return array(
					'state'=>false,
					'msg'=>$message,
					'details'=>false
				);
			}
		}
		else
		{
			return array(
			'state'=>false,
			'msg'=>'Role_id Required!',
			);
		}
	}
}