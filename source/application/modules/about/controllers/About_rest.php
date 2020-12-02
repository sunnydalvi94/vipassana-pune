<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class About_rest extends Rest_Controller 
{
    public function __construct()  
  	 {
	    parent::__construct();
	    $this->load->module('about/about_api');
	 }
	/* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
    public function about_get($details=array())
	 {
		$details = $this->get();
		$response = $this->about_api->_get_about($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	 /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
     public function about_post($details=array())
	 {
		$details=$this->post();
		$response=$this->about_api->_set_about($details);
		$this->response($response,REST_Controller::HTTP_OK);
	 }
	 /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
	 public function hide_about_post($details=array())
	 {
		$details=$this->post();
		$response=$this->about_api->_hide_about($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	 /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
     public function restore_about_post($details=array())
	 {
		$details=$this->post();
		$response=$this->about_api->_restore_about($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	 /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
	public function delete_about_delete()
    {	
  		$details=array('about_id' => $this->uri->segment(2));
		$response = $this->about_api->_delete_about($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
}