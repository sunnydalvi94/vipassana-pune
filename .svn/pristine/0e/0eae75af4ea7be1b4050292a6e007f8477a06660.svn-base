<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class teenager_course_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}
	/*
	========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	========================================================
	Purpose: Get User teenager_course
	return array(
	 	'state'=>TRUE,
		'msg'=>'Records Found!',
	 	'details'=>array( 
	 		array(
		 	"teenager_course_id": "2nWpd",
            "teenager_course_name": "DHAMMAPUNNA",
            "teenager_course_url": "https://www.dhamma.org/en/schedules/schpunna",
            "teenager_course_address": " Punna City Vipassana Center",
            "teenager_course_duration": " 7 Days",
            "teenager_course_age_limit": " 15 years completed to 19 years",
            "teenager_course_venue": "pune",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-13 13:55:45",
            "modified_by": "1",
            "modified_on": "2020-05-13 13:55:45",
            "in_use": "Y"
	 		)
	 	)
	 );
    */
	public function _get_teenager_course($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['teenager_course_id']))
        {
        	$id=$details['teenager_course_id'];
        $results = $this->standard_model->selectAllWhr('tbl_teenager_course','teenager_course_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_teenager_course');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_teenager_course','in_use','Y');        	
          
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
                  'details'=>$details['teenager_course_id']
            );
        }
    }
	/*
	========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	========================================================
	
	"state": true,
    "msg": "teenager_course added!",
    "details": {
        "teenager_course_id": "V1BDd",
        "teenager_course_name": "DHAMMANANDA",
        "teenager_course_url": "https://www.dhamma.org/en/schedules/schananda",
        "teenager_course_address": " Pune Riverside Vipassana Cendive (Markal)",
        "teenager_course_duration": " 7 Days",
        "teenager_course_age_limit": " 15 years completed to 19 years",
        "teenager_course_venue": "pune",
        "modified_by": 1,
        "modified_on": "2020-05-15 11:41:58",
        "inserted_by": 1,
        "inserted_on": "2020-05-15 11:41:58"
    }
    */
    public function _set_teenager_course($details=array())
	{
	  	$validation_error='';
        $details = $this->decryptArray($details);
        
			if(isset($details['teenager_course_id']) && !empty($details['teenager_course_id']))
			{
				$results = $this->standard_model->selectAllWhr('tbl_teenager_course','    teenager_course_id',$details['teenager_course_id']); 
	            if(!empty($results))
				{
				$flag=1;
				}
				else
				{
					return array(
                            'state'=>false,
                            'msg'=>'teenager_course_id not exit!',
                            'details'=>false
                            );
			
				
				}	
			
			
		}
		else
		{
		 $flag=0;	
		}
        if($this->validationteenager_courseMasterDetails($details))
		{
            if($details)
            {
                $user_id= $this->session->userdata('user_id');
                $teenager_course = array(
                		'teenager_course_id'=>isset($details['teenager_course_id'])?$details['teenager_course_id']:NULL,
                		'teenager_course_name'=>$details['teenager_course_name'],
                        'teenager_course_url'=>$details['teenager_course_url'],
                        'teenager_course_address'=>$details['teenager_course_address'],
                        'teenager_course_duration'=>isset($details['teenager_course_duration']) ? $details['teenager_course_duration'] :'',
                        'teenager_course_age_limit'=>isset($details['teenager_course_age_limit']) ? $details['teenager_course_age_limit'] :'',
                        'teenager_course_venue'=>isset($details['teenager_course_venue']) ? $details['teenager_course_venue'] :'',
                        'modified_by'=>$user_id,
                        'modified_on'=>date('Y-m-d H:i:s'),
                        
                        );
                if(!isset($details['teenager_course_id']) && empty($details['teenager_course_id']))
                {
                    $teenager_course['inserted_by']=$user_id;
                    $teenager_course['inserted_on']=date('Y-m-d H:i:s');
                }
                $teenager_course_id = $this->standard_model->single_insert('tbl_teenager_course',$teenager_course);
                $teenager_course['teenager_course_id']=$teenager_course_id;
                $teenager_course= $this->encryptArray($teenager_course);
                if($flag==0)
                {
                return array(
                            'state'=>true,
                            'msg'=>'Teenager Course Data added Successfully!',
                            'details'=>$teenager_course
                            );
            	}else
            	{
            	return array(
                            'state'=>true,
                            'msg'=>'teenager course updated!',
                            'details'=>$teenager_course
                            );
            	}
            }
            else
            {
                return array(
                'state'=>False,
                'msg'=>'teenager course Failed to Saved!',
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
	Author:Mrudul Thite                   Date:13/05/2020
	========================================================
	Purpose: validation for teenager_course
	*/
	function validationteenager_courseMasterDetails($details)
    {
	 	$var1="'";
	 	$var2='"';
	 	if(isset($details['teenager_course_id']) && !empty($details['teenager_course_id']))
            {
                $falg=1;
            }
            else
            {
                $falg=0;
            }
	 	$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
		array(
		 	'teenager_course_id'=>isset($details['teenager_course_id']) ? $details['teenager_course_id'] :'',
			'teenager_course_name'=>isset($details['teenager_course_name']) ? $details['teenager_course_name'] :'',
			'teenager_course_address'=>isset($details['teenager_course_address']) ? $details['teenager_course_address'] :'',
			'teenager_course_url'=>isset($details['teenager_course_url']) ? $details['teenager_course_url'] :'',
			'teenager_course_duration'=>isset($details['teenager_course_duration']) ? $details['teenager_course_duration'] :'',
			'teenager_course_age_limit'=>isset($details['teenager_course_age_limit']) ? $details['teenager_course_age_limit'] :'',
			'teenager_course_venue'=>isset($details['teenager_course_venue']) ? $details['teenager_course_venue'] :'',
		)
		); 
		$this->form_validation->set_rules('teenager_course_id','teenager_course_id', array('min_length[1]','max_length[20]',"regex_match[/^([0-9][0-9]{0,20})$/]"),
		array(    
			'min_length'=>'Min 1 Number Required.',
			'max_length'=>'Max 20 Number allowed.',
			'regex_match'=>'teenager_course_id Should Have Only Numbers'
		)
		);
		if($falg==0)
        {
		$this->form_validation->set_rules('teenager_course_name','teenager_course_name', array('required','min_length[2]','max_length[99]','is_unique[tbl_teenager_course.teenager_course_name]','regex_match[/^([A-Z0-9a-z][A-Z0 -9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,100})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For teenager_course_name Min 2 chars Required.',
	 		'max_length'=>'For teenager_course_name Max 100 chars allowed.',
	 		'required'=>'Required teenager_course_name',
	 		'is_unique'=>'duplicate entry for teenager_course_name',
	 		'regex_match'=>'teenager_course_name Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	    }else
	    {
	    	$this->form_validation->set_rules('teenager_course_name','teenager_course_name', array('required','min_length[2]','max_length[99]','regex_match[/^([A-Z0-9a-z][A-Z0 -9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,100})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For teenager_course_name Min 2 chars Required.',
	 		'max_length'=>'For teenager_course_name Max 100 chars allowed.',
	 		'required'=>'Required teenager_course_name',
	 		'regex_match'=>'teenager_course_name Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));	
	    }
		// $this->form_validation->set_rules('teenager_course_url','teenager_course_url',array('required','max_length[199]',"regex_match[/^http:\/\/|(www\.)?[a-z0-9]]"),
		// array(
		//  	'required'=>'Required teenager_course_url',
		//  	'max_length'=>'For teenager_course_url Max 199 Character Allowed.',
		//  	'regex_match'=>'teenager_course_url Should proper  format'
		 	
		// )
		// );
		$this->form_validation->set_rules('teenager_course_address','teenager_course_address',array('required','max_length[254]'),
		array(
		 	'required'=>'Required teenager_course_address',
		 	'max_length'=>'For teenager_course_address Max 254 Character Allowed.'
		 	
		)
		);
		
		$this->form_validation->set_rules('teenager_course_duration','teenager_course_duration', array('required','min_length[1]','max_length[59]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For teenager_course_duration Min 1 Number Required.',
	 		'max_length'=>'For teenager_course_duration Max 49 Number allowed.',
	 		'required'=>'Required teenager_course_duration',
	 		'regex_match'=>'teenager_course_duration Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	$this->form_validation->set_rules('teenager_course_age_limit','teenager_course_age_limit', array('required','min_length[1]','max_length[99]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For teenager_course_age_limit Min 1 Number Required.',
	 		'max_length'=>'For teenager_course_age_limit Max 99 Number allowed.',
	 		'required'=>'Required teenager_course_age_limit',
	 		'regex_match'=>'teenager_course_age_limit Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	// $this->form_validation->set_rules('teenager_course_venue','teenager_course_venue', array('required','min_length[1]','max_length[249]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,249})$/]'),
	 	// array
	 	// ( 
	 		                                                                                      
	 	// 	'min_length'=>'For teenager_course_venue Min 1 Number Required.',
	 	// 	'max_length'=>'For teenager_course_venue Max 249 Number allowed.',
	 	// 	'required'=>'Required teenager_course_venue',
	 	// 	'regex_match'=>'teenager_course_venue Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	// ));

        // return true;
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
	Author:Mrudul Thite                   Date:13/05/2020
	========================================================
	 "state": true,
    "msg": "teenager_course Hidden!",
    "details": [
        {
            "teenager_course_id": "V1BDd",
            "teenager_course_name": "DHAMMANANDA",
            "teenager_course_url": "https://www.dhamma.org/en/schedules/schananda",
            "teenager_course_address": " Pune Riverside Vipassana Cendive (Markal)",
            "teenager_course_duration": " 7 Days",
            "teenager_course_age_limit": " 15 years completed to 19 years",
            "teenager_course_venue": "pune",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-15 11:41:58",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:42:27",
            "in_use": "N"
        }
	*/
	public function _hide_teenager_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['teenager_course_id']))
		{
			$id=$details['teenager_course_id'];
			$teenager_course=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_teenager_course','teenager_course_id',$id,$teenager_course);
			$resdata = $this->standard_model->selectAllWhr('tbl_teenager_course','teenager_course_id',$details['teenager_course_id']);
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
		                  'msg'=>'Hidden Teenager Course!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide teenager_course';
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
			'msg'=>'teenager_course_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	========================================================
	 "state": true,
    "msg": "teenager_course Restore!",
    "details": [
        {
            "teenager_course_id": "V1BDd",
            "teenager_course_name": "DHAMMANANDA",
            "teenager_course_url": "https://www.dhamma.org/en/schedules/schananda",
            "teenager_course_address": " Pune Riverside Vipassana Cendive (Markal)",
            "teenager_course_duration": " 7 Days",
            "teenager_course_age_limit": " 15 years completed to 19 years",
            "teenager_course_venue": "pune",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-15 11:41:58",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:42:36",
            "in_use": "Y"
        }
	*/
	public function _restore_teenager_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['teenager_course_id']))
		{	
		    $id=$details['teenager_course_id'];
			$teenager_course=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_teenager_course','teenager_course_id',$id,$teenager_course);
			$resdata = $this->standard_model->selectAllWhr('tbl_teenager_course','teenager_course_id',$details['teenager_course_id']);
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
		                  'msg'=>'Restored Teenager Course!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore teenager_course';
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
			'msg'=>'teenager course id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	========================================================
	"state": true,
    "msg": "teenager_course Delete!",
    "details": {
        "teenager_course_id": "V1BDd"
    }
	*/
	public function _delete_teenager_course($details=array())
	{  
		$details = $this->decryptArray($details);
		
		if(isset($details['teenager_course_id']))
		{    
			$id=$details['teenager_course_id'];
		    $teenager_course=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_teenager_course','teenager_course_id',$id,$teenager_course);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Deleted Teenager Course!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete teenager_course';
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
			'msg'=>'teenager_course_id Required!',
			);
		}
	 }
}