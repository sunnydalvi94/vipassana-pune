<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Personal_details_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
		$this->load->model('common_model');
		$this->load->module('user/user_api');
	    $this->load->model('personal_details/personal_details_model');

	}
	/*
	========================================================
	Author:Shubhangi Jagadale               Date:17/07/2020
	========================================================
	Purpose: Get personal_details
	return array(
	 	'state'=>TRUE,
		'msg'=>'Records Found!',
	 	'details'=>array(  
	 		array(
	 		"topic_name": "membership",
            "volunteers	": "How to register new Institute?",
            "activities	": "1. Go to link msceia.in.\n2. On Home page click on Sign Up button.",
            "modified_by": 1,
            "personal_details_id": 4,
            "created_by": 1,
            "created_on": "2020-02-28 18:21:30"
	 		)
	 	)
	 );
    */
	public function _get_personal_details($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['personal_details_id']))
        {
        	$id=$details['personal_details_id'];
        $results = $this->standard_model->selectAllWhr('tbl_personal_details','personal_details_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_personal_details');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_personal_details','in_use','Y');        	
          
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
    =================================================================
    Author:Shubhangi Jagadale                      Date:17-07-2020
    ==================================================================
	*/
	private function encryptePasswors($details=''){
		if($details)
		{
			return md5(sha1(md5($details)));
		}
		else{
			return false;
		}
	 }     
	/*
	========================================================
	Author:Shubhangi Jagadale               Date:17/07/2020
	========================================================
	Purpose: Save  personal_details
	return array(
			'state'=>TRUE,
			'msg'=>'New personal_details added!',
			'details'=>$details
		);
    */
    public function _set_personal_details($details=array())
	{
	  	$validation_error='';
        $details = $this->decryptArray($details);
        if(isset($details['personal_details_id']) && !empty($details['personal_details_id']))
		{
			$results = $this->standard_model->selectAllWhr('tbl_personal_details','personal_details_id',$details['personal_details_id']); 
			if(!empty($results))
			{
			$flag=1;
			}
			else
			{
				return array(
					'state'=>false,
					'msg'=>'personal_details_id not exit!',
					'details'=>false
					);
			}				
		}
		else
		{
		$flag=0;	
		}
        if($this->validationpersonal_detailsMasterDetails($details,$flag))
		{
            if($details)
            {
				$password=$this->encryptePasswors($details['password']);
			    $confirm_password=$this->encryptePasswors($details['confirm_password']);
				$user_id1= $this->session->userdata('user_id');
				$details1 = $details['first_name']." ".$details['last_name']; 
                if($password == $confirm_password)
	 			{
					$personal_details = array(
						'personal_details_id'=>isset($details['personal_details_id'])?$details['personal_details_id']:NULL,
						'first_name'=>$details['first_name'],
						'last_name'=>$details['last_name'],
						'pan_no'=>$details['pan_no'],
						'address_line_1'=>$details['address_line_1'],
						'address_line_2'=>$details['address_line_2'],
						'city'=>$details['city'],
						'state'=>$details['state'],
						'country'=>$details['country'],
						'pin_code'=>$details['pin_code'],
						'mobile'=>$details['mobile'],
						'email'=>$details['email'],
						'username'=>$details['username'],
						'password'=>$password,
						'modified_by'=>isset($user_id1)?$user_id1:'NULL',
						'modified_on'=>date('Y-m-d H:i:s'),
					);
					$personal_details_data = array(
							'personal_details_id'=>isset($details['personal_details_id'])?$details['personal_details_id']:NULL,
							'first_name'=>$details['first_name'],
							'last_name'=>$details['last_name'],
							'pan_no'=>$details['pan_no'],
							'address_line_1'=>$details['address_line_1'],
							'address_line_2'=>$details['address_line_2'],
							'city'=>$details['city'],
							'state'=>$details['state'],
							'country'=>$details['country'],
							'pin_code'=>$details['pin_code'],
							'mobile'=>$details['mobile'],
							'email'=>$details['email'],
							'username'=>$details['username'],
							'modified_by'=>isset($user_id1)?$user_id1:'NULL',
							'modified_on'=>date('Y-m-d H:i:s'),
					);
					if(!isset($details['personal_details_id']) && empty($details['personal_details_id']))
					{
						$personal_details['inserted_by']=isset($user_id1)?$user_id1:'NULL';
						$personal_details['inserted_on']=date('Y-m-d H:i:s');
						$personal_details_data['inserted_by']=isset($user_id1)?$user_id1:'NULL';
						$personal_details_data['inserted_on']=date('Y-m-d H:i:s');
					}
					$personal_details_id = $this->standard_model->single_insert('tbl_personal_details',$personal_details);
					$personal_details_data['personal_details_id']=$personal_details_id;
					$personal_details_data= $this->encryptArray($personal_details_data);
					if($flag==0)
					{
						$user=array(
							'role_id'=>2,
							'personal_details_id'=>$personal_details_id,
							'fullname' =>$details1,
							'email'=>$details['email'],
							'mobile'=>$details['mobile'],
							'username'=>$details['username'],
							'pan_no'=>$details['pan_no'],
							'address'=>$details['address_line_1'],
					    	'pincode'=>$details['pin_code'],
							'password'=>$details['password'],
							'city'=>$details['city'],
							'user_image'=>null
						);
					    $user_id = $this->user_api->_set_user_data($user);
						$user['user_id']= $user_id;
						$userdata=$this->personal_details_model->getUserPersonal($details,$personal_details_id); 
						$user_id=implode($userdata);
						$user_personal=array(
						 	'user_id'=>$user_id,
						 	'personal_details_id'=>$personal_details_id,
						 	'modified_by'=>isset($user_id1)?$user_id1:'NULL',
						 	'inserted_by'=>isset($user_id1)?$user_id1:'NULL',
						 	'inserted_on'=>date('Y-m-d H:i:s'),
						);
						$user_personal=$this->standard_model->single_insert('tbl_user_personal',$user_personal);
						return array(
									'state'=>true,
									'msg'=>'personal_details added!',
									'details'=>$personal_details_data
						);
					}
					else
					{
						$userdata=$this->personal_details_model->getUserPersonal($details,$personal_details_id); 
						$user_id=implode($userdata);
						$user=array(
							'user_id'=>$user_id,
							'fullname' =>$details1,
							'email'=>$details['email'],
							'mobile'=>$details['mobile'],
							'username'=>$details['username'],
							'pan_no'=>$details['pan_no'],
							'address'=>$details['address_line_1'],
							'pincode'=>$details['pin_code'],
							'password'=>$password,
							'city'=>$details['city'],
							'user_image'=>null
						);
						$user=$this->standard_model->single_insert('tbl_user',$user);
						return array(
									'state'=>true,
									'msg'=>'personal_details updated!',
									'details'=>$personal_details_data
						);
					}            	
				}  
				else
				{
					return array('state'=>False,'msg'=>' Password and Confirm Password not Match!','details'=>False);
				} 
	    	}  
            else
            {
                return array(
                'state'=>False,
                'msg'=>'personal_details Failed to Saved!',
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
	Author:Shubhangi Jagadale               Date:17/07/2020
	========================================================
	Purpose: validation for personal_details
	*/
	function validationpersonal_detailsMasterDetails($details,$flag)
    {
	 	$var1="'";
	 	$var2='"';
	 	$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
		array(
			'first_name'=>isset($details['first_name']) ? $details['first_name'] :'',
			'last_name'=>isset($details['last_name']) ? $details['last_name'] :'',
			'pan_no'=>isset($details['pan_no']) ? $details['pan_no'] :'',
			'address_line_1'=>isset($details['address_line_1']) ? $details['address_line_1'] :'',
			'address_line_2'=>isset($details['address_line_2']) ? $details['address_line_2'] :'',
			'city'=>isset($details['city']) ? $details['city'] :'',
			'state'=>isset($details['state']) ? $details['state'] :'',
			'country'=>isset($details['country']) ? $details['country'] :'',
			'pin_code'=>isset($details['pin_code']) ? $details['pin_code'] :'',
			'email'=>isset($details['email']) ? $details['email'] :'',
			'mobile'=>isset($details['mobile']) ? $details['mobile'] :'',	
			'username'=>isset($details['username']) ? $details['username'] :'',			
			'password'=>isset($details['password']) ? $details['password'] :'',			
			)
		);
		$this->form_validation->set_rules('first_name','first_name', array('required','min_length[1]','max_length[99]','regex_match[/^([A-Za-z][A-Za-z\s]{1,99})$/]'),
	 	array( 
				'min_length'=>'For first_name Min 1 char Required.',
	 			'max_length'=>'For first_name Max 99 char allowed.',
	 			'required'=>'Required first_name',
	 			'regex_match'=>'first_name Only Alphabets and space are allowed.'
	 	));
	 	$this->form_validation->set_rules('last_name','last_name', array('required','min_length[1]','max_length[99]','regex_match[/^([A-Za-z][A-Za-z\s]{1,99})$/]'),
	 	array( 
				'min_length'=>'Forlast_name Min 1 char Required.',
				'max_length'=>'For last_name Max 99 char allowed.',
				'required'=>'Required last_name',
				'regex_match'=>'last_name Only Alphabets chars and space are allowed.'
	 	));
	 	$this->form_validation->set_rules('pan_no','pan_no', array('required','min_length[10]','max_length[10]','regex_match[/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/]'),
	 	array( 
				'min_length'=>'For PAN number Min 10 Number Required.',
				'max_length'=>'For PAN number Max 10 Number allowed.',
				'required'=>'Required PAN number',
				'regex_match'=>'Please Enter Valid PAN Number!'
	 	));
		$this->form_validation->set_rules('address_line_1','aaddress_line_1',array( 'required','max_length[200]'),
        array(
                'required'=>'aaddress_line_1 is Required',
                'max_length'=>'Address Max 100 char allowed.'
        ));
	    $this->form_validation->set_rules('address_line_2','address_line_2',array('max_length[200]'),
	    array(
	                'required'=>'address_line_2 is Required',
	                'max_length'=>'Address Max 100 char allowed.'
	    ));
	    $this->form_validation->set_rules('city','city', array('required','min_length[1]','max_length[100]','regex_match[/^([A-Za-z][A-Za-z\s]{1,99})$/]'),
	 	array
	 	( 
	 		'min_length'=>'For city Min 2 Char Required.',
	 		'max_length'=>'For city Max 100 Char allowed.',
	 		'required'=>'Required city',
	 		'regex_match'=>'city Only Alphabets and space are allowed.'
	 	));
	 	$this->form_validation->set_rules('state','state', array('required','min_length[1]','max_length[100]','regex_match[/^([A-Za-z][A-Za-z\s]{1,99})$/]'),
	 	array
	 	( 
	 		'min_length'=>'For state Min 2 char Required.',
	 		'max_length'=>'For state Max 100 char allowed.',
	 		'required'=>'Required state',
	 		'regex_match'=>'state Only Alphabets char and space are allowed.'
	 	));
	 	$this->form_validation->set_rules('country','country', array('required','min_length[1]','max_length[100]','regex_match[/^([A-Za-z][A-Za-z\s]{1,99})$/]'),
	 	array
	 	( 
	 		'min_length'=>'For country Min 2 Char Required.',
	 		'max_length'=>'For country Max 100 Char allowed.',
	 		'required'=>'Required country',
	 		'regex_match'=>'country Only Alphabets chars and space are allowed.'
	 	));
	 	$this->form_validation->set_rules('pin_code','pin_code',array('required','min_length[6]','max_length[6]','regex_match[/^([0-9]{0,6})$/]'),
        array
        (
            'required'=>'Pin Code is Required',
            'min_length'=>'Pin Code should have at Least 6 Number',
            'max_length'=>'Pin Code should not have more than 6 Number',
            'regex_match'=>'Only numbers allowed.')
        );
	 	if($flag==0){
			$this->form_validation->set_rules('email','email',array('required','regex_match[/^(\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+)$/]','is_unique[tbl_user.email]'),
			array(
				'required'=>'email is Required', 
				'regex_match'=>'Email should be Email Format.',
				'is_unique' =>'Duplicate entry for email.'
			));
		}
		else{
			$this->form_validation->set_rules('email', 'email',array('required','regex_match[/^(\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+)$/]'),
			array(
				'required'=>'email is Required', 
				'regex_match'=>'Email should be Email Format.'
			));
		}
		if($flag==0){
			$this->form_validation->set_rules('mobile', 'mobile',array('required','min_length[10]','max_length[10]','regex_match[/^([0-9]{0,10})$/]','is_unique[tbl_personal_details.mobile]'),
			array(
				'required'=>'Phone Number Number is Required',
				'min_length'=>'Phone Number Number Min 10 number required.',
				'max_length'=>'Phone Number Number Max 10 number allowed. ',
				'regex_match'=>'Phone Number Only numbers are allowed.',
				'is_unique' =>'Duplicate entry for Phone Number Number.'
			));
		}
		else
		{
			$this->form_validation->set_rules('mobile', 'mobile',array('required','min_length[10]','max_length[10]','regex_match[/^([0-9]{0,10})$/]'),
			array(
				'required'=>'Phone Number Number is Required',
		    	'min_length'=>'Phone Number Number Min 10 number required.',
				'max_length'=>'Phone Number Number Max 10 number allowed. ',
				'regex_match'=>'Phone Number Only numbers are allowed.',
			));
		}
		$this->form_validation->set_rules('username', 'username',array('required','min_length[2]','max_length[30]','regex_match[/^([A-Za-z0-9][A-Za-z0-9]{1,29})$/]'),
		array(
			'required'=>'Username is Required', 
			'min_length'=>'Username Min 2 char required.',
			'max_length'=>'Username Max 30 char allowed. ',
			'regex_match'=>'Only Alphanumeric are allowed.'
		));
		$this->form_validation->set_rules('password', 'password',array('required','min_length[6]','max_length[15]'),
		array(
			'required'=>'password is Required', 
			'min_length'=>'password Min 6 char required.',
			'max_length'=>'password Max 15 char allowed. ',
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
	Author:Shubhangi Jagadale               Date:17/07/2020
	========================================================
	"state": true,
    "msg": "personal_details Hidden!",
    "details": [
        {
            "personal_details_id": "2nWpd",
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
            "mobile": "7722005553",
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
	public function _hide_personal_details($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['personal_details_id']))
		{
			$id=$details['personal_details_id'];
			$personal_details=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_personal_details','personal_details_id',$id,$personal_details);
			$resdata = $this->standard_model->selectAllWhr('tbl_personal_details','personal_details_id',$details['personal_details_id']);
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
		                  'msg'=>'personal_details Hidden!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide personal_details';
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
			'msg'=>'personal_details_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Shubhangi Jagadale               Date:17/07/2020
	========================================================
	"state": true,
    "msg": "personal_details Restore!",
    "details": [
        {
            "personal_details_id": "2nWpd",
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
            "mobile": "7722005553",
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
	public function _restore_personal_details($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['personal_details_id']))
		{	
		    $id=$details['personal_details_id'];
			$personal_details=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_personal_details','personal_details_id',$id,$personal_details);
			$resdata = $this->standard_model->selectAllWhr('tbl_personal_details','personal_details_id',$details['personal_details_id']);
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
		                  'msg'=>'personal_details Restore!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore personal_details';
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
			'msg'=>'personal_details_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Shubhangi Jagadale               Date:17/07/2020
	========================================================
	Purpose:Delete personal_details
	 "state": true,
    "msg": "personal_details Delete!",
    "details": {
        "personal_details_id": "2nWpd"
    }
	*/
	public function _delete_personal_details($details=array())
	{  
		$details = $this->decryptArray($details);
		
		if(isset($details['personal_details_id']))
		{    
			$id=$details['personal_details_id'];
		    $personal_details=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_personal_details','personal_details_id',$id,$personal_details);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'personal_details Delete!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete personal_details';
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
			'msg'=>'personal_details_id Required!',
			);
		}
	}
}