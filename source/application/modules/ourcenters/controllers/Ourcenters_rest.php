<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Ourcenters_rest extends Rest_Controller 
{
    public function __construct()  
  	 {
	    parent::__construct();
	    $this->load->module('ourcenters/ourcenters_api');
	 }
	  /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
    public function ourcenters_get($details=array())
	 {
		$details = $this->get();
		$response = $this->ourcenters_api->_get_ourcenters($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
     public function ourcenters_post($details=array())
	 {
		$details=$this->post();
		$response=$this->ourcenters_api->_set_ourcenters($details);
		$this->response($response,REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
	 public function hide_ourcenters_post($details=array())
	 {
		$details=$this->post();
		$response=$this->ourcenters_api->_hide_ourcenters($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
     public function restore_ourcenters_post($details=array())
	 {
		$details=$this->post();
		$response=$this->ourcenters_api->_restore_ourcenters($details);
		$this->response($response, REST_Controller::HTTP_OK);
	 }
	   /* =================================================================================
    Author:Yogeshwari Yawalkar                 Date:13-05-2020     
	=================================================================================*/
	public function delete_ourcenters_delete()
    {	
  		$details=array('our_center_id' => $this->uri->segment(2));
		$response = $this->ourcenters_api->_delete_ourcenters($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
}