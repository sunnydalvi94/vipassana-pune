<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Group_sitting_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      
	=================================================================================
	Purpose: add about group_sitting
	*/
    public function _set_group_sitting($details=array())
	{
	      $validation_error='';
	      $details=$this->decryptArray($details);
	      if(isset($details['group_sitting_id']) && !empty($details['group_sitting_id']))
	      {
	      	$flag=1;
	      }
	      else
	      {
	      	$flag=0;
	      }
	    if($this->validationGroup_sittingDetails($details,$flag))
	    {
	      	if($details)
	      	{
	      	$user_id= $this->session->userdata('user_id');
            $user_id=isset($userdata['user_id'])?$userdata['user_id']:'';
	      	 $group_sitting = array
			      	 (   
			      	 	'group_sitting_id'=>isset($details['group_sitting_id'])?$details['group_sitting_id']:NULL,
			      	 	'area_name' =>$details['area_name'] ,
			      	 	'image' =>$details['image'] , 
			      	 	'day' =>$details['day'] , 
			      	 	'time' =>$details['time'] , 
			      	 	'contact' =>$details['contact'] , 
			      	 	/*'sequence' =>$details['sequence'] , 
			      	 	'remark' =>$details['remark'] , */
			      	 	'group_sitting_address' =>$details['group_sitting_address'] , 
			      	 	'google_map' =>$details['google_map'] , 
			      	 	'modified_by'=>$user_id,
	                    'modified_on'=>date('Y-m-d H:i:s'),
	                 );	
			  if(!isset($details['group_sitting_id']) && empty($details['group_sitting_id']))
	                {
	                    $group_sitting['inserted_by']=$user_id;
	                    $group_sitting['inserted_on']=date('Y-m-d H:i:s');
	                }
	      	     $group_sitting_id= $this->standard_model->single_insert('tbl_group_sitting',$group_sitting);
	      	     $group_sitting['group_sitting_id']=$group_sitting_id;
	      	     $group_sitting= $this->encryptArray($group_sitting);
	      	    if($flag==0)
	               {
	                return array(
	                            'state'=>true,
	                            'msg'=>'Group Sitting Data Added Successfully!',
	                            'details'=>$group_sitting
	                            );
	            	}else
	            	{
	            	return array(
	                            'state'=>true,
	                            'msg'=>'Group sitting updated!',
	                            'details'=>$group_sitting
	                            );
	            	}
	        }
	      	 else
	        {
	                return array(
	                'state'=>False,
	                'msg'=>'Group sitting Failed to Saved!',
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
    Author:Yogeshwari Yawalkar                      
	=================================================================================
	Purpose: validation group_sitting
	*/
	public function validationGroup_sittingDetails($details,$flag)
    {
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'group_sitting_id'=>isset($details['group_sitting_id']) ? $details['group_sitting_id'] :'',
        	'area_name'=>isset($details['area_name']) ? $details['area_name'] : '',
        	'day'=>isset($details['day']) ? $details['day'] : '',
        	'time'=>isset($details['time']) ? $details['time'] : '',
        	'contact'=>isset($details['contact']) ? $details['contact'] : '',
        	'group_sitting_address'=>isset($details['group_sitting_address']) ? $details['group_sitting_address'] : '',
        	'google_map'=>isset($details['google_map']) ? $details['google_map'] : '',
        	'image'=>isset($details['image']) ? $details['image'] : '',
        	/*'sequence'=>isset($details['sequence']) ? $details['sequence'] : '',
        	'remark'=>isset($details['remark']) ? $details['remark'] : '',*/
              ));
		$this->form_validation->set_rules('group_sitting_id','group_sitting_id', array('min_length[1]','max_length[5]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
        array(
           'min_length'=>'group_sitting_id Min 1 Number Required.',
		   'max_length'=>'group_sitting_id Max 5 Number allowed.',
		   'regex_match'=>'group_sitting_id Should Have Only Numbers'
             ));
        $this->form_validation->set_rules('area_name','area_name',array('required','min_length[1]','max_length[255]',"regex_match[/^([A-Za-z][A-Za-z\,\(\)\-\'\"\:\;\&\|\s]{1,254})$/]"),
		array(
			'required'=>'Required the name',
			'min_length'=>'Min 1 Character Required.',
			'max_length'=>'Max 255 Character Allowed.',
			'regex_match'=>'area_name should not have Numbers'
			));
     
        $this->form_validation->set_rules('day','day',array('required','min_length[1]','max_length[255]'),
		array(
			'required'=>'Required the day',
			'min_length'=>'Min 1 Character Required.',
			'max_length'=>'Max 255 Character Allowed.',
			));
        $this->form_validation->set_rules('time','time',array('required'),
		array(
			'required'=>'Required the name',
			 ));
        $this->form_validation->set_rules('google_map','google_map',array('required'),
		array(
			'required'=>'Required the name',
			  ));
        $this->form_validation->set_rules('contact', 'contact',array('required','min_length[1]','max_length[100]'),
        array(
			'required'=>'contact is Required', 
			'max_length'=>'contact Max  100 Number allowed.',
			'min_length'=>'contact Min 1 Number required.'
              ));

        $this->form_validation->set_rules('group_sitting_address', 'group_sitting_address',array('required','min_length[2]','max_length[500]',"regex_match[/^([A-Z0-9a-z][A-Z0-9a-z\(\)\&\-\.\,\_\'\/\[\]\'\:\;\s]{1,499})$/]"),
	    array(
		   'required'=>'group_sitting_address is Required', 
		   'min_length'=>'group_sitting_address Min 2 char required.',
           'max_length'=>'group_sitting_address Max 255 char allowed.',
           'regex_match'=>'integer and character are allowed.'
			));
  //       $this->form_validation->set_rules('image', 'image',array('required'),
		// array(
		//  	'required'=>'image is Required',
		//      ));
       /* $this->form_validation->set_rules('sequence', 'sequence',array('required'),
		array(
		 	'required'=>'sequence is Required',
		     ));
        $this->form_validation->set_rules('remark', 'remark',array('required'),
		array(
		 	'required'=>'remark is Required',
		     ));*/
      
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
    Author:Yogeshwari Yawalkar                      
	=================================================================================
	Purpose: get group_sitting
	*/
    public function _get_group_sitting($details=array())
	 {

		$details = $this->decryptArray($details);
		if(isset($details['group_sitting_id']))
        {
        	$id=$details['group_sitting_id'];
        $results = $this->standard_model->selectAllWhr('tbl_group_sitting','group_sitting_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_group_sitting');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_group_sitting','in_use','Y');        	
          
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
                  'msg'=>'Record Found!',
                  'state'=>true,
                  'details'=>$result
			);
			$result= $this->encryptArray($details);
        }
        else
        {
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['group_sitting_id']
                          );
        }
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      
	=================================================================================
	Purpose: hide group_sitting
	*/
    public function _hide_group_sitting($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['group_sitting_id']))
		{
			$id=$details['group_sitting_id'];
			$group_sitting=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_group_sitting','group_sitting_id',$id,$group_sitting);
            $resdata = $this->standard_model->selectAllWhr('tbl_group_sitting','group_sitting_id',$details['group_sitting_id']);
			if($resdata)
				 {
					$data=array();
		              foreach ($resdata as $result)
		                {
		                  $data[] = (array)$result;  
		                }
		                if(isset($data) && is_array($data)){
		                $result = $this->encryptArray($data);
		                 }
		            	return array(
		                  'state'=>true,
		                  'msg'=>'Hidden Group sitting !',
		                  'details'=>$result
								);
			     }
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide Groupsitting';
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
			'msg'=>'group_sitting_id Required!',
			);
		}
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      
	=================================================================================
	Purpose: restore group_sitting
	*/
    public function _restore_group_sitting($details=array())
	 {
		$details = $this->decryptArray($details);
		if(isset($details['group_sitting_id']))
		{
			$id=$details['group_sitting_id'];
			$group_sitting=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_group_sitting','group_sitting_id',$id,$group_sitting);

			$resdata = $this->standard_model->selectAllWhr('tbl_group_sitting','group_sitting_id',$details['group_sitting_id']);
			if($resdata)
		    {
					$data=array();
		              foreach ($resdata as $result)
		                {
		                  $data[] = (array)$result;  
		                }
		                if(isset($data) && is_array($data)){
		                $result = $this->encryptArray($data);
		                 }
		            	return array(
		                  'state'=>true,
		                  'msg'=>'Restored Group Sitting !',
		                  'details'=>$result
								);			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore Groupsitting';
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
			'msg'=>'group_sitting_id Required!',
			);
		}
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      
	=================================================================================
	Purpose: delete group_sitting
	*/
	public function _delete_group_sitting($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['group_sitting_id']))
		{    
			$id=$details['group_sitting_id'];
		    $group_sitting=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_group_sitting','group_sitting_id',$id,$group_sitting);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Deleted Group sitting !',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete Groupsitting';
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
			'msg'=>'group_sitting_id Required!',
			);
		}
	}
}