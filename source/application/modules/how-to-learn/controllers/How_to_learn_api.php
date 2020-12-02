<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class How_to_learn_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI                Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Save How To Learn Details
	Response: return array(
						  	{
							    "state": true,
							    "msg": "How to Learn Added Successfully!",
							    "details": {
							        "how_to_learn_id": "7yPXy",
							        "how_to_learn_name": "Meditation",
							        "how_to_learn_description": "To meditate daily is a good habbit.",
							        "how_to_learn_video": "meditation.png",
							        "modified_by": 1,
							        "modified_on": "2020-05-12 17:27:10",
							        "inserted_by": 1,
							        "inserted_on": "2020-05-12 17:27:10"
							    }
							}
						  );
    */
	public function _set_how_to_learn($details=array())
	{
      	$validation_error='';
      	$details=$this->decryptArray($details);
      	$user_id= $this->session->userdata('user_id');
      	if(isset($details['how_to_learn_id']) && !empty($details['how_to_learn_id']))
      	{
      		$flag=1;
      	}
      	else
      	{
      		$flag=0;
      	}
    	if($this->validationLearnDetails($details,$flag))
    	{
      		if($details)
      		{
      	 		$learn = array
		    	(
		    		'how_to_learn_id'=>isset($details['how_to_learn_id'])?$details['how_to_learn_id']:NULL,
		    		'how_to_learn_name' =>$details['how_to_learn_name'],
		      	 	'how_to_learn_description' =>$details['how_to_learn_description'], 
		      	 	'how_to_learn_video'=>$details['how_to_learn_video'], 
		      	 	'modified_by'=>$user_id,
                    'modified_on'=>date('Y-m-d H:i:s')
		      	);	
		  		if($flag==0)
                {
                    $learn['inserted_by']=$user_id;
                    $learn['inserted_on']=date('Y-m-d H:i:s');
                    $learn['display']='Y';
                    $learn['in_use']='Y';
                    $how_to_learn_id= $this->standard_model->single_insert('tbl_how_to_learn',$learn);
      	 			$learn['how_to_learn_id']=$how_to_learn_id;
      				$learn= $this->encryptArray($learn);
      				return array(
                            'state'=>true,
                            'msg'=>'How to Learn Added Successfully!',
                            'details'=>$learn
                            );
                }
				else
				{   
					$how_to_learn_id=$details['how_to_learn_id'];
					$present_how_to_learn_id=$this->standard_model->selectAllWhr('tbl_how_to_learn','how_to_learn_id',$how_to_learn_id);
					if(isset($present_how_to_learn_id) && !empty($present_how_to_learn_id))
					{							
                    	$how_to_learn_id= $this->standard_model->single_insert('tbl_how_to_learn',$learn);
      	 				$learn['how_to_learn_id']=$how_to_learn_id;
      					$learn= $this->encryptArray($learn);        		
            				return array(
                    	    			'state'=>true,
                    	    			'msg'=>'How To Learn Updated!',
                    	    			'details'=>$learn
                    	    			 );
            		}
            		else
            		{
            			return array(
                    	   			 'state'=>false,
                    	   			 'msg'=>'Unable to Update How To Learn! how_to_learn_id is not present!',
                    	   			 'details'=>false
                    	   			  );
         			}
            	}        			      	 
      		}
      	 	else
        	{
            	return array(
            			'state'=>False,
            			'msg'=>'How To Learn Failed to Save!',
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
    Author: SNEHAL KULKARNI               Date: 12 May 2020
    -----------------------------------------------------------------------------------
	Purpose: Validations for How To Learn
	*/
	public function validationLearnDetails($details,$flag)
	{
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'how_to_learn_id'=>isset($details['how_to_learn_id']) ? $details['how_to_learn_id'] :'',
        	'how_to_learn_name'=>isset($details['how_to_learn_name']) ? $details['how_to_learn_name'] :'',
        	'how_to_learn_description'=>isset($details['how_to_learn_description']) ? $details['how_to_learn_description'] :'',
        	'how_to_learn_video'=>isset($details['how_to_learn_video']) ? $details['how_to_learn_video'] :''
		));
        $this->form_validation->set_rules('how_to_learn_id','how_to_learn_id', array('min_length[1]','max_length[10]',"regex_match[/^[0-9]*$/]"),
		array(
       			'min_length'=>'how_to_learn_id Min 1 Number Required.',
				'max_length'=>'how_to_learn_id Max 10 Number allowed.',
				'regex_match'=>'how_to_learn_id Should Have Only Numbers'
             ));

        if($flag==0)
        {
        	$this->form_validation->set_rules('how_to_learn_name','how_to_learn_name',array('required','min_length[1]','max_length[49]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,49}$/]",'is_unique[tbl_how_to_learn.how_to_learn_name]'),
			array(
				'required'=>'How To Learn Name is Required',
				'min_length'=>'How To Learn Name Min 2 Characters Required.',
				'max_length'=>'In How To Learn Name Field Maximum 50 Characters are Allowed.',
	    	  	'regex_match'=>'How To Learn Name is Not Valid',
	    	  	'is_unique' =>'Duplicate entry for How To Learn Name.'
      		  ));
        }
    	elseif($flag==1)
    	{
    		$this->form_validation->set_rules('how_to_learn_name','how_to_learn_name',array('required','min_length[1]','max_length[49]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>?_+\w\s]{1,49}$/]"),
			array(
				'required'=>'How To Learn Name is Required',
				'min_length'=>'How To Learn Name Min 2 Characters Required.',
				'max_length'=>'In How To Learn Name Field Maximum 50 Characters are Allowed.',
	    	  	'regex_match'=>'How To Learn Name is Not Valid'
      		  ));
    	}
    	
   //      $this->form_validation->set_rules('how_to_learn_description','how_to_learn_description',array('required','min_length[1]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>?_+\w\s]*/]"),
			// array(
			// 	'required'=>'Description is Required',
			// 	'min_length'=>'In Description Min 2 Characters Required.',
			// 	//'max_length'=>'In Description Field Maximum 500 Characters are Allowed.',
	  //   	  	'regex_match'=>'Description is Not Valid'
   //    		  ));
        $this->form_validation->set_rules('how_to_learn_video','how_to_learn_video',array('required'),
		array(
				'required'=>'How To Learn Video Required'
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
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Get How To Learn Details
    parameter:none,all,how_to_learn_id
	Response:return array(
                  			{
						    "msg": "Record Found!",
						    "state": true,
						    "details": [
						        {
						            "how_to_learn_id": "2nWpd",
						            "how_to_learn_name": "Meditation",
						            "how_to_learn_description": "To meditate daily is a good habbit.",
						            "how_to_learn_video": "meditation.png",
						            "visibility": "show",
						            "inserted_on": "2020-05-12 17:10:20",
						            "inserted_by": "1",
						            "modified_on": "2020-05-12 17:13:17",
						            "modified_by": "1",
						            "display": "Y",
						            "in_use": "Y"
						        }
						    ]
							}
						);
	*/

	public function _get_how_to_learn($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['how_to_learn_id']))
        {
        	$id=$details['how_to_learn_id'];
        	$results = $this->standard_model->selectAllWhr('tbl_how_to_learn','how_to_learn_id',$id);
        }
        else if(isset($details['all']))
        {
        	$results = $this->standard_model->selectAll('tbl_how_to_learn');
        }
        else 
        {
	    	$results = $this->standard_model->selectAll('tbl_how_to_learn','in_use','Y');      
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
            if(isset($details['how_to_learn_id'])) 
        	{
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['how_to_learn_id']
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
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Hide How To Learn
    parameter:how_to_learn_id
	Response: return array( 	{
							    "state": true,
							    "msg": "How To Learn Hidden!",
							    "details": [
							        {
							            "how_to_learn_id": "2nWpd",
							            "how_to_learn_name": "Meditation",
							            "how_to_learn_description": "To meditate daily is a good habbit.",
							            "how_to_learn_video": "meditation.png",
							            "visibility": "show",
							            "inserted_on": "2020-05-12 17:10:20",
							            "inserted_by": "1",
							            "modified_on": "2020-05-12 17:18:18",
							            "modified_by": "1",
							            "display": "Y",
							            "in_use": "N"
							        }
							    ]
								}
		         			);
	*/
	public function _hide_how_to_learn($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['how_to_learn_id']))
		{
			$id=$details['how_to_learn_id'];
			$learn=array(
							'in_use'=>'N',
						  );
			$results = $this->standard_model->updateRecord('tbl_how_to_learn','how_to_learn_id',$id,$learn);
			$resdata = $this->standard_model->selectAllWhr('tbl_how_to_learn','how_to_learn_id',$details['how_to_learn_id']);
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
		                 	 'msg'=>'Hidden How To Learn !',
		                 	 'details'=>$result
						    );
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide How To Learn!';
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
			'msg'=>'how_to_learn_id Required!',
			);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Restored How To Learn
    parameter:how_to_learn_id
	Response:return array(
							{
							    "state": true,
							    "msg": "How To Learn Restored!",
							    "details": [
							        {
							            "how_to_learn_id": "2nWpd",
							            "how_to_learn_name": "Meditation",
							            "how_to_learn_description": "To meditate daily is a good habbit.",
							            "how_to_learn_video": "meditation.png",
							            "visibility": "show",
							            "inserted_on": "2020-05-12 17:10:20",
							            "inserted_by": "1",
							            "modified_on": "2020-05-12 17:23:33",
							            "modified_by": "1",
							            "display": "Y",
							            "in_use": "Y"
							        }
							    ]
							}
		         			);
	*/
	public function _restore_how_to_learn($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['how_to_learn_id']))
		{
			$id=$details['how_to_learn_id'];
			$learn=array(
							'in_use'=>'Y',
							);
			$results = $this->standard_model->updateRecord('tbl_how_to_learn','how_to_learn_id',$id,$learn);
			$resdata = $this->standard_model->selectAllWhr('tbl_how_to_learn','how_to_learn_id',$details['how_to_learn_id']);
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
		                 		 'msg'=>'Restored How To Learn !',
		                 		 'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore learn';
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
						'msg'=>'how to learn id Required!',
						);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Delete How To learn
    parameter:how_to_learn_id
	Response: return array(
							{
							    "state": true,
							    "msg": "How To Learn Deleted!",
							    "details": {
							        "how_to_learn_id": "2nWpd"
							    }
							}
							);
	*/
	public function _delete_how_to_learn($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['how_to_learn_id']))
		{    
			$id=$details['how_to_learn_id'];
		    $learn=array(
							'display'=>'N',
							);
			$results = $this->standard_model->updateRecord('tbl_how_to_learn','how_to_learn_id',$id,$learn);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
							'state'=>true,
							'msg'=>'Deleted How To Learn !',
							'details'=>$results
							);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete How To Learn!';
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
			'msg'=>'how_to_learn_id Required!',
			);
		}
	}
}