<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class One_day_course_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	} 
	/*
    =================================================================================
    Author:Shubhangi Jagadale                        Date:11/05/2020
    =================================================================================
	Purpose: Get User one_day_course
	return array(
	{
		"state": true,
		"msg": "new one_day_course Added!",
		"details": {
			"one_day_course_id": 4,
			"one_day_course_area": "How sto registesrs stusdent for exam s?",
			"one_day_course_address": "1.s Login withs syosur losgin_id. you will redirect to a page .2. On My Profile page, click on Tab.:",
			"sequence": "1",
			"modified_by": 1,
			"modified_on": "2020-05-12 12:55:17",
			"inserted_by": 1,
			"inserted_on": "2020-05-12 12:55:17"
		}
    });
    */
	public function _get_one_day_course($details=array())
    {
		// $details = $this->decryptArray($details);
		// if(isset($details['one_day_course_id']))
		// {
		// 	$results = $this->standard_model->selectAllWhr('tbl_one_day_course','one_day_course_id',$details['one_day_course_id']);
		// }
		// else if(isset($details['all']))
		// {
		// 	$results= $this->standard_model->selectAll('tbl_one_day_course');
		// }
		// else
		// {
		// 	$results= $this->standard_model->selectAll('tbl_one_day_course','in_use','Y');
		// }
		// if($results)
		// {
		// 	$data=array();
		// 	foreach ($results as $result)
		// 	{
		// 		$data[] = (array)$result;  
		// 	}
		// 	if(isset($data) && is_array($data)){
		// 	$result = $this->encryptArray($data);
		// 	}
		// 	return array(
		// 		'msg'=>'Succesfully Fetch Record!',
		// 		'state'=>true,
		// 		'details'=>$result
		// 	);
		// }
		// else
		// {
		// 	return array(
		// 		'msg'=>'Unable Fetch Record!',
		// 		'state'=>false,
		// 		'details'=>False
		// 	);
		// }
		$details = $this->decryptArray($details);
		if(isset($details['one_day_course_id']))
		{
			$results = $this->standard_model->selectAllWhr('tbl_one_day_course','one_day_course_id',$details['one_day_course_id']);
		}
		else if(isset($details['all']))
		{
			$results= $this->standard_model->selectAll('tbl_one_day_course');
		}
		else
		{
			$results= $this->standard_model->selectAll('tbl_one_day_course','in_use','Y');
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
    Author:Shubhangi Jagadale                        Date:11/05/2020
	=================================================================================
	Purpose: Save user one_day_course
	return array(
			'state'=>TRUE,
			'msg'=>'New one_day_course added!',
			'details'=>$details
		);
    */
    public function _set_one_day_course($details=array())
	{
		$validation_error='';
		$details = $this->decryptArray($details);
		if($this->validationoneDayCourseMasterDetails($details))
		{
			if($details)
			{
				$user_id= $this->session->userdata('user_id');
				$one_day_course = array(
					'one_day_course_id'=>isset($details['one_day_course_id'])?$details['one_day_course_id']:NULL,
						'one_day_course_area'=>$details['one_day_course_area'],
						'one_day_course_address'=>$details['one_day_course_address'],
						'one_day_course_image'=>$details['one_day_course_image'],
						'day'=>$details['day'],
						'time'=>$details['time'],
						'contact_no'=>$details['contact_no'],
						// 'venue'=>$details['venue'],
						'google_map'=>$details['google_map'],
						// 'sequence'=>$details['sequence'],
						// 'visibilty'=>$details['visibilty'],
						// 'remark'=>$details['remark'],
						'modified_by'=>$user_id,
						'modified_on'=>date('Y-m-d H:i:s')
						);
				if(!isset($details['one_day_course_id']) && empty($details['one_day_course_id']))
				{
					$one_day_course['inserted_by']=$user_id;
					$one_day_course['inserted_on']=date('Y-m-d H:i:s');
				}
				$one_day_course_id = $this->standard_model->single_insert('tbl_one_day_course',$one_day_course);
				$one_day_course['one_day_course_id']=$one_day_course_id;
				$one_day_course= $this->encryptArray($one_day_course);
				if(isset($details['one_day_course_id']) && !empty($details['one_day_course_id']))
				{
					$results = $this->standard_model->selectAllWhr('tbl_one_day_course','one_day_course_id',$details['one_day_course_id']); 
					if($results)
					{
						if(isset($details['one_day_course_id']) && !empty($details['one_day_course_id']))
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
							'details'=>$one_day_course
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
						'msg'=>' One Day Course Data Added!',
						'details'=>$one_day_course
					);
				}
			}
			else
			{
				return array(
					'state'=>False,
					'msg'=>'one Days Course Failed to Saved!',
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
	Author:Shubhangi Jagadale                        Date:11/05/2020
	=================================================================================
	Purpose: validation for one_day_course
	*/
	function validationoneDayCourseMasterDetails($details)
    {
		$var1="'";
	 	$var2='"';
	 	$this->form_validation->set_error_delimiters('','');
        $this->form_validation->set_data(
        array(
			'one_day_course_id'=>isset($details['one_day_course_id'])?$details['one_day_course_id'] :'',
	 		'one_day_course_area'=>isset($details['one_day_course_area'])?$details['one_day_course_area'] :'',
			'one_day_course_address'=>isset($details['one_day_course_address'])?$details['one_day_course_address'] :'',
			'one_day_course_image'=>isset($details['one_day_course_image'])?$details['one_day_course_image'] :'',
			'day'=>isset($details['day'])?$details['day'] :'',
			'time'=>isset($details['time'])?$details['time'] :'',
			'contact_no'=>isset($details['contact_no'])?$details['contact_no'] :'',
			'venue'=>isset($details['venue'])?$details['venue'] :'',
			'google_map'=>isset($details['google_map'])?$details['google_map'] :'',
			// 'sequence'=>isset($details['sequence'])?$details['sequence'] :'',
			// 'visibilty'=>isset($details['visibilty'])?$details['visibilty'] :'',
			// 'remark'=>isset($details['remark'])?$details['remark'] :'',
       	)); 
	    $this->form_validation->set_rules('one_day_course_id','one_day_course_id', array('min_length[1]','max_length[11]',"regex_match[/^([0-9][0-9]{0,10})$/]"),
	    array(    
		   'min_length'=>'one_day_course_id Min 1 Number Required.',
		   'max_length'=>'one_day_course_id Max 11 Number allowed.',
		   'regex_match'=>'one_day_course_id Should Have Only Numbers'
		));
	 	$this->form_validation->set_rules('one_day_course_address','one_day_course_address',array('required','min_length[2]','max_length[500]'),
		array(
			'required'=>'Address  Required',  
			'min_length'=>'Address Min 2 Character Required.',
			'max_length'=>'Address Max 500 Character Allowed.',
		));
		// $this->form_validation->set_rules('one_day_course_image','one_day_course_image',array('required'),
		// array(
		// 	'required'=>'One Day Course Image Required',  
		// ));
	    $this->form_validation->set_rules('one_day_course_area','one_day_course_area',array('required','min_length[2]','max_length[100]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\_\'\"\?\:\;\&\s]{1,99})$/]'),
	    array(
			'required'=>'Area Required',
			'min_length'=>'Area Min 2 Character Required.',
			'max_length'=>'Area Max 99 Character Allowed.',
			'regex_match'=>'Area Should Have Only Alphanumeric character and Special Character ,'.$var1.'( )'.$var2.' - \ & _ : ; | & Space are Allowed'
		));
	 //    $this->form_validation->set_rules('day','day', array('required','min_length[1]','max_length[100]','regex_match[/^([A-Za-z0-9\^\<\>\/\s]{0,99})$/]'),
	 //    array(    
		//   'required'=>'Day  Required',
		//   'min_length'=>'Day Min 1 Numbers Required.',
		//   'max_length'=>'Day Max 100 Numbers Allowed.',
		//   'regex_match'=>'Day Should Alphanumeric character and Special Character ^ < > / Space are Allowed '
		// ));
		$this->form_validation->set_rules('time','time',array('required'),
	    array(
			'required'=>'time  Required',
		));
		// $this->form_validation->set_rules('contact_no','contact_no',array('required','min_length[1]','max_length[100]',"regex_match[/^([0-9]{1}[0-9A-Za-z][0-9A-Za-z\,\<\>\/\-\s]{0,100})$/]"),
  //       array(
		// 	'required'=>'Contact Number is Required',
		// 	'min_length'=>'Contact Number  Min 10 Numbers Required.',
		// 	'max_length'=>'Contact Number  Max 10 Numbers Allowed.',
  //           'regex_match'=>'Contact Number Should Have Only Alphanumeric character and Special Character , - <>/ Space are Allowed  and Starting always Number'
		// ));
		// $this->form_validation->set_rules('venue','venue',array('min_length[2]','max_length[100]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\_\'\"\?\:\;\&\s]{1,99})$/]'),
	 //    array(
		// 	'min_length'=>'Venue Min 2 Character Required.',
		// 	'max_length'=>'Venue Max 99 Character Allowed.',
		// 	'regex_match'=>'Venue Should Have Only Alphanumeric character and Special Character ,'.$var1.'( )'.$var2.' - \ & _ : ; | & Space are Allowed'
		// ));
		$this->form_validation->set_rules('google_map','google_map', array('required'),
	    array(    
			'required'=>'Google Map Required',
		));
		// $this->form_validation->set_rules('sequence','sequence', array('min_length[1]','max_length[11]',"regex_match[/^([0-9][0-9]{0,10})$/]"),
	    // array(    
		//    'min_length'=>'Sequence Min 1 Number Required.',
		//    'max_length'=>'Sequence Max 11 Number allowed.',
		//    'regex_match'=>'Sequence Should Have Only Numbers'
		// ));
		// $this->form_validation->set_rules('visibilty','visibilty', array('required'),
	    // array(    
		// 	'required'=>'Visibilty Required',
		// ));$this->form_validation->set_rules('remark','remark', array('required','min_length[1]','max_length[30]'),
	    // array(    
		// 	'required'=>'Remark Required',
		// 	'min_length'=>'Remark Min 1 char Required.',
		// 	'max_length'=>'Remark Max 30 char allowed.',
		// ));
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
	 Author:Shubhangi Jagadale                        Date:11/05/2020
	=================================================================================
	Purpose: Hide one_day_course
	return array(
	 		'state'=>TRUE,
	 		'msg'=>'one_day_course hidden!',
	 		'details'=>$details
	 	);
	*/
	public function _hide_one_day_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['one_day_course_id']))
		{
			$id=$details['one_day_course_id'];
			$one_day_course=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_one_day_course','one_day_course_id',$id,$one_day_course);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_one_day_course','one_day_course_id',$details['one_day_course_id']);
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
						'msg'=>'Hidden  One Day Course!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide one_day_course';
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
				'msg'=>'one_day_course_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose: Restore one_day_course
	return array(
		'state'=>TRUE,
		'msg'=>'one_day_course restored!',
		'details'=>$details
	);
	*/
	public function _restore_one_day_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['one_day_course_id']))
		{	
		    $id=$details['one_day_course_id'];
			$one_day_course=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_one_day_course','one_day_course_id',$id,$one_day_course);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_one_day_course','one_day_course_id',$details['one_day_course_id']);
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
						'msg'=>'Restored  One Day Course!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide one_day_course';
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
			'msg'=>'one_day_course_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose:Delete one_day_course
	/*return array(
		'state'=>TRUE,
		'msg'=>'one_day_course deleted!',
		'details'=>$details
	);
	*/
	public function _delete_one_day_course($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['one_day_course_id']))
		{    
			$id=$details['one_day_course_id'];
			$one_day_course=array(
				'display'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_one_day_course','one_day_course_id',$id,$one_day_course);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Deleted one Days Course!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete one_day_course';
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
			'msg'=>'one_day_course_id Required!',
			);
		}
	}
}