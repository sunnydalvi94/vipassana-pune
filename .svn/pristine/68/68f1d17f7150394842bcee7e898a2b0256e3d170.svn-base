<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class User_rest extends Rest_Controller 
{
	/*
	=================================================================================
	Author:Shubhangi Jagadale                         Date:13/06/2020
	=================================================================================
	*/
	public function __construct()
  	{
	    parent::__construct();
	    $this->load->module('user/user_api');
    }
   	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function user_reg_get($details=array())
	{
		$details = $this->get();
		$response = $this->user_api->_get_user_data($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function user_reg_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->user_api->_set_user_data($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function hide_user_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->user_api->_hide_user($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function restore_user_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->user_api->_restore_user($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function delete_user_delete()
    {	
		$details= array('user_id' =>$this->uri->segment(2));
		$response = $this->user_api->_delete_user($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function change_user_password_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->user_api->_change_user_password($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function forgot_user_password_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->user_api->_forgot_user_password($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function activation_link_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->user_api->_post_activation_link($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function verify_activation_link_post($details=array())
    {	
		// $details= array('activation_code' =>$this->uri->segment(2));
		$details = $this->post();
		$response = $this->user_api->_get_verify_activation_link($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function reset_password_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->user_api->_post_reset_password($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
}