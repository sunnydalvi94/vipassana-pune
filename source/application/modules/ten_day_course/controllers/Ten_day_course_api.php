<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ten_day_course_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	} 
	/*
    =================================================================================
    Author:Shubhangi Jagadale                        Date:13/05/2020
    =================================================================================
	Purpose: Get User ten_day_course
	return array(
	{
		"state": true,
		"msg": "new ten_day_course Added!",
		"details": {
			"ten_day_course_id": 4,
			"center_name": "How sto registesrs stusdent for exam s?",
			"short_decription": "1.s Login withs syosur losgin_id. you will redirect to a page .2. On My Profile page, click on Tab.:",
			"sequence": "1",
			"modified_by": 1,
			"modified_on": "2020-05-12 12:55:17",
			"inserted_by": 1,
			"inserted_on": "2020-05-12 12:55:17"
		}
    });
    */
	public function _get_ten_day_course($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['ten_day_course_id']))
		{
			$results = $this->standard_model->selectAllWhr('tbl_ten_day_course','ten_day_course_id',$details['ten_day_course_id']);
		}
		else if(isset($details['all']))
		{
			$results= $this->standard_model->selectAll('tbl_ten_day_course');
		}
		else
		{
			$results= $this->standard_model->selectAll('tbl_ten_day_course','in_use','Y');
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
    Author:Shubhangi Jagadale                        Date:13/05/2020
	=================================================================================
	Purpose: Save user ten_day_course
	return array(
			'state'=>TRUE,
			'msg'=>'New ten_day_course added!',
			'details'=>$details
		);
    */
    public function _set_ten_day_course($details=array())
	{
		$validation_error='';
		$details = $this->decryptArray($details);
		if($this->validationTenDayCourseMasterDetails($details))
		{
			if($details)
			{
				$user_id= $this->session->userdata('user_id');
				$ten_day_course = array(
					'ten_day_course_id'=>isset($details['ten_day_course_id'])?$details['ten_day_course_id']:NULL,
						'center_name'=>$details['center_name'],
						'short_decription'=>$details['short_decription'],
						'ten_day_course_url'=>$details['ten_day_course_url'],
						'cover_photo'=>$details['cover_photo'],
						'modified_by'=>$user_id,
						'modified_on'=>date('Y-m-d H:i:s')
						);
				if(!isset($details['ten_day_course_id']) && empty($details['ten_day_course_id']))
				{
					$ten_day_course['inserted_by']=$user_id;
					$ten_day_course['inserted_on']=date('Y-m-d H:i:s');
				}
				$ten_day_course_id = $this->standard_model->single_insert('tbl_ten_day_course',$ten_day_course);
				$ten_day_course['ten_day_course_id']=$ten_day_course_id;
				$ten_day_course= $this->encryptArray($ten_day_course);
				if(isset($details['ten_day_course_id']) && !empty($details['ten_day_course_id']))
				{
					$results = $this->standard_model->selectAllWhr('tbl_ten_day_course','ten_day_course_id',$details['ten_day_course_id']); 
					if($results)
					{
						if(isset($details['ten_day_course_id']) && !empty($details['ten_day_course_id']))
						{
						$flag=1;
						}
						else
						{
						$flag=0;
						}	
						return array(
							'state'=>true,
							'msg'=>'Record Updated!',
							'details'=>$ten_day_course
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
						'msg'=>'Ten Days Course Added Successfully!',
						'details'=>$ten_day_course
					);
				}
			}
			else
			{
				return array(
					'state'=>False,
					'msg'=>'Ten Days Course Failed to Saved!',
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
	Author:Shubhangi Jagadale                        Date:13/05/2020
	=================================================================================
	Purpose: validation for ten_day_course
	*/
	function validationTenDayCourseMasterDetails($details)
    {
		$var1="'";
	 	$var2='"';
	 	$this->form_validation->set_error_delimiters('','');
        $this->form_validation->set_data(
        array(
			'ten_day_course_id'=>isset($details['ten_day_course_id'])?$details['ten_day_course_id'] :'',
	 		'center_name'=>isset($details['center_name'])?$details['center_name'] :'',
			'short_decription'=>isset($details['short_decription'])?$details['short_decription'] :'',
			'ten_day_course_url'=>isset($details['ten_day_course_url'])?$details['ten_day_course_url'] :'',
			'cover_photo'=>isset($details['cover_photo'])?$details['cover_photo'] :'',
       	)); 
	    $this->form_validation->set_rules('ten_day_course_id','ten_day_course_id', array('min_length[1]','max_length[11]',"regex_match[/^([0-9][0-9]{0,10})$/]"),
	    array(    
		   'min_length'=>'ten_day_course_id Min 1 Number Required.',
		   'max_length'=>'ten_day_course_id Max 11 Number allowed.',
		   'regex_match'=>'ten_day_course_id Should Have Only Numbers'
		));
	 // 	$this->form_validation->set_rules('short_decription','short_decription',array('required','min_length[2]','max_length[255]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\_\'\"\?\:\;\&\s]{1,254})$/]'),
		// array(
		// 	'required'=>'short_decription  Required',  
		// 	'min_length'=>'short_decription Min 2 Character Required.',
		// 	'max_length'=>'short_decription Max 255 Character Allowed.',
		// ));
	    $this->form_validation->set_rules('center_name','center_name',array('required','min_length[2]','max_length[100]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\_\'\"\?\:\;\&\s]{1,99})$/]'),
	    array(
			'required'=>'Center Name Required',
			'min_length'=>'Center Name Min 2 Character Required.',
			'max_length'=>'Center Name Max 99 Character Allowed.',
			'regex_match'=>'Center Name Should Have Only Alphanumeric character and Special Character ,'.$var1.'( )'.$var2.' - \ & _ : ; | & Space are Allowed'
		));
	    $this->form_validation->set_rules('ten_day_course_url','ten_day_course_url', array('required',"regex_match[/^http:\/\/|([www\.]{3})?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/]"),
	    array(    
		  'required'=>'Ten Day Course Url  Required',
		  //'min_length'=>'ten_day_course_url Min 1 Number Required.',
		  //'max_length'=>'ten_day_course_url Max 11 Number allowed.',
		  'regex_match'=>'ten_day_course_url Should Have Only Numbers'
		));
		$this->form_validation->set_rules('cover_photo','cover_photo','required',
	    array(
			'required'=>'Image is Required'
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
	 Author:Shubhangi Jagadale                        Date:13/05/2020
	=================================================================================
	Purpose: Hide ten_day_course
	return array(
	 		'state'=>TRUE,
	 		'msg'=>'ten_day_course hidden!',
	 		'details'=>$details
	 	);
	*/
	public function _hide_ten_day_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['ten_day_course_id']))
		{
			$id=$details['ten_day_course_id'];
			$ten_day_course=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_ten_day_course','ten_day_course_id',$id,$ten_day_course);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_ten_day_course','ten_day_course_id',$details['ten_day_course_id']);
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
						'msg'=>'Hidden Ten Days Course!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide ten_day_course';
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
				'msg'=>'ten_day_course_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose: Restore ten_day_course
	return array(
		'state'=>TRUE,
		'msg'=>'ten_day_course restored!',
		'details'=>$details
	);
	*/
	public function _restore_ten_day_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['ten_day_course_id']))
		{	
		    $id=$details['ten_day_course_id'];
			$ten_day_course=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_ten_day_course','ten_day_course_id',$id,$ten_day_course);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_ten_day_course','ten_day_course_id',$details['ten_day_course_id']);
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
						'msg'=>'Restored Ten Days Course!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide ten_day_course';
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
			'msg'=>'ten_day_course_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose:Delete ten_day_course
	/*return array(
		'state'=>TRUE,
		'msg'=>'ten_day_course deleted!',
		'details'=>$details
	);
	*/
	public function _delete_ten_day_course($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['ten_day_course_id']))
		{    
			$id=$details['ten_day_course_id'];
			$ten_day_course=array(
				'display'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_ten_day_course','ten_day_course_id',$id,$ten_day_course);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Deleted Ten Days Course !',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete ten_day_course';
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
			'msg'=>'ten_day_course_id Required!',
			);
		}
	}
}