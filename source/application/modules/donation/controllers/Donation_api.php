<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Donation_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
		$this->load->model('common_model');
	    $this->load->model('donation/donation_model');

	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	Purpose: Get donation
	return array(
	 	'state'=>TRUE,
		'msg'=>'Records Found!',
	 	'details'=>array(  
	 		array(
	 		"topic_name": "membership",
            "volunteers	": "How to register new Institute?",
            "activities	": "1. Go to link msceia.in.\n2. On Home page click on Sign Up button.",
            "modified_by": 1,
            "donation_id": 4,
            "created_by": 1,
            "created_on": "2020-02-28 18:21:30"
	 		)
	 	)
	 );
    */
	public function _get_donation($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['donation_id']))
        {
        	$id=$details['donation_id'];
        $results = $this->standard_model->selectAllWhr('tbl_donation','donation_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_donation');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_donation','in_use','Y');        	
          
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
                  'details'=>false
            );
        }
    }
	/*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	Purpose: Save  donation
	return array(
			'state'=>TRUE,
			'msg'=>'New donation added!',
			'details'=>$details
		);
    */
    public function _set_donation($details=array())
	{
	  	$validation_error='';
        $details = $this->decryptArray($details);
        
			if(isset($details['donation_id']) && !empty($details['donation_id']))
			{
				$results = $this->standard_model->selectAllWhr('tbl_donation','donation_id',$details['donation_id']); 
	            if(!empty($results))
				{
				$flag=1;
				}
				else
				{
					return array(
                            'state'=>false,
                            'msg'=>'donation_id not exit!',
                            'details'=>false
                            );
			
				
				}	
			
			
		}
		else
		{
		 $flag=0;	
		}
        if($this->validationdonationMasterDetails($details))
		{
            if($details)
            {
                $user_id= $this->session->userdata('user_id');
               
                	$donation = array(
					'donation_id'=>isset($details['donation_id'])?$details['donation_id']:NULL,
					'first_name'=>$details['first_name'],
	                'last_name'=>$details['last_name'],
	                'pan_no'=>$details['pan_no'],
	                'date_time'=>date('Y-m-d H:i:s'),
	                'amount'=>$details['amount'],
	                'address_line_1'=>$details['address_line_1'],
	                'address_line_2'=>$details['address_line_2'],
	                'city'=>$details['city'],
	                'state'=>$details['state'],
	                'country'=>$details['country'],
	                'pin_code'=>$details['pin_code'],
	                'contact_number'=>$details['contact_number'],
	                'email'=>$details['email'],
	                'remark'=>$details['remark'],
	                'status'=>'1',
	                'date_time'=>date('Y-m-d H:i:s'),
	                'modified_by'=>isset($user_id)?$user_id:'NULL',
	                'modified_on'=>date('Y-m-d H:i:s'),
                        );
	                if(!isset($details['donation_id']) && empty($details['donation_id']))
	                {
	                    $donation['inserted_by']=isset($user_id)?$user_id:'NULL';
	                    $donation['inserted_on']=date('Y-m-d H:i:s');
	                }
	                // if(isset($donation['date_time']) && !empty($donation['date_time']))
                 //    {
                 //        $date=$donation['date_time'];
                 //        $date1 = str_replace('/', '-',$date);
                 //        $donation['date_time'] = date("d-m-Y H:i:s", strtotime($date1));
                        
                 //    }
	                $donation_id = $this->standard_model->single_insert('tbl_donation',$donation);
	                $donation['donation_id']=$donation_id;
	                $donation= $this->encryptArray($donation);
	                if($flag==0)
	                {
	                return array(
	                            'state'=>true,
	                            'msg'=>'Donation Data Saved Successfully!',
	                            'details'=>$donation
	                            );
	            	}else
	            	{
	            	return array(
	                            'state'=>true,
	                            'msg'=>'donation Data updated!',
	                            'details'=>$donation
	                            );
	            	}
            	
            }
            else
            {
                return array(
                'state'=>False,
                'msg'=>'donation Failed to Saved!',
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
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	Purpose: validation for donation
	*/
	function validationdonationMasterDetails($details)
    {
	 	$var1="'";
	 	$var2='"';
	 	$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
		array(
		 	'donation_id'=>isset($details['donation_id']) ? $details['donation_id'] :'',
			''=>isset($details['']) ? $details[''] :'',
			'first_name'=>isset($details['first_name']) ? $details['first_name'] :'',
			'last_name'=>isset($details['last_name']) ? $details['last_name'] :'',
			'pan_no'=>isset($details['pan_no']) ? $details['pan_no'] :'',
			'amount'=>isset($details['amount']) ? $details['amount'] :'',
			'address_line_1'=>$details['address_line_1'],
            'address_line_2'=>$details['address_line_2'],
            'city'=>isset($details['city']) ? $details['city'] :'',
            'state'=>$details['state'],
            'country'=>$details['country'],
            'pin_code'=>$details['pin_code'],
            'contact_number'=>$details['contact_number'],
            'email'=>isset($details['email']) ? $details['email'] :'',
            'remark'=>$details['remark'],
            'status'=>$details['status'],


		)
		);
		if(!isset($details['donation_id']) && empty($details['donation_id']))
		{ 
		$this->form_validation->set_rules('donation_id','donation_id', array('min_length[1]','max_length[20]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
		array(    
			'min_length'=>'Min 2 Number Required.',
			'max_length'=>'Max 20 Number allowed.',
			'regex_match'=>'donation_id Should Have Only Numbers'
		));
		}else
		{
		}
		$this->form_validation->set_rules('','', array('min_length[1]','max_length[20]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
		array(    
			'min_length'=>'Min 2 Number Required.',
			'max_length'=>'Max 20 Number allowed.',
			'regex_match'=>' Should Have Only Numbers'
		));
		$this->form_validation->set_rules('first_name','first_name', array('required','min_length[2]','max_length[15]','regex_match[/^([A-Z0-9a-z][A-Z0 -9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,15})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For first_name Min 2 character Required.',
	 		'max_length'=>'For first_name Max 15 characters allowed.',
	 		'required'=>'Required first_name',
	 		'regex_match'=>'first_name Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	$this->form_validation->set_rules('last_name','last_name', array('required','min_length[2]','max_length[15]','regex_match[/^([A-Z0-9a-z][A-Z0 -9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,15})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'Forlast_name Min 2 characters Required.',
	 		'max_length'=>'For last_name Max 15 characters allowed.',
	 		'required'=>'Required last_name',
	 		'regex_match'=>'last_name Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	$this->form_validation->set_rules('pan_no','pan_no', array('required','max_length[10]','regex_match[/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For pan No Min 2 Number Required.',
	 		'max_length'=>'For  pan No Max 10 Number allowed.',
	 		'required'=>'pan No is Required ',
	 		'regex_match'=>'Please enter valid PAN number!'
	 	));
	 // 	$this->form_validation->set_rules('date_time','date_time',array('required'),
		// array(
		//  	'required'=>'Required date_time',
		// ));
		$this->form_validation->set_rules('amount','amount', array('required','min_length[1]','max_length[39]',"regex_match[/^([0-9][0-9]{0,9})$/]"),
	 	array( 
	 		                                                                                      
	 			'min_length'=>'For amount Min 1 Number Required.',
	 			'max_length'=>'For amount Max 39 Number allowed.',
	 			'required'=>'Required amount',
	 			'regex_match'=>'Max length 9 digits allowed for Amount.'
	 	));
	 	$this->form_validation->set_rules('address_line_1','aaddress_line_1',
   		 array( 'required','max_length[200]'),
        array(
                'required'=>'aaddress_line_1 is Required',
                'max_length'=>'Everything (alphabets/ numbers / special char) should be allowed.'
        ));
	    // $this->form_validation->set_rules('address_line_2','address_line_2',
	    // array( 'required','max_length[200]'),
	    // array(
	    //             'required'=>'address_line_2 is Required',
	    //             'max_length'=>'Everything (alphabets/ numbers / special char) should be allowed.'
	    // ));
	    $this->form_validation->set_rules('city','city', array('required','min_length[1]','max_length[249]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,249})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For city Min 1 Number Required.',
	 		'max_length'=>'For city Max 249 Number allowed.',
	 		'required'=>'Required city',
	 		'regex_match'=>'city Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	$this->form_validation->set_rules('state','state', array('required','min_length[1]','max_length[249]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,249})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For state Min 1 Number Required.',
	 		'max_length'=>'For state Max 249 Number allowed.',
	 		'required'=>'Required state',
	 		'regex_match'=>'state Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	$this->form_validation->set_rules('country','country', array('required','min_length[1]','max_length[249]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,249})$/]'),
	 	array
	 	( 
	 		                                                                                      
	 		'min_length'=>'For country Min 1 Number Required.',
	 		'max_length'=>'For country Max 249 Number allowed.',
	 		'required'=>'Required country',
	 		'regex_match'=>'country Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	 	$this->form_validation->set_rules('pin_code','pin_code',
   		array('required','min_length[6]','max_length[6]','regex_match[/^([0-9]{1,6})$/]'),
        array
        (
            'required'=>'Pin code is Required',
            'max_length'=>' Pin Code should not have more than 6 Number',
            'regex_match'=>'Only numbers allowed.'
            )
         );
	 	$this->form_validation->set_rules('contact_number','contact_number',
    	array('required','regex_match[/^[4-9][\d]{9}$/]'),
        array(
                'required'=>'Contact Number is Required',
                'regex_match'=>'Please Enter Valid Mobile numbers '
        ));
        $this->form_validation->set_rules('email', 'email',array('required','min_length[2]','max_length[150]',"regex_match[/^(\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+)$/]"),
        array
        (
            'required'=>'email is Required', 
            'min_length'=>'Min 2 characters for email.',
	 		'max_length'=>'Max 150 characters for email.',
            'regex_match'=>'Only alphanumeric chars and special char _ - @ . are allowed.'
        ));
  //       $this->form_validation->set_rules('remark','remark',array('required'),
		// array(
		//  	'required'=>'Required remark',
		//  	// 'max_length'=>'For request Max 249 Character Allowed.'
		 	
		// ));
		//  $this->form_validation->set_rules('status','status',array('required'),
		// array(
		//  	'required'=>'Required status',
		//  	// 'max_length'=>'For request Max 249 Character Allowed.'
		 	
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
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	"state": true,
    "msg": "donation Hidden!",
    "details": [
        {
            "donation_id": "2nWpd",
            "": "2nWpd",
            "first_name": "mrudul",
            "last_name": "thite",
            "date_time": "2020-05-14 15:37:38",
            "amount": "20000",
            "address_line_1": "palsdffgdfjvnjfgv",
            "address_line_2": "dfgfhfghfgjj",
            "city": "pune",
            "state": "maharashtra",
            "country": "india",
            "pin_code": "411057",
            "contact_number": "7722005553",
            "email": "mrudul@gmail.com",
            "remark": "done",
            "status": "",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-14 15:37:38",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:03:48",
            "in_use": "N"
        }
       ]
    }
	*/
	public function _hide_donation($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['donation_id']))
		{
			$id=$details['donation_id'];
			$donation=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_donation','donation_id',$id,$donation);
			$resdata = $this->standard_model->selectAllWhr('tbl_donation','donation_id',$details['donation_id']);
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
		                  'msg'=>'Donation Hidden!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide donation';
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
			'msg'=>'donation_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	"state": true,
    "msg": "donation Restore!",
    "details": [
        {
            "donation_id": "2nWpd",
            "": "2nWpd",
            "first_name": "mrudul",
            "last_name": "thite",
            "date_time": "2020-05-14 15:37:38",
            "amount": "20000",
            "address_line_1": "palsdffgdfjvnjfgv",
            "address_line_2": "dfgfhfghfgjj",
            "city": "pune",
            "state": "maharashtra",
            "country": "india",
            "pin_code": "411057",
            "contact_number": "7722005553",
            "email": "mrudul@gmail.com",
            "remark": "done",
            "status": "",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-14 15:37:38",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:11:22",
            "in_use": "Y"
        }
    ]
	*/
	public function _restore_donation($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['donation_id']))
		{	
		    $id=$details['donation_id'];
			$donation=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_donation','donation_id',$id,$donation);
			$resdata = $this->standard_model->selectAllWhr('tbl_donation','donation_id',$details['donation_id']);
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
		                  'msg'=>'donation Restore!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore donation';
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
			'msg'=>'donation id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	Purpose:Delete donation
	 "state": true,
    "msg": "donation Delete!",
    "details": {
        "donation_id": "2nWpd"
    }
	*/
	public function _delete_donation($details=array())
	{  
		$details = $this->decryptArray($details);
		
		if(isset($details['donation_id']))
		{    
			$id=$details['donation_id'];
		    $donation=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_donation','donation_id',$id,$donation);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'donation Delete!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete donation';
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
			'msg'=>'donation_id Required!',
			);
		}
	 }
    /*
	========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	========================================================
	*/
	public function _set_donation_with_login($details=array())
	{
	 	$details = $this->decryptArray($details);
	 	$user_id= $this->session->userdata('user_id');
	 	if($user_id)
	 	{	
		 	$user_data=$this->common_model->selectDetailsWhr('tbl_user','user_id',$user_id); 
		 		
			$user= array(
				'fullname'=>$user_data->fullname,
				'email'=>$user_data->email,
				'mobile'=>$user_data->mobile,
				'pan_no'=>$user_data->pan_no,
				'address'=>$user_data->address
			);
			$donation_login=array('amount'=>$details['amount']);
			$donation_id = $this->standard_model->single_insert('tbl_donation',$donation_login);
			$donation_login['donation_id']=$donation_id;
			$donation_login= $this->encryptArray($donation_login);
			if($donation_id)
			{
				return array(
					'state'=>true,
					'msg'=>'donation paid successfully!',
					'details'=>$user,$donation_login
					);
			}else
			{
				return array(
					'state'=>false,
					'msg'=>'donation not paid successfully!',
					'details'=>false
					);
			}
		}else
		{
						return array(
		    	    			'state'=>false,
		    	    			'msg'=>'Please login!',
		    	    			// 'details'=>false
		    	    			 );
	    	   
		}
		
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:13/06/2020
	========================================================
	*/
	public function _donation_pending_status($details=array())
  	{
  	  $details = $this->decryptArray($details);	
      $id=$details['donation_id'];
      $payment=$this->standard_model->selectAll('tbl_payment');
      // echo $this->db->last_query();
      // die;
      if($payment)
      {	
	      foreach ($payment as $key ) {
	      	$payment_status=$key->status;
	      }

      if($payment_status=='1')
      {	
        $records= array('status'=>'1');
        $results = $this->standard_model->updateRecord('tbl_donation','donation_id',$id,$records);
        if($results)
        { 
          $results = $this->encryptArray($details);		
          return array(
                      'state'=>true,
                      'msg'=>'Donation Pending!',
                      'details'=>$records
                    );
        }

      }else if($payment_status=='2')  
        
       {
       	$records= array('status'=>'2');
        $results = $this->standard_model->updateRecord('tbl_donation','donation_id',$id,$records);
          return array(
                      'state'=>false,
                      'msg'=>'Donation Success!',
                      'details'=>false
                    );
        }
    }else
    {
    	return array(
                      'state'=>false,
                      'msg'=>'Payment not done!!',
                      'details'=>false
                    );
    }
  	}
    /*
    =================================================================================
    Author:Shubhangi Jagadale                        Date:11/05/2020
    =================================================================================
	Purpose:fetch dotation record with display on date
	*/
	public function _get_donation_data($details=array())
    {
		$details = $this->decryptArray($details);
		$start_date=$details['start_date'];
		$end_date=$details['end_date'];
		if($start_date && $end_date)
		{
			$donation = $this->donation_model->fetch_donation_data($details,$start_date,$end_date);
			if($donation)
			{
				$data=array();
				foreach ($donation as $donat)
				{
					$data[] = (array)$donat;  
				}
				if(isset($data) && is_array($data)){
				$donat = $this->encryptArray($data);
				}
				return array(
					'msg'=>'Succesfully Fetch Record!',
					'state'=>true,
					'details'=>$donat
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
		else
			{
				return array(
					'msg'=>'Enter Start Date or End Date!',
					'state'=>false,
					'details'=>False
				);
			}
    }
  	
}