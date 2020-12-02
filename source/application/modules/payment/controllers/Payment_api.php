<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	
	Purpose: Get payment
	return array(
	 	'state'=>TRUE,
		'msg'=>'Records Found!',
	 	'details'=>array(  
	 		array(
	 		"payment_id": "7yPXy",
            "amount": "30000",
            "date_time": "2020-05-14 12:00:09",
            "status": "0-pending",
            "request": "credit card",
            "response": "yes",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-14 11:59:44",
            "modified_by": "1",
            "modified_on": "2020-05-14 12:00:09",
            "in_use": "Y"
	 		)
	 	)
	 );
    */
	public function _get_payment($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['payment_id']))
        {
        	$id=$details['payment_id'];
        $results = $this->standard_model->selectAllWhr('tbl_payment','payment_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_payment');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_payment','in_use','Y');        	
          
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
        	if(isset($details['payment_id'])) 
        	{
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['payment_id']
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
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	"state": true,
    "msg": "payment added!",
    "details": {
        "payment_id": "518Yn",
        "amount": "30000",
        "date_time": "2020-05-15 11:31:26",
        "status": "pending",
        "request": "credit card",
        "response": "yes",
        "modified_by": 1,
        "modified_on": "2020-05-15 11:31:26",
        "inserted_by": 1,
        "inserted_on": "2020-05-15 11:31:26"
    */
    public function _set_payment($details=array())
	{
		
	  	$validation_error='';
        $details = $this->decryptArray($details);
        if(isset($details['payment_id']) && !empty($details['payment_id']))
		{
				$results = $this->standard_model->selectAllWhr('tbl_payment','payment_id',$details['payment_id']); 
	            if(!empty($results))
				{
				$flag=1;
				}
				else
				{
					return array(
                            'state'=>false,
                            'msg'=>'payment_id not exit!',
                            'details'=>false
                            );
				}	
		}
		else
		{
		 $flag=0;	
		}
		$userid=isset($userdata['user_id'])?$userdata['user_id']:'';
        if($this->validationpaymentMasterDetails($details))
		{
            if($details)
            {
                $user_id= $this->session->userdata('user_id');
                // $user_id=isset($userdata['user_id'])?$userdata['user_id']:'';
                

                $payment = array(
                		'payment_id'=>isset($details['payment_id'])?$details['payment_id']:NULL,
                		'donation_id'=>$details['donation_id'],
                		'amount'=>$details['amount'],
                        'date_time'=>date('Y-m-d H:i:s'),
                        // $details['date_time'],
                        'status'=>$details['status'],
                        'request'=>$details['request'],
                        'response'=>$details['response'],
                        'modified_by'=>isset($user_id)?$user_id:'NULL',
                        'modified_on'=>date('Y-m-d H:i:s'),
                        
                        );
                
                if(!isset($details['payment_id']) && empty($details['payment_id']))
                {
                    $payment['inserted_by']=isset($user_id)?$user_id:'NULL';
                    $payment['inserted_on']=date('Y-m-d H:i:s');
                }
            
                $payment_id = $this->standard_model->single_insert('tbl_payment',$payment);
                $payment['payment_id']=$payment_id;
                $payment= $this->encryptArray($payment);
                if($flag==0)
                {
                return array(
                            'state'=>true,
                            'msg'=>'payment added!',
                            'details'=>$payment
                            );
            	}else
            	{
            	return array(
                            'state'=>true,
                            'msg'=>'payment updated!',
                            'details'=>$payment
                            );
            	}
            }
            else
            {
                return array(
                'state'=>False,
                'msg'=>'payment Failed to Saved!',
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
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	Purpose: validation for payment
	*/
	function validationpaymentMasterDetails($details)
    {
	 	$var1="'";
	 	$var2='"';
	 	$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
		array(
		 	'payment_id'=>isset($details['payment_id']) ? $details['payment_id'] :'',
			'amount'=>isset($details['amount']) ? $details['amount'] :'',
			'response'=>isset($details['response']) ? $details['response'] :'',
			'request'=>isset($details['request']) ? $details['request'] :'',
			// 'status'=>isset($details['status']) ? $details['status'] :'',
			'date_time'=>isset($details['date_time']) ? $details['date_time'] :''
		)); 
		$this->form_validation->set_rules('payment_id','payment_id', array('min_length[1]','max_length[20]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
		array(    
			'min_length'=>'Min 1 Number Required.',
			'max_length'=>'Max 20 Number allowed.',
			'regex_match'=>'payment_id Should Have Only Numbers'
		));
		$this->form_validation->set_rules('amount','amount', array('required','min_length[1]','max_length[10]',"regex_match[/^([0-9][0-9\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{0,8})$/]"),
	 	array( 
	 		                                                                                      
	 			'min_length'=>'For amount Min 1 Number Required.',
	 			'max_length'=>'For amount Max 10 Number allowed.',
	 			'required'=>'Required amount',
	 			'regex_match'=>'Only numbers and special characters are allowed for amount.'
	 	));
		$this->form_validation->set_rules('response','response',array('required'),
		array(
		 	'required'=>'Required response',
		 	// 'max_length'=>'For response Max 249 Character Allowed.'
		 	
		));
		// $this->form_validation->set_rules('status','status',array('required','regex_match[/^([A-Za-z]{1,99})$/]'),
		// array(
		//  	'required'=>'Required status',
		//  	'regex_match'=>'Only alphabets allowed for status.'
		//  	// 'max_length'=>'For response Max 249 Character Allowed.'
		 	
		// ));
		$this->form_validation->set_rules('request','request',array('required'),
		array(
		 	'required'=>'Required request',

		 	// 'max_length'=>'For request Max 249 Character Allowed.'
		 	
		));
		$this->form_validation->set_rules('date_time','date_time',array('required'),
		array(
		 	'required'=>'Required date_time',
		 	 	
		 
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
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	  "state": true,
    "msg": "payment Hidden!",
    "details": [
        {
            "payment_id": "518Yn",
            "amount": "30000",
            "date_time": "2020-05-15 11:31:26",
            "status": "",
            "request": "credit card",
            "response": "yes",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-15 11:31:26",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:31:56",
            "in_use": "N"
        }
	*/
	public function _hide_payment($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['payment_id']))
		{
			$id=$details['payment_id'];
			$payment=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_payment','payment_id',$id,$payment);
			$resdata = $this->standard_model->selectAllWhr('tbl_payment','payment_id',$details['payment_id']);
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
		                  'msg'=>'payment Hidden!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide payment';
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
			'msg'=>'payment_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	"state": true,
    "msg": "payment Restore!",
    "details": [
        {
            "payment_id": "518Yn",
            "amount": "30000",
            "date_time": "2020-05-15 11:31:26",
            "status": "",
            "request": "credit card",
            "response": "yes",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-15 11:31:26",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:32:39",
            "in_use": "Y"
        }
	*/
	public function _restore_payment($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['payment_id']))
		{	
		    $id=$details['payment_id'];
			$payment=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_payment','payment_id',$id,$payment);
			$resdata = $this->standard_model->selectAllWhr('tbl_payment','payment_id',$details['payment_id']);
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
		                  'msg'=>'payment Restore!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore payment';
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
			'msg'=>'payment_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	"state": true,
    "msg": "payment Delete!",
    "details": {
        "payment_id": "518Yn"
    }
	*/
	public function _delete_payment($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['payment_id']))
		{    
			$id=$details['payment_id'];
		    $payment=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_payment','payment_id',$id,$payment);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'payment Delete!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete payment';
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
			'msg'=>'payment_id Required!',
			);
		}
	 }

	/*
	========================================================
	Author:Mrudul Thite                     Date:13/06/2020
	========================================================
	*/
	public function _payment_pending_status($details=array())
  	{
  	  $details = $this->decryptArray($details);	
      $id=$details['payment_id'];

      $records= array('status'=>'1');
      $results = $this->standard_model->updateRecord('tbl_payment','payment_id',$id,$records);
      
      if($results)
        { 
          $results = $this->encryptArray($details);		
          return array(
                      'state'=>true,
                      'msg'=>'Payment Pending!',
                      'details'=>$records
                    );
        }
        else
       {
          return array(
                      'state'=>false,
                      'msg'=>'Failed Payment..!!',
                      'details'=>false
                    );
        }
  	}

  	/*
	========================================================
	Author:Mrudul Thite                     Date:13/06/2020
	========================================================
	*/

  	public function _payment_success_status($details=array())
  	{
  	  $details = $this->decryptArray($details);	
      $id=$details['payment_id'];
      $records= array('status'=>'2');
      $results = $this->standard_model->updateRecord('tbl_payment','payment_id',$id,$records);
      if($results)
        { 
          $results = $this->encryptArray($details);	
          return array(
                      'state'=>true,
                      'msg'=>'Payment done!',
                      'details'=>$records
                    );
        }
        else
       {
          return array(
                      'state'=>false,
                      'msg'=>'Failed Payment..!',
                      'details'=>false
                    );
        }
  	}
}