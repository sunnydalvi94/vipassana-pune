<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Personal_details_rest extends Rest_Controller 
{
	/*
	=========================================================
	Author:Shubhnagi Jagadale                 Date:18/07/2020
	=========================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('personal_details/personal_details_api');
    }
   	/*
	=========================================================
	Author:Shubhnagi Jagadale                 Date:18/07/2020
	=========================================================
	*/

	public function personal_details_get()
	{
		$details = $this->get();
		$response = $this->personal_details_api->_get_personal_details($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Shubhnagi Jagadale                 Date:18/07/2020
	=========================================================
	*/
	public function personal_details_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->personal_details_api->_set_personal_details($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Shubhnagi Jagadale                 Date:18/07/2020
	=========================================================
	*/
	public function hide_personal_details_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->personal_details_api->_hide_personal_details($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Shubhnagi Jagadale                 Date:18/07/2020
	=========================================================
	*/
	public function restore_personal_details_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->personal_details_api->_restore_personal_details($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Shubhnagi Jagadale                 Date:18/07/2020
	=========================================================
	*/
	public function delete_personal_details_delete()
    {	
  		$details=array('personal_details_id'=> $this->uri->segment(2));
		$response = $this->personal_details_api->_delete_personal_details($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 