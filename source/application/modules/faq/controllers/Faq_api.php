<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Faq_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
		$this->load->model('faq/faq_model');
	} 
	/*
    =================================================================================
    Author:Shubhangi Jagadale                        Date:11/05/2020
    =================================================================================
	Purpose: Get User FAQ
	return array(
	{
		"state": true,
		"msg": "new FAQ Added!",
		"details": {
			"faq_id": 4,
			"question_name": "How sto registesrs stusdent for exam s?",
			"answer": "1.s Login withs syosur losgin_id. you will redirect to a page .2. On My Profile page, click on Tab.:",
			"sequence": "1",
			"modified_by": 1,
			"modified_on": "2020-05-12 12:55:17",
			"inserted_by": 1,
			"inserted_on": "2020-05-12 12:55:17"
		}
    });
    */
	public function _get_faq($details=array())
    {
		$details = $this->decryptArray($details);
		$results = $this->faq_model->fetch_faq($details);
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
	Purpose: Save user FAQ
	return array(
			'state'=>TRUE,
			'msg'=>'New FAQ added!',
			'details'=>$details
		);
    */
    public function _set_faq($details=array())
	{
		$validation_error='';
		$details = $this->decryptArray($details);
		if(isset($details['faq_id']) && !empty($details['faq_id']))
		{
		  $flag=1;
		}
		else
		{
		  $flag=0;
		}
		if($this->validationFaqMasterDetails($details,$flag))
		{
			if($details)
			{
				$user_id= $this->session->userdata('user_id');
				$faq = array(
					'faq_id'=>isset($details['faq_id'])?$details['faq_id']:NULL,
						'question_name'=>$details['question_name'],
						'answer'=>$details['answer'],
					    'sequence'=>$details['sequence'],
						'modified_by'=>$user_id,
						'modified_on'=>date('Y-m-d H:i:s')
						);
				if(!isset($details['faq_id']) && empty($details['faq_id']))
				{
					$faq['inserted_by']=$user_id;
					$faq['inserted_on']=date('Y-m-d H:i:s');
				}
				$faq_id = $this->standard_model->single_insert('tbl_faq',$faq);
				$faq['faq_id']=$faq_id;
				$faq= $this->encryptArray($faq);
				if(isset($details['faq_id']) && !empty($details['faq_id']))
				{
					$results = $this->standard_model->selectAllWhr('tbl_faq','faq_id',$details['faq_id']); 
					if($results)
					{
						if(isset($details['faq_id']) && !empty($details['faq_id']))
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
							'details'=>$faq
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
						'msg'=>'New Question and Answer Added!',
						'details'=>$faq
					);
				}
			}
			else
			{
				return array(
					'state'=>False,
					'msg'=>'FAQ Failed to Saved!',
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
	Purpose: validation for Faq
	*/
	function validationFaqMasterDetails($details,$flag)
    {
		$var1="'";
	 	$var2='"';
	 	$this->form_validation->set_error_delimiters('','');
        $this->form_validation->set_data(
        array(
			'faq_id'=>isset($details['faq_id'])?$details['faq_id'] :'',
	 		'question_name'=>isset($details['question_name'])?$details['question_name'] :'',
			'answer'=>isset($details['answer'])?$details['answer'] :'',
			'sequence'=>isset($details['sequence'])?$details['sequence'] :'',
       	)); 
	    $this->form_validation->set_rules('faq_id','faq_id', array('min_length[1]','max_length[11]',"regex_match[/^([0-9][0-9]{0,10})$/]"),
	    array(    
		   'min_length'=>'faq_id Min 1 Number Required.',
		   'max_length'=>'faq_id Max 11 Number allowed.',
		   'regex_match'=>'faq_id Should Have Only Numbers'
		));
	 	$this->form_validation->set_rules('answer','answer',array('required','min_length[2]','max_length[1000]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\_\'\"\:\;\&\s]{1,999})$/]'),
		array(
			'required'=>'Answer  Required',  
			'min_length'=>'Answer Min 2 Character Required.',
			'max_length'=>'Answer Max 255 Character Allowed.',
			'regex_match'=>'Answer Should Have Only Alphanumeric character and Special Character ,'.$var1.'( ) <>'.$var2.' - \ & _ : ; | & Space are Allowed'			
		));
	    $this->form_validation->set_rules('question_name','question_name',array('required','min_length[2]','max_length[255]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\<\>\_\'\"\?\:\;\&\s]{1,254})$/]'),
	    array(
			'required'=>'Question Name  Required',  
			'min_length'=>'Question Name Min 2 Character Required.',
			'max_length'=>'Question Name Max 255 Character Allowed.',
			'regex_match'=>'Question Name Should Have Only Alphanumeric character and Special Character ,'.$var1.'( ) <>'.$var2.' - \ & _ ? : ; | & Space are Allowed'
		));
		if($flag==0){
		 $this->form_validation->set_rules('sequence','sequence', array('required','min_length[1]','max_length[11]',"regex_match[/^([0-9][0-9]{0,10})$/]",'is_unique[tbl_faq.sequence]'),
		 array(    
		    'required'=>'Sequence  Required',  
		   'min_length'=>'sequence Min 1 Number Required.',
		   'max_length'=>'sequence Max 11 Number allowed.',
		   'regex_match'=>'sequence Should Have Only Numbers',
		   'is_unique' =>'Duplicate entry for Sequence.'
		 ));
		}
		else{
			$this->form_validation->set_rules('sequence','sequence', array('required','min_length[1]','max_length[11]',"regex_match[/^([0-9][0-9]{0,10})$/]"),
			array(    
			   'required'=>'Sequence  Required',  
			  'min_length'=>'sequence Min 1 Number Required.',
			  'max_length'=>'sequence Max 11 Number allowed.',
			  'regex_match'=>'sequence Should Have Only Numbers'
			));
		}
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
	Purpose: Hide FAQ
	return array(
	 		'state'=>TRUE,
	 		'msg'=>'FAQ hidden!',
	 		'details'=>$details
	 	);
	*/
	public function _hide_faq($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['faq_id']))
		{
			$id=$details['faq_id'];
			$faq=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_faq','faq_id',$id,$faq);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_faq','faq_id',$details['faq_id']);
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
						'msg'=>'Hidden Question and Answer!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide Faq';
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
				'msg'=>'faq_topic_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose: Restore FAQ
	return array(
		'state'=>TRUE,
		'msg'=>'FAQ restored!',
		'details'=>$details
	);
	*/
	public function _restore_faq($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['faq_id']))
		{	
		    $id=$details['faq_id'];
			$faq=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_faq','faq_id',$id,$faq);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_faq','faq_id',$details['faq_id']);
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
						'msg'=>'Restored Question and Answer!',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide Faq';
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
			'msg'=>'faq_topic_id Required!',
			);
		}
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:31/01/2020
	=================================================================================
	Purpose:Delete FAQ
	/*return array(
		'state'=>TRUE,
		'msg'=>'FAQ deleted!',
		'details'=>$details
	);
	*/
	public function _delete_faq($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['faq_id']))
		{    
			$id=$details['faq_id'];
			$faq=array(
				'display'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_faq','faq_id',$id,$faq);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>' Deleted Question and Answer!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete Faq';
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
			'msg'=>'faq_id Required!',
			);
		}
	}
}