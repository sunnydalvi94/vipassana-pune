<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Mitra_school_seva_registration_rest extends Rest_Controller 
{
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('mitra_school_seva_registration/mitra_school_seva_registration_api');
    }
   	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/

	public function mitra_school_seva_registration_get()
	{
		$details = $this->get();
		$response = $this->mitra_school_seva_registration_api->_get_mitra_school_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function mitra_school_seva_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->mitra_school_seva_registration_api->_set_mitra_school_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function hide_mitra_school_seva_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->mitra_school_seva_registration_api->_hide_mitra_school_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function restore_mitra_school_seva_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->mitra_school_seva_registration_api->_restore_mitra_school_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function delete_mitra_school_seva_registration_delete()
    {	
  		$details=array('mitra_school_seva_registration_id' => $this->uri->segment(2));
		$response = $this->mitra_school_seva_registration_api->_delete_mitra_school_seva_registration($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 