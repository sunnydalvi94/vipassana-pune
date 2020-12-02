<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class seva_registration_api extends Base_Controller 
{
    public function __construct()
  	{ 
		parent::__construct();
		$this->load->model('standard/standard_model');
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"msg": "Record Found!",
    "state": true,
    "details": [
        {
            "seva_registration_id": "2nWpd",
            "ten_day_course_id": "1",
            "first_name": "Snehal",
            "middel_name": "sudhir ",
            "last_name": "rajhans",
            "mobile_no": "9898989090",
            "email": "mrudul@gmail.com",
            "occupation": "IT developer",
            "city": "Pune",
            "area_of_city": "Wakad",
            "gender": "female",
            "age": "39",
            "answer": "sdfgf",
            "comments": "ghgj",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-13 11:31:42",
            "modified_by": "1",
            "modified_on": "2020-05-13 11:31:42",
            "in_use": "Y",
            "center_name": "pune",
            "short_decription": "dfgdg",
            "ten_day_course_url": "fdg",
            "cover_photo": "fg"
        }
    */
	public function _get_seva_registration($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['seva_registration_id']))
        {
        	$id=$details['seva_registration_id'];
        $results = $this->standard_model->selectAllWhr('tbl_seva_registration','seva_registration_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_seva_registration');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_seva_registration','in_use','Y');        	
          
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
                  'details'=>$details['seva_registration_id']
            );
        }
    }
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	 "msg": "Record Found!",
    "state": true,
    "details": [
        {
            "seva_registration_id": "2nWpd",
            "ten_day_course_id": "1",
            "first_name": "Snehal",
            "middel_name": "sudhir ",
            "last_name": "rajhans",
            "mobile_no": "9898989090",
            "email": "mrudul@gmail.com",
            "occupation": "IT developer",
            "city": "Pune",
            "area_of_city": "Wakad",
            "gender": "female",
            "age": "39",
            "answer": "sdfgf",
            "comments": "ghgj",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-13 11:31:42",
            "modified_by": "1",
            "modified_on": "2020-05-13 11:31:42",
            "in_use": "Y",
            "center_name": "pune",
            "short_decription": "dfgdg",
            "ten_day_course_url": "fdg",
            "cover_photo": "fg"
        },
    */
    public function _set_seva_registration($details=array())
	{
	  	$validation_error='';
        $details = $this->decryptArray($details);
        if(isset($details['seva_registration_id']) && !empty($details['seva_registration_id']))
			{
				$results = $this->standard_model->selectAllWhr('tbl_seva_registration','seva_registration_id',$details['seva_registration_id']); 
	            if(!empty($results))
				{
				$flag=1;
				}
				else
				{
					return array(
                            'state'=>false,
                            'msg'=>'seva_registration_id not exit!',
                            'details'=>false
                            );
			
				
				}	
			
			
		}
		else
		{
		 $flag=0;	
		}
		if($this->validationseva_registrationMasterDetails($details))
		{
            if($details)
            {
                $user_id= $this->session->userdata('user_id');
               
	                $seva_registration = array(
	                'seva_registration_id'=>isset($details['seva_registration_id'])?$details['seva_registration_id']:NULL,
	                'first_name'=>$details['first_name'],
	                'middel_name'=>$details['middel_name'],
	                'last_name'=>$details['last_name'],
	                'mobile_no'=>$details['mobile_no'],
	                'email'=>$details['email'],
	                'occupation'=>$details['occupation'],
	                'city'=>$details['city'],
	                'area_of_city'=>$details['area_of_city'],
	                'ten_day_course_id'=>$details['ten_day_course_id'],
	                'gender'=>$details['gender'],
	                'age'=>$details['age'],
	                'answer'=>$details['answer'],
	                // 'question_answer'=>$details['question_answer'],
	                'question1' => implode("  </br>-- ",(array)$details['question1']),
	                'question2' => implode("   ",(array)$details['question2']),
	                'question3' => implode("  </br>-- ",(array)$details['question3']),
	                'comments'=>$details['comments'],
	                'modified_by'=>$user_id,
	                'modified_on'=>date('Y-m-d H:i:s'),
	                        
	                        );
	               
	                if(!isset($details[' seva_registration_id']) && empty($details[' seva_registration_id']))
	                {
	                    $seva_registration['inserted_by']=$user_id;
	                    $seva_registration['inserted_on']=date('Y-m-d H:i:s');
	                }
	                $seva_registration_id = $this->standard_model->single_insert('tbl_seva_registration',$seva_registration);
	                $seva_registration[' seva_registration_id']=$seva_registration_id;
	                $seva_registration= $this->encryptArray($seva_registration);
	                if($flag==0)
	                {
	                
	                return array(
	                            'state'=>true,
	                            'msg'=>'Seva Registration Data Saved Successfully !',
	                            'details'=>$seva_registration
	                            );
	            	}else
	            	{
	            	
	            	return array(
	                            'state'=>true,
	                            'msg'=>'seva registration updated!',
	                            'details'=>$seva_registration
	                            );
	            	}
	            
			}    
            else
            {
                return array(
                'state'=>False,
                'msg'=>'seva_registration Failed to Saved!',
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
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	Purpose: validation for seva_registration
	*/
	function validationseva_registrationMasterDetails($details)
    {
	 	// $var1="'";
	 	// $var2='"';
	 	if(isset($details['seva_registration_id']) && !empty($details['seva_registration_id']))
	    {
	      $flag=1;
	    }
	    else
	    {
	      $flag=0;
	    }
	 	$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
		array(
		 	' seva_registration_id'=>isset($details[' seva_registration_id']) ? $details['   seva_registration_id'] :NULL,
			'first_name'=>isset($details['first_name']) ? $details['first_name'] :'',
			'last_name'=>isset($details['last_name']) ? $details['last_name'] :'',
			'middel_name'=>isset($details['middel_name']) ? $details['middel_name'] :'',
			'mobile_no'=>isset($details['mobile_no']) ? $details['mobile_no'] :'',
			'email'=>isset($details['email']) ? $details['email'] :'',
			'occupation'=>isset($details['occupation']) ? $details['occupation'] :'',
			'city'=>isset($details['city']) ? $details['city'] :'',
			'area_of_city'=>isset($details['area_of_city']) ? $details['area_of_city'] :'',
			'ten_day_course_id'=>isset($details['ten_day_course_id']) ? $details['ten_day_course_id'] :'',
			'gender'=>isset($details['gender']) ? $details['gender'] :'',
			'age'=>isset($details['age']) ? $details['age'] :'',
			'answer'=>isset($details['answer']) ? $details['answer'] :'',
			'comments'=>isset($details['comments']) ? $details['comments'] :''
		)
		); 
		$this->form_validation->set_rules('seva_registration_id','seva_registration_id', array('min_length[1]','max_length[20]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
		array
		(    
			'min_length'=>'Min 1 Number Required.',
			'max_length'=>'Max 20 Number allowed.',
			'regex_match'=>'seva_registration_id Should Have Only Numbers'
		));
		$this->form_validation->set_rules('first_name','first_name', array('required','min_length[2]','max_length[15]','regex_match[/^([A-Z0-9a-z][A-Z0 -9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{2,15})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For first name Min 2 char Required.',
	 		'max_length'=>'For first name Max 15 char allowed.',
	 		'required'=>'Required first name',
	 		'regex_match'=>'first name Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));

	 	// $this->form_validation->set_rules('middel_name','middel_name', array('required','min_length[2]','max_length[15]','regex_match[/^([A-Z0-9a-z][A-Z0 -9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,15})$/]'),
	 	// array
	 	// ( 
	 		                                                                                      
	 	// 	'min_length'=>'For middle name Min 2 char Required.',
	 	// 	'max_length'=>'For middle name Max 15 char allowed.',
	 	// 	'required'=>'Required middle name',
	 	// 	'regex_match'=>'middle name Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	// ));

	 	$this->form_validation->set_rules('last_name','last_name', array('required','min_length[2]','max_length[15]','regex_match[/^([A-Z0-9a-z][A-Z0 -9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{2,15})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For last name Min 2 char Required.',
	 		'max_length'=>'For last name Max 15 char allowed.',
	 		'required'=>'last name is Required ',
	 		'regex_match'=>'last_name Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	if($flag==0){
	 	$this->form_validation->set_rules('mobile_no','mobile_no',array('required','regex_match[/^([4-9][\d]{9})$/]','is_unique[tbl_seva_registration.mobile_no]'),
	    array
	    (
	        'required'=>'mobile no is Required',
	        'is_unique'=>'duplicate entry for mobile no',
	        'regex_match'=>"Only 10 digit numbers are allowed for mobile no."
	    ));
	    }else
	    {
	     $this->form_validation->set_rules('mobile_no','mobile_no',array('required','regex_match[/^([4-9][\d]{9})$/]'),
	    array
	    (
	        'required'=>'mobile no is Required',
	        'regex_match'=>'Please Enter Valid Mobile No.'
	    ));
	    }
	 	// $this->form_validation->set_rules('occupation','occupation', array('required','min_length[2]','max_length[50]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{2,50})$/]'),
	 	// array
	 	// ( 
	 		                                                                                      
	 	// 	'min_length'=>'For occupation Min 2 char Required.',
	 	// 	'max_length'=>'For occupation Max 50 char allowed.',
	 	// 	'required'=>'Required occupation',
	 	// 	'regex_match'=>'occupation Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	// ));
	 	if($flag==0){
	 	$this->form_validation->set_rules('email', 'email',array('required',"regex_match[/^(\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+)$/]",'is_unique[tbl_seva_registration.email]'),
        array
        (
            'required'=>'email is Required', 
            'is_unique'=>'duplicate entry for email',
            'regex_match'=>'Invalid parameter passed! for email'
        ));
	 	}else
	 	{
	 	$this->form_validation->set_rules('email', 'email',array('required',"regex_match[/^(\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+)$/]"),
        array
        (
            'required'=>'email is Required', 
            'regex_match'=>'Invalid parameter passed! for email'
        ));	
	 	}
		$this->form_validation->set_rules('city','city', array('required','min_length[2]','max_length[50]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{2,50})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For city Min 2 char Required.',
	 		'max_length'=>'For city Max 50 char allowed.',
	 		'required'=>'Required city',
	 		'regex_match'=>'city Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	// $this->form_validation->set_rules('area_of_city','area_of_city', array('required','min_length[2]','max_length[50]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,50})$/]'),
	 	// array
	 	// ( 
	 		                                                                                      
	 	// 	'min_length'=>'For area_of_city Min 2 char Required.',
	 	// 	'max_length'=>'For area_of_city Max 50 char allowed.',
	 	// 	'required'=>'Required city',
	 	// 	'regex_match'=>'area_of_city Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	// ));
	
		$this->form_validation->set_rules('ten_day_course_id', 'ten_day_course_id',array('required','min_length[1]','max_length[49]','regex_match[/^([0-9][0-9]{0,10})$/]'),
	    array(
	    	'required'=>'ten day course id is Required',
	        'min_length'=>'ten day course id Min 1 Number required. ',
	        'max_length'=>'ten day course id Max 49 Number allowed. ',
	        'regex_match'=>'ten day course id Only numbers are allowed.'
	    ));	  
	    $this->form_validation->set_rules('gender', 'gender',array('required','min_length[2]','max_length[49]'),
	    array(
	       'required'=>'gender is Required',	
	       'min_length'=>'gender Min 2 char required. ',
	       'max_length'=>'gender Max 49 char allowed. '
	    ));	  
		$this->form_validation->set_rules('age', 'age',array("regex_match[/^([0-9][0-9]{0,4})$/]"),
		array
		(
					
			// 'min_length'=>'age Min 1 numbers required.',
			// 'max_length'=>'age Max 5 numbers allowed. ',
			'regex_match'=>'For Age Only Numbers are allowed.'
		));
		// $this->form_validation->set_rules('answer', 'answer',array('required','min_length[2]','max_length[249]'),
	 //    array
	 //    (
	 //       'required'=>'answer is Required',	
	 //       'min_length'=>'answer Min 1 Number required. ',
	 //       'max_length'=>'answer Max 249 Number allowed. '
	 //    ));	
	 //    $this->form_validation->set_rules('comments', 'comments',array('required','min_length[2]','max_length[249]'),
	 //    array(
	 //       'required'=>'comments is Required',	
	 //       'min_length'=>'comments Min 1 Number required. ',
	 //       'max_length'=>'comments Max 249 Number allowed. '
	 //    ));	
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
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"state": true,
    "msg": "seva_registration Hidden!",
    "details": [
        {
            "seva_registration_id": "2nWpd",
            "ten_day_course_id": "1",
            "first_name": "Snehal",
            "middel_name": "sudhir ",
            "last_name": "rajhans",
            "mobile_no": "9898989090",
            "email": "mrudul@gmail.com",
            "occupation": "IT developer",
            "city": "Pune",
            "area_of_city": "Wakad",
            "gender": "female",
            "age": "39",
            "answer": "sdfgf",
            "comments": "ghgj",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-13 12:21:55",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:38:39",
            "in_use": "N"
        }
	*/
	public function _hide_seva_registration($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['seva_registration_id']))
		{
			$id=$details['seva_registration_id'];
			$seva_registration=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_seva_registration','seva_registration_id',$id,$seva_registration);
			$resdata = $this->standard_model->selectAllWhr('tbl_seva_registration','seva_registration_id',$details['seva_registration_id']);
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
		                  'msg'=>'Hidden Seva Registration!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide seva_registration';
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
			'msg'=>'seva_registration_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"state": true,
    "msg": "seva_registration Restore!",
    "details": [
        {
            "seva_registration_id": "2nWpd",
            "ten_day_course_id": "1",
            "first_name": "Snehal",
            "middel_name": "sudhir ",
            "last_name": "rajhans",
            "mobile_no": "9898989090",
            "email": "mrudul@gmail.com",
            "occupation": "IT developer",
            "city": "Pune",
            "area_of_city": "Wakad",
            "gender": "female",
            "age": "39",
            "answer": "sdfgf",
            "comments": "ghgj",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-13 12:21:55",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:38:49",
            "in_use": "Y"
        }
	*/
	public function _restore_seva_registration($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['seva_registration_id']))
		{	
		    $id=$details['seva_registration_id'];
			$seva_registration=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_seva_registration','seva_registration_id',$id,$seva_registration);
			$resdata = $this->standard_model->selectAllWhr('tbl_seva_registration','seva_registration_id',$details['seva_registration_id']);
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
		                  'msg'=>'Restored Seva Registration!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore seva_registration';
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
			'msg'=>'seva_registration_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	 "state": true,
    "msg": "seva_registration Delete!",
    "details": {
        "seva_registration_id": "2nWpd"
    }
	*/
	public function _delete_seva_registration($details=array())
	{  
		$details = $this->decryptArray($details);
		
		if(isset($details['seva_registration_id']))
		{    
			$id=$details['seva_registration_id'];
		    $seva_registration=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_seva_registration','seva_registration_id',$id,$seva_registration);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Deleted Seva Registration!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete seva_registration';
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
			'msg'=>'seva_registration_id Required!',
			);
		}
	 }
}