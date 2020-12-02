<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Slider_rest extends Rest_Controller 
{
    public function __construct()  
  	 {
	    parent::__construct();
	    $this->load->module('children_slider/slider_api');
	 }
	  /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:12-05-2020     
	=================================================================================*/
    public function slider_get($details=array())
	 {
		$details = $this->get();
		$response = $this->slider_api->_get_slider($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:12-05-2020     
	=================================================================================*/
     public function slider_post($details=array())
	 {
		$details=$this->post();
		$response=$this->slider_api->_set_slider($details);
		$this->response($response,REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:12-05-2020     
	=================================================================================*/
	 public function hide_slider_post($details=array())
	 {
		$details=$this->post();
		$response=$this->slider_api->_hide_slider($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:12-05-2020     
	=================================================================================*/
     public function restore_slider_post($details=array())
	 {
		$details=$this->post();
		$response=$this->slider_api->_restore_slider($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:12-05-2020     
	=================================================================================*/
    public function delete_slider_delete()
    {	
  		$details=array('children_slider_id' =>$this->uri->segment(2));
		$response = $this->slider_api->_delete_slider($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
}