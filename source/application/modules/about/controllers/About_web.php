<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_web extends Base_Controller {
 

 public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('about/about_api');
  }
 public function about_list()
 {
  $details=array('all'=>'True');
  $data['about_data']=$this->about_api->_get_about($details);
  // $data['about_data']=$this->common_model->fetchDataAsc('tbl_about','about_id');
 	// $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);	
  $this->load->view('about-list',$data);
 }

 public function add_about($id=NULL)
 {
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 	if($id)
    {
      $details=array('id'=>$id);
      $details =$this->decryptArray($details);
      $id=$details['id'];
      $data['about_data'] = $this->common_model->selectDetailsWhr('tbl_about','about_id',$id);
    }
    
    $this->load->view('add-about',$data);
  }
  
}