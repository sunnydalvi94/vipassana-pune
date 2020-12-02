<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class One_day_course_rest extends Rest_Controller 
{
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:13/05/2020		
	=================================================================================
	*/
	public function __construct()
  	{
	    parent::__construct();
	    $this->load->module('one_day_course/one_day_course_api');
    }
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:13/05/2020
	=================================================================================
	*/
	public function one_day_course_registration_get($details=array())
	{
		$details = $this->get();
		$response = $this->one_day_course_api->_get_one_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
    Author:Shubhangi jagadale                        Date:13/05/2020
	=================================================================================
	*/
	public function one_day_course_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->one_day_course_api->_set_one_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:13/05/2020
	=================================================================================
	*/
	public function hide_one_day_course_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->one_day_course_api->_hide_one_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:13/05/2020
	=================================================================================
	*/
	public function restore_one_day_course_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->one_day_course_api->_restore_one_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:13/05/2020
	=================================================================================
	*/
	public function permanent_delete_one_day_course_delete()
    {	
		$details= array('one_day_course_id' =>$this->uri->segment(2));
		$response = $this->one_day_course_api->_delete_one_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 