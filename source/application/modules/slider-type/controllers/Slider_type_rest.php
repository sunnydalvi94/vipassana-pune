<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Slider_type_rest extends Rest_Controller 
{
	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:25/05/2020
	=================================================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('slider-type/slider_type_api');
    }

    /*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:25/05/2020
	=================================================================================
	*/   	
	public function slider_type_get($details=array())
	{
		$details = $this->get();
		$response = $this->slider_type_api->_get_slider_type($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:25/05/2020
	=================================================================================
	*/
	public function slider_type_post($details=array())
	{
		$details=$this->post();
		$response=$this->slider_type_api->_set_slider_type($details);
		$this->response($response,REST_Controller::HTTP_OK);	
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:25/05/2020
	=================================================================================
	*/
	public function hide_slider_type_post($details=array())
	{
		$details=$this->post();
		$response=$this->slider_type_api->_hide_slider_type($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:25/05/2020
	=================================================================================
	*/
	public function restore_slider_type_post($details=array())
	{
		$details=$this->post();
		$response=$this->slider_type_api->_restore_slider_type($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:25/05/2020
	=================================================================================
	*/
	public function delete_slider_type_delete()
	{
		$details=array('slider_type_id'=>$this->uri->segment(2));
		$response = $this->slider_type_api->_delete_slider_type($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*    
	=================================================================================
	Author: Shubhnagi Jagadale                         Date:21/07/2020
	=================================================================================
	*/   	
	public function get_slider_type_get($details=array())
	{
		$details = $this->get();
		$response = $this->slider_type_api->_get_slider_type_data($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}	
}