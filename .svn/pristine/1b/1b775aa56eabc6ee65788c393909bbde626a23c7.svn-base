<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Children_course_rest extends Rest_Controller 
{
	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:15/05/2020
	=================================================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('children_course/children_course_api');
    }

    /*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:15/05/2020
	=================================================================================
	*/   	
	public function children_course_get($details=array())
	{
		$details = $this->get();
		$response = $this->children_course_api->_get_children_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:15/05/2020
	=================================================================================
	*/
	public function children_course_post($details=array())
	{
		$details=$this->post();
		$response=$this->children_course_api->_set_children_course($details);
		$this->response($response,REST_Controller::HTTP_OK);	
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:15/05/2020
	=================================================================================
	*/
	public function hide_children_course_post($details=array())
	{
		$details=$this->post();
		$response=$this->children_course_api->_hide_children_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:15/05/2020
	=================================================================================
	*/
	public function restore_children_course_post($details=array())
	{
		$details=$this->post();
		$response=$this->children_course_api->_restore_children_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:15/05/2020
	=================================================================================
	*/
	public function delete_children_course_delete()
	{
		$details=array('children_course_id'=>$this->uri->segment(2));
		$response = $this->children_course_api->_delete_children_course($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}	
}