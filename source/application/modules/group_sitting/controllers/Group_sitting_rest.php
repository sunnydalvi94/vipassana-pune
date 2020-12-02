<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Group_sitting_rest extends Rest_Controller 
{
    public function __construct()  
  	 {
	    parent::__construct();
	    $this->load->module('group_sitting/group_sitting_api');
	 }
	  /* =================================================================================
    Author:Yogeshwari Yawalkar                     
	=================================================================================*/
	public function group_sitting_get($details=array())
	 {
		$details = $this->get();
		$response = $this->group_sitting_api->_get_group_sitting($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	  /* =================================================================================
    Author:Yogeshwari Yawalkar                     
	=================================================================================*/
	 public function group_sitting_post($details=array())
	 {
		$details=$this->post();

		$response=$this->group_sitting_api->_set_group_sitting($details);
		$this->response($response,REST_Controller::HTTP_OK);
	 }
	  /* =================================================================================
    Author:Yogeshwari Yawalkar                   
	=================================================================================*/
	public function hide_group_sitting_post($details=array())
	 {
		$details=$this->post();
		$response=$this->group_sitting_api->_hide_group_sitting($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	  /* =================================================================================
    Author:Yogeshwari Yawalkar                    
	=================================================================================*/
	public function restore_group_sitting_post($details=array())
	 {
		$details=$this->post();
		$response=$this->group_sitting_api->_restore_group_sitting($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	  /* =================================================================================
    Author:Yogeshwari Yawalkar                     
	=================================================================================*/
    public function delete_group_sitting_delete()
    {	
  		$details=array('group_sitting_id' => $this->uri->segment(2));
		$response = $this->group_sitting_api->_delete_group_sitting($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
}