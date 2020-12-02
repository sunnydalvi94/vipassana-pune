<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Children_course_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI                Date: 14 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Save Children_course Details
	Response:return array(
						  	{
							    "state": true,
							    "msg": "Children Course Added Successfully!",
							    "details": {
							        "children_course_id": "518Yn",
							        "children_course_title": "Meditation Course",
							        "date": "2020-12-12",
							        "timing": "7am - 10pm",
							        "age_limit": "5yrs to 12 yrs",
							        "registration": "aa",
							        "venue": "pune",
							        "note": "please apply fast. Limited seats available.",
							        "modified_by": 1,
							        "modified_on": "2020-05-14 17:29:24",
							        "inserted_by": 1,
							        "inserted_on": "2020-05-14 17:29:24"
							    }
							}
						  );
    */
	public function _set_children_course($details=array())
	{
      	$validation_error='';
      	$details=$this->decryptArray($details);
      	$user_id= $this->session->userdata('user_id');
      	if(isset($details['children_course_id']) && !empty($details['children_course_id']))
      	{
      		$flag=1;
      	}
      	else
      	{
      		$flag=0;
      	}
    	if($this->validationchildren_courseDetails($details,$flag))
    	{
      		if($details)
      		{
      	 		$children_course = array
		    	(
		    		'children_course_id'=>isset($details['children_course_id'])?$details['children_course_id']:NULL,
		    		'children_course_title' =>$details['children_course_title'],
		      	 	'date' =>$details['date'],
		      	 	'timing' =>$details['timing'],
		      	 	'age_limit' =>$details['age_limit'],
		      	 	'registration'=>$details['registration'],
		      	 	// 'venue'=>$details['venue'],
		      	 	// 'note'=>$details['note'],
		      	 	'modified_by'=>$user_id,
                    'modified_on'=>date('Y-m-d H:i:s')
		      	);	
		  		if($flag==0)
                {
                    $children_course['inserted_by']=$user_id;
                    $children_course['inserted_on']=date('Y-m-d H:i:s');
                    $album['display']='Y';
                    $album['in_use']='Y';
                    $children_course_id= $this->standard_model->single_insert('tbl_children_course',$children_course);
      	 			$children_course['children_course_id']=$children_course_id;
      				$children_course= $this->encryptArray($children_course);
      				return array(
                            'state'=>true,
                            'msg'=>'Children Course Data Added Successfully!',
                            'details'=>$children_course
                            );
                }
				else
				{   
					$children_course_id=$details['children_course_id'];
					$present_children_course_id=$this->standard_model->selectAllWhr('tbl_children_course','children_course_id',$children_course_id);
					if(isset($present_children_course_id) && !empty($present_children_course_id))
					{							
                    	$children_course_id= $this->standard_model->single_insert('tbl_children_course',$children_course);
      	 				$children_course['children_course_id']=$children_course_id;
      					$children_course= $this->encryptArray($children_course);        		
            				return array(
                    	    			'state'=>true,
                    	    			'msg'=>'Children Course Updated!',
                    	    			'details'=>$children_course
                    	    			 );
            		}
            		else
            		{
            			return array(
                    	   			 'state'=>false,
                    	   			 'msg'=>'Unable to Update Children Course! children_course_id is not present!',
                    	   			 'details'=>false
                    	   			  );
         			}
            	}
      		}
      	 	else
        	{
            	return array(
            			'state'=>False,
            			'msg'=>'Children Course Failed to Save!',
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
	-----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI               Date: 14 May 2020
    -----------------------------------------------------------------------------------
	Purpose: Validations for children_course
	*/
	public function validationchildren_courseDetails($details,$flag)
	{
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'children_course_id'=>isset($details['children_course_id']) ? $details['children_course_id'] :'',
        	'children_course_title'=>isset($details['children_course_title']) ? $details['children_course_title'] :'',
        	'date'=>isset($details['date']) ? $details['date'] :'',
         	'timing'=>isset($details['timing']) ? $details['timing'] :'',
         	'age_limit'=>isset($details['age_limit']) ? $details['age_limit'] :'',
         	'registration'=>isset($details['registration']) ? $details['registration'] :'',
         	'venue'=>isset($details['venue']) ? $details['venue'] :'',
         	'note'=>isset($details['note']) ? $details['note'] :''
		));
        $this->form_validation->set_rules('children_course_id','children_course_id', array('min_length[1]','max_length[10]',"regex_match[/^[0-9]*$/]"),
		array(
       			'min_length'=>'children_course_id Min 1 Number Required.',
				'max_length'=>'children_course _id Max 10 Number allowed.',
				'regex_match'=>'children_course_id Should Have Only Numbers'
             ));
        if($flag==0)
        {
        	$this->form_validation->set_rules('children_course_title','children_course_title',array('required','min_length[1]','max_length[254]',"regex_match[/^[-@.\/#&,':;()<>_+\w\s]{1,250}$/]",'is_unique[tbl_children_course.children_course_title]'),
			array(
				'required'=>'Children Course title is Required',
				'min_length'=>'In Children Course title Min 2 Characters Required.',
				'max_length'=>'In Children Course title Field Maximum 255 Characters are Allowed.',
				'regex_match'=>'Children Course title is Not Valid',
				'is_unique' =>'Duplicate entry for Title.'
			  ));
        }
    	elseif($flag==1)
    	{
    		$this->form_validation->set_rules('children_course_title','children_course_title',array('required','min_length[1]','max_length[254]',"regex_match[/^[-@.\/#&,':;()<>_+\w\s]{1,250}$/]"),
			array(
				'required'=>'Children Course title is Required',
				'min_length'=>'In Children Course title Min 2 Characters Required.',
				'max_length'=>'In Children Course title Field Maximum 255 Characters are Allowed.',
				'regex_match'=>'Children Course title is Not Valid'
			  ));
    	}
  		//       $this->form_validation->set_rules('date','date',array('required',"regex_match[/^[-@.\/#&,':;()<>_+\w\s]{1,19}$/]"),
		// array(
		// 		'required'=>'Date Required',
		// 		'regex_match'=>'Date is Not Valid.'
		// 	  ));
        $this->form_validation->set_rules('timing','timing',array('required','min_length[1]','max_length[19]',"regex_match[/^[-@.\/#&,':;()<>_+\w\s]{1,19}$/]"),
		array(
				'required'=>'Timing is Required',
				'min_length'=>'In Timing Min 2 Characters Required.',
				'max_length'=>'In Timing Field Maximum 20 Characters are Allowed.',
				'regex_match'=>'Timing is Not Valid'
			  ));
        $this->form_validation->set_rules('age_limit','age_limit',array('required','min_length[1]','max_length[100]',"regex_match[/^[-@.\/#&,':;()<>_+\w\s]{1,100}$/]"),
		array(
				'required'=>'Age Limit is Required',
				'min_length'=>'In Age Limit Min 2 Characters Required.',
				'max_length'=>'In Age Limit Field Maximum 100 Characters are Allowed.',
				'regex_match'=>'Age Limit is Not Valid'
			  ));
		// $this->form_validation->set_rules('registration','registration',array('required','min_length[1]','max_length[254]',"regex_match[/^[-@.\/#&,':;()<>_+\w\s]{1,19}$/]"),
		// array(
		// 		'required'=>'Registration is Required',
		// 		'min_length'=>'In Registration Min 2 Characters Required.',
		// 		'max_length'=>'In Registration Field Maximum 255 Characters are Allowed.',
		// 		'regex_match'=>'Registration is Not Valid'
		// 	  ));
		// $this->form_validation->set_rules('venue','venue',array('required','min_length[1]','max_length[254]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,254}$/]"),
		// array(
		// 		'required'=>'Venue is Required',
		// 		'min_length'=>'In Venue Min 2 Characters Required.',
		// 		'max_length'=>'In Venue Field Maximum 255 Characters are Allowed.',
		// 		'regex_match'=>'Venue is Not Valid'
		// 	  ));
		// $this->form_validation->set_rules('note','note',array('required','min_length[1]','max_length[254]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,254}$/]"),
		// array(
		// 		'required'=>'Note is Required',
		// 		'min_length'=>'In Note Min 2 Characters Required.',
		// 		'max_length'=>'In Note Field Maximum 255 Characters are Allowed.',
		// 		'regex_match'=>'Note is Not Valid'
		// 	  ));
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
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 14 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Get Children Course Details
    parameter:none,all,children_course_id
	Response: return array{
						    "msg": "Record Found!",
						    "state": true,
						    "details":{
										[
									   		{
								            "children_course_id": "518Yn",
								            "children_course_title": "Meditation Course",
								            "date": "12-12-2020",
								            "timing": "7am - 10pm",
								            "age_limit": "5yrs to 12 yrs",
								            "registration": "aa",
								            "venue": "pune",
								            "note": "please apply fast. Limited seats available.",
								            "display": "Y",
								            "inserted_by": "1",
								            "inserted_on": "2020-05-14 17:29:24",
								            "modified_by": "1",
								            "modified_on": "2020-05-14 17:29:24",
								            "in_use": "Y"
								        	}
								    	]
									}
	*/

	public function _get_children_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['children_course_id']))
        {
        	$id=$details['children_course_id'];
        	$results = $this->standard_model->selectAllWhr('tbl_children_course','children_course_id',$id);
        }
        else if(isset($details['all']))
        {
        	$results = $this->standard_model->selectAll('tbl_children_course');
        }
        else 
        {
	    	$results = $this->standard_model->selectAll('tbl_children_course','in_use','Y');      
		}
		if($results)
        {
        	$data=array();
            foreach ($results as $result)
            {
              	$data[] = (array)$result;  
            }
            if(isset($data) && is_array($data))
            {
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
            if(isset($details['children_course_id'])) 
        	{
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['children_course_id']
                  );
        	}
        	else
        	{
        		return array(
                  'msg'=>'No Records Found!',
                  'state'=>false
                  );
        	}
        }
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 14 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Hide Children Course
    parameter:children_course_id
	Response:return array(
		         		{
						    "state": true,
						    "msg": "Children Course Hidden!",
						    "details": [
						        {
						            "children_course_id": "2nWpd",
						            "children_course_title": "Meditation Course",
						            "date": "2020-12-12",
						            "timing": "5",
						            "age_limit": "12 ",
						            "registration": "aa",
						            "venue": "pune",
						            "note": "please apply fast. Limited seats available.",
						            "display": "Y",
						            "inserted_by": "1",
						            "inserted_on": "2020-05-14 17:24:43",
						            "modified_by": "1",
						            "modified_on": "2020-05-14 17:56:55",
						            "in_use": "N"
						        }
						    ]
						}
		         		);
	*/
	public function _hide_children_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['children_course_id']))
		{
			$id=$details['children_course_id'];
			$children_course=array(
							'in_use'=>'N',
						  );
			$results = $this->standard_model->updateRecord('tbl_children_course','children_course_id',$id,$children_course);
			$resdata = $this->standard_model->selectAllWhr('tbl_children_course','children_course_id',$details['children_course_id']);
			if($resdata)
			{
				$data=array();
		      	foreach ($resdata as $result)
		        {
		            $data[] = (array)$result;  
		        }    
		     	if(isset($data) && is_array($data))
		        {
		         	$result = $this->encryptArray($data);
		        }
		        return array(
		                 	 'state'=>true,
		                 	 'msg'=>'Children Course Hidden!',
		                 	 'details'=>$result
						    );
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide Children Course!';
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
			'msg'=>'children_course_id Required!',
			);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 14 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Restored Children Course
    parameter:children_course_id
	Response:return array(
		         			{
							    "state": true,
							    "msg": "Children Course Restored!",
							    "details": [
							        {
							            "children_course_id": "2nWpd",
							            "children_course_title": "Meditation Course",
							            "date": "2020-12-12",
							            "timing": "5",
							            "age_limit": "12 ",
							            "registration": "aa",
							            "venue": "pune",
							            "note": "please apply fast. Limited seats available.",
							            "display": "Y",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-14 17:24:43",
							            "modified_by": "1",
							            "modified_on": "2020-05-14 17:59:58",
							            "in_use": "Y"
							        }
							    ]
							}
		         		);
	*/
	public function _restore_children_course($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['children_course_id']))
		{
			$id=$details['children_course_id'];
			$children_course=array(
							'in_use'=>'Y',
							);
			$results = $this->standard_model->updateRecord('tbl_children_course','children_course_id',$id,$children_course);
			$resdata = $this->standard_model->selectAllWhr('tbl_children_course','children_course_id',$details['children_course_id']);
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
		                 		 'msg'=>'Children Course Restored!',
		                 		 'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore Children Course';
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
						'msg'=>'children_course_id Required!',
						);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 14 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Delete Children Course
    parameter:children_course_id
	Response: return array(
							{
							    "state": true,
							    "msg": "Children Course Deleted!",
							    "details": {
							        "children_course_id": "2nWpd"
							    }
							}
						);
	*/
	public function _delete_children_course($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['children_course_id']))
		{    
			$id=$details['children_course_id'];
		    $children_course=array(
							'display'=>'N',
							);
			$results = $this->standard_model->updateRecord('tbl_children_course','children_course_id',$id,$children_course);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
							'state'=>true,
							'msg'=>'Children Course Deleted!',
							'details'=>$results
							);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete Children Course!';
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
			'msg'=>'children_course_id Required!',
			);
		}
	}
}