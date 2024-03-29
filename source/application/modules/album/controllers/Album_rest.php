<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Album_rest extends Rest_Controller 
{
	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('album/album_api');
    }

    /*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/   	
	public function album_get($details=array())
	{
		$details = $this->get();
		$response = $this->album_api->_get_album($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function album_post($details=array())
	{
		$details=$this->post();
		$response=$this->album_api->_set_album($details);
		$this->response($response,REST_Controller::HTTP_OK);	
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function hide_album_post($details=array())
	{
		$details=$this->post();
		$response=$this->album_api->_hide_album($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function restore_album_post($details=array())
	{
		$details=$this->post();
		$response=$this->album_api->_restore_album($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function delete_album_delete()
	{
		$details=array('album_id'=>$this->uri->segment(2));
		$response = $this->album_api->_delete_album($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}	
}