<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Donation_rest extends Rest_Controller 
{
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('donation/donation_api');
    }
   	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/

	public function donation_get()
	{
		$details = $this->get();
		$response = $this->donation_api->_get_donation($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function donation_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->donation_api->_set_donation($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function hide_donation_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->donation_api->_hide_donation($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function restore_donation_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->donation_api->_restore_donation($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function delete_donation_delete()
    {	
  		$details=array('donation_id'=> $this->uri->segment(2));
		$response = $this->donation_api->_delete_donation($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	public function donation_with_login_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->donation_api->_set_donation_with_login($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*
	=========================================================
	Author:Mrudul Thite                     Date:13/06/2020
	=========================================================
	*/
	public function donation_pending_post($details=array())
	{
		$details = $this->post();
		$response = $this->donation_api->_donation_pending_status($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
    /*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function fetch_donation_post()
	{
		$details = $this->post();
		$response = $this->donation_api->_get_donation_data($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	
} 