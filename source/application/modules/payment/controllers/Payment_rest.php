<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Payment_rest extends Rest_Controller 
{
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('payment/payment_api');
    }
   	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/

	public function payment_get()
	{
		$details = $this->get();
		$response = $this->payment_api->_get_payment($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite  Date:14/05/2020                     
	=========================================================
	*/
	public function payment_post($details=array())
	{

		$details = $this->post();
		$response = $this->payment_api->_set_payment($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function hide_payment_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->payment_api->_hide_payment($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function restore_payment_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->payment_api->_restore_payment($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:14/05/2020
	=========================================================
	*/
	public function delete_payment_delete()
    {	
  		$details=array('payment_id' => $this->uri->segment(2));
		$response = $this->payment_api->_delete_payment($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:13/06/2020
	=========================================================
	*/
	public function payment_pending_post($details=array())
	{
		$details = $this->post();
		$response = $this->payment_api->_payment_pending_status($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*
	=========================================================
	Author:Mrudul Thite                     Date:13/06/2020
	=========================================================
	*/
	public function payment_success_post($details=array())
	{
		$details = $this->post();
		
		$response = $this->payment_api->_payment_success_status($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 