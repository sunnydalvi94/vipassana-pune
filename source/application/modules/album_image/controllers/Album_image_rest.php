<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Album_image_rest extends Rest_Controller 
{
	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:12/05/2020
	=================================================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('album_image/album_image_api');
    }

    /*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:12/05/2020
	=================================================================================
	*/   	
	public function album_image_get($details=array())
	{
		$details = $this->get();
		$response = $this->album_image_api->_get_album_image($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:12/05/2020
	=================================================================================
	*/
	public function album_image_post($details=array())
	{
		$details=$this->post();
		$response=$this->album_image_api->_set_album_image($details);
		$this->response($response,REST_Controller::HTTP_OK);	
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:12/05/2020
	=================================================================================
	*/
	public function hide_album_image_post($details=array())
	{
		$details=$this->post();
		$response=$this->album_image_api->_hide_album_image($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:12/05/2020
	=================================================================================
	*/
	public function restore_album_image_post($details=array())
	{
		$details=$this->post();
		$response=$this->album_image_api->_restore_album_image($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:12/05/2020
	=================================================================================
	*/
	public function delete_album_image_delete()
	{
		$details=array('album_image_id'=>$this->uri->segment(2));
		$response = $this->album_image_api->_delete_album_image($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}	
}