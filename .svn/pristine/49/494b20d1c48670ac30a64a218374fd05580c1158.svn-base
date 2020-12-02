<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Teenager_course_rest extends Rest_Controller 
{
	/*
	=========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	=========================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('teenager-course/teenager_course_api');
    }
   	/*
	=========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	=========================================================
	*/

	public function teenager_course_get()
	{
		$details = $this->get();
		$response = $this->teenager_course_api->_get_teenager_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	=========================================================
	*/
	public function teenager_course_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->teenager_course_api->_set_teenager_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	=========================================================
	*/
	public function hide_teenager_course_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->teenager_course_api->_hide_teenager_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	=========================================================
	*/
	public function restore_teenager_course_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->teenager_course_api->_restore_teenager_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=========================================================
	Author:Mrudul Thite                   Date:13/05/2020
	=========================================================
	*/
	public function delete_teenager_course_delete()
    {	
  		$details = array('teenager_course_id' =>$this->uri->segment(2));
		$response = $this->teenager_course_api->_delete_teenager_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 