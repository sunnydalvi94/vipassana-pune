<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class seva_registration_rest extends Rest_Controller 
{
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('seva_registration/seva_registration_api');
    }
    /*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/

	public function seva_registration_get()
	{
		$details = $this->get();
		$response = $this->seva_registration_api->_get_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function seva_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->seva_registration_api->_set_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function hide_seva_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->seva_registration_api->_hide_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function restore_seva_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->seva_registration_api->_restore_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function delete_seva_registration_delete()
    {	
  		$details = array('seva_registration_id'=>$this->uri->segment(2));
		$response = $this->seva_registration_api->_delete_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 