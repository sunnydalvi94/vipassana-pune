<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Role_rest extends Rest_Controller 
{
	/*
	=================================================================================
	Author:Shubhangi Jagadale                         Date:13/06/2020
	=================================================================================
	*/
	public function __construct()
  	{
	    parent::__construct();
	    $this->load->module('role/role_api');
    }
   	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function role_get($details=array())
	{
		$details = $this->get();
		$response = $this->role_api->_get_role($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function role_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->role_api->_set_role($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function hide_role_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->role_api->_hide_role($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function restore_role_post($details=array())
    {	
  		$details = $this->post();
		$response = $this->role_api->_restore_role($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
	/*
	=================================================================================
	Author:Shubhangi Jagadale                        Date:13/06/2020
	=================================================================================
	*/
	public function delete_role_delete()
    {	
		$details= array('role_id' =>$this->uri->segment(2));
		$response = $this->role_api->_delete_role($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}
}