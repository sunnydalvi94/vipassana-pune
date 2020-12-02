<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Slider_type_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
		$this->load->model('slider-type/slider_type_model');
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI                Date: 25 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Save Slider Type Details
	Response: return array(
						  	{
							    "state": true,
							    "msg": "Slider Type Added Successfully!",
							    "details": {
							        "slider_type_id": "2nWpd",
							        "slider_type": "Children Course 1",
							        "description": "slider for first slider of children_course page",
							        "modified_by": 1,
							        "modified_on": "2020-05-25 18:04:21",
							        "inserted_by": 1,
							        "inserted_on": "2020-05-25 18:04:21",
							        "display": "Y",
							        "in_use": "Y"
							    }
							}
						  );
    */
	public function _set_slider_type($details=array())
	{
      	$validation_error='';
      	$details=$this->decryptArray($details);
      	$user_id= $this->session->userdata('user_id');
      	if(isset($details['slider_type_id']) && !empty($details['slider_type_id']))
      	{
      		$flag=1;
      	}
      	else
      	{
      		$flag=0;
      	}
    	if($this->validationSliderTypeDetails($details,$flag))
    	{
      		if($details)
      		{
      	 		$slider_type = array
		    	(
		    		'slider_type_id'=>isset($details['slider_type_id'])?$details['slider_type_id']:NULL,
		    		'slider_type' =>$details['slider_type'],
		      	 	'description' =>$details['description'], 
		      	 	'modified_by'=>$user_id,
                    'modified_on'=>date('Y-m-d H:i:s')
		      	);	
		  		if($flag==0)
                {
                    $slider_type['inserted_by']=$user_id;
                    $slider_type['inserted_on']=date('Y-m-d H:i:s');
                    $slider_type['display']='Y';
                    $slider_type['in_use']='Y';
                    $slider_type_id= $this->standard_model->single_insert('tbl_slider_type',$slider_type);
      	 			$slider_type['slider_type_id']=$slider_type_id;
      				$slider_type= $this->encryptArray($slider_type);
      				return array(
                            'state'=>true,
                            'msg'=>'Slider Type Added Successfully!',
                            'details'=>$slider_type
                            );
                }
				else
				{   
					$slider_type_id=$details['slider_type_id'];
					$present_slider_type_id=$this->standard_model->selectAllWhr('tbl_slider_type','slider_type_id',$slider_type_id);
					if(isset($present_slider_type_id) && !empty($present_slider_type_id))
					{							
                    	$slider_type_id= $this->standard_model->single_insert('tbl_slider_type',$slider_type);
      	 				$slider_type['slider_type_id']=$slider_type_id;
      					$slider_type= $this->encryptArray($slider_type);        		
            				return array(
                    	    			'state'=>true,
                    	    			'msg'=>'Slider Type Updated!',
                    	    			'details'=>$slider_type
                    	    			 );
            		}
            		else
            		{
            			return array(
                    	   			 'state'=>false,
                    	   			 'msg'=>'Unable to Update Slider Type! slider_type_id is not present!',
                    	   			 'details'=>false
                    	   			  );
         			}
            	}        			      	 
      		}
      	 	else
        	{
            	return array(
            			'state'=>False,
            			'msg'=>'Slider Type Failed to Save!',
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
    Author: SNEHAL KULKARNI               Date: 25 May 2020
    -----------------------------------------------------------------------------------
	Purpose: Validations for Slider Type
	*/
	public function validationSliderTypeDetails($details,$flag)
	{
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'slider_type_id'=>isset($details['slider_type_id']) ? $details['slider_type_id'] :'',
        	'slider_type'=>isset($details['slider_type']) ? $details['slider_type'] :'',
        	'description'=>isset($details['description']) ? $details['description'] :''
		));
        $this->form_validation->set_rules('slider_type_id','slider_type_id', array('min_length[1]','max_length[10]',"regex_match[/^[0-9]*$/]"),
		array(
       			'min_length'=>'slider_type_id Min 1 Number Required.',
				'max_length'=>'slider_type_id Max 10 Number allowed.',
				'regex_match'=>'slider_type_id Should Have Only Numbers'
             ));

        if($flag==0)
        {
        	$this->form_validation->set_rules('slider_type','slider_type',array('required','min_length[1]','max_length[49]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,49}$/]",'is_unique[tbl_slider_type.slider_type]'),
			array(
				'required'=>'Slider Type is Required',
				'min_length'=>'In Slider Type Min 1 Number Required.',
				'max_length'=>'In Slider Type Field Maximum 50 Characters are Allowed.',
	    	  	'regex_match'=>'Slider Type is Not Valid',
	    	  	'is_unique' =>'Duplicate entry for Slider Type.'
      		  ));
        }
    	elseif($flag==1)
    	{
    		$this->form_validation->set_rules('slider_type','slider_type',array('required','min_length[1]','max_length[49]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,49}$/]"),
			array(
				'required'=>'Slider type is Required',
				'min_length'=>'In Slider Type Min 1 Number Required.',
				'max_length'=>'In Slider Type Field Maximum 50 Characters are Allowed.',
	    	  	'regex_match'=>'Slider Type is Not Valid'
      		  ));
    	}
    	
        $this->form_validation->set_rules('description','description',array('required','min_length[1]','max_length[99]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,99}$/]"),
			array(
				'required'=>'Description is Required',
				'min_length'=>'In Description Min 1 Number Required.',
				'max_length'=>'In Description Field Maximum 100 Characters are Allowed.',
	    	  	'regex_match'=>'Description is Not Valid'
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
    Author: SNEHAL KULKARNI             Date: 25 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Get Slider Type Details
    parameter:none,all,slider_type_id
	Response:return array(
                  			{
							    "msg": "Record Found!",
							    "state": true,
							    "details": [
							        {
							            "slider_type_id": "2nWpd",
							            "slider_type": "Children Course 1",
							            "description": "slider for first slider of children_course page",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-25 18:04:21",
							            "modified_by": "1",
							            "modified_on": "2020-05-25 18:04:21",
							            "display": "Y",
							            "in_use": "Y"
							        }
							    ]
							}
						);
	*/

	public function _get_slider_type($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['slider_type_id']))
        {
        	$id=$details['slider_type_id'];
        	$results = $this->standard_model->selectAllWhr('tbl_slider_type','slider_type_id',$id);
        }
        else if(isset($details['all']))
        {
        	$results = $this->standard_model->selectAll('tbl_slider_type');
        }
        else 
        {
	    	$results = $this->standard_model->selectAll('tbl_slider_type','in_use','Y');      
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
            if(isset($details['slider_type_id'])) 
        	{
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['slider_type_id']
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
    Author: SNEHAL KULKARNI             Date: 25 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Hide Slider Type
    parameter:slider_type_id
	Response: return array({
							    "state": true,
							    "msg": "Slider Type Hidden!",
							    "details": [
							        {
							            "slider_type_id": "2nWpd",
							            "slider_type": "Children Course 1",
							            "description": "slider for first slider of children_course page",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-25 18:04:21",
							            "modified_by": "1",
							            "modified_on": "2020-05-25 18:08:35",
							            "display": "Y",
							            "in_use": "N"
							        }
							    ]
							}
		         			);
	*/
	public function _hide_slider_type($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['slider_type_id']))
		{
			$id=$details['slider_type_id'];
			$slider_type=array(
							'in_use'=>'N',
						  );
			$results = $this->standard_model->updateRecord('tbl_slider_type','slider_type_id',$id,$slider_type);
			$resdata = $this->standard_model->selectAllWhr('tbl_slider_type','slider_type_id',$details['slider_type_id']);
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
		                 	 'msg'=>'Slider Type Hidden!',
		                 	 'details'=>$result
						    );
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide Slider Type!';
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
			'msg'=>'slider_type_id Required!',
			);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 25 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Restored Slider Type
    parameter:slider_type_id
	Response:return array(
							{
							    "state": true,
							    "msg": "Slider Type Restored!",
							    "details": [
							        {
							            "slider_type_id": "2nWpd",
							            "slider_type": "Children Course 1",
							            "description": "slider for first slider of children_course page",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-25 18:04:21",
							            "modified_by": "1",
							            "modified_on": "2020-05-25 18:09:55",
							            "display": "Y",
							            "in_use": "Y"
							        }
							    ]
							}
		         		);
	*/
	public function _restore_slider_type($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['slider_type_id']))
		{
			$id=$details['slider_type_id'];
			$slider_type=array(
							'in_use'=>'Y',
							);
			$results = $this->standard_model->updateRecord('tbl_slider_type','slider_type_id',$id,$slider_type);
			$resdata = $this->standard_model->selectAllWhr('tbl_slider_type','slider_type_id',$details['slider_type_id']);
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
		                 		 'msg'=>'Slider Type Restored!',
		                 		 'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore Slider Type';
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
						'msg'=>'slider_type_id Required!',
						);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 25 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Delete Slider Type
    parameter:slider_type_id
	Response: return array(
							{
							    "state": true,
							    "msg": "Slider Type Deleted!",
							    "details": {
							        "slider_type_id": "2nWpd"
							    }
							}
						  );
	*/
	public function _delete_slider_type($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['slider_type_id']))
		{    
			$id=$details['slider_type_id'];
		    $slider_type=array(
							'display'=>'N',
							);
			$results = $this->standard_model->updateRecord('tbl_slider_type','slider_type_id',$id,$slider_type);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
							'state'=>true,
							'msg'=>'Slider Type Deleted!',
							'details'=>$results
							);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete Slider Type!';
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
			'msg'=>'slider_type_id Required!',
			);
		}
	}
	/*
    =================================================================================
    Author:Shubhangi Jagadale                        Date:11/05/2020
    =================================================================================
	Purpose: fetch  all slider type records
	*/
	public function _get_slider_type_data($details=array())
    {
		$details = $this->decryptArray($details);
		$slider_type_data = $this->slider_type_model->fetch_slider_type_data($details);
		if($slider_type_data)
		{
			$data=array();
			foreach ($slider_type_data as $slider_type)
			{
				$data[] = (array)$slider_type;  
			}
			if(isset($data) && is_array($data)){
			$slider_type = $this->encryptArray($data);
			}
			return array(
				'msg'=>'Succesfully Fetch Record!',
				'state'=>true,
				'details'=>$slider_type
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
}