<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Ten_day_course_rest extends Rest_Controller 
{
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:12/05/2020		
	=================================================================================
	*/
	public function __construct()
  	{
	    parent::__construct();
	    $this->load->module('ten_day_course/ten_day_course_api');
    }
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:12/05/2020
	=================================================================================
	*/
	public function ten_day_course_registration_get($details=array())
	{
		$details = $this->get();
		$response = $this->ten_day_course_api->_get_ten_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
    Author:Shubhangi jagadale                        Date:12/05/2020
	=================================================================================
	*/
	public function ten_day_course_registration_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->ten_day_course_api->_set_ten_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:12/05/2020
	=================================================================================
	*/
	public function hide_ten_day_course_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->ten_day_course_api->_hide_ten_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:12/05/2020
	=================================================================================
	*/
	public function restore_ten_day_course_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->ten_day_course_api->_restore_ten_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi jagadale                        Date:12/05/2020
	=================================================================================
	*/
	public function permanent_delete_ten_day_course_delete()
    {	
		$details= array('ten_day_course_id' =>$this->uri->segment(2));
		$response = $this->ten_day_course_api->_delete_ten_day_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
} 