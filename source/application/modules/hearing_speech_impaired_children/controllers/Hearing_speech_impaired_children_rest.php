<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Hearing_speech_impaired_children_rest extends Rest_Controller 
{
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('hearing_speech_impaired_children/hearing_speech_impaired_children_api');
    }
   	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/

	public function hearing_speech_impaired_children_get()
	{
		$details = $this->get();
		$response = $this->hearing_speech_impaired_children_api->_get_hearing_speech_impaired_children($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function hearing_speech_impaired_children_post($details=array())
	{

		$details = $this->post();
		$response = $this->hearing_speech_impaired_children_api->_set_hearing_speech_impaired_children($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function hide_hearing_speech_impaired_children_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->hearing_speech_impaired_children_api->_hide_hearing_speech_impaired_children($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function restore_hearing_speech_impaired_children_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->hearing_speech_impaired_children_api->_restore_hearing_speech_impaired_children($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	=========================================================
	*/
	public function delete_hearing_speech_impaired_children_delete()
    {	
  		$details=array('hearing_speech_impaired_children_id'=> $this->uri->segment(2));
		$response = $this->hearing_speech_impaired_children_api->_delete_hearing_speech_impaired_children($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 