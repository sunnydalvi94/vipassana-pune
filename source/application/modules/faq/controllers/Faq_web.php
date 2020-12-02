<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('faq/faq_api');
  }

 public function faq_list()
 {
  $details=array('all'=>'True');
  $data['faq_data']=$this->faq_api->_get_faq($details);
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1); 
  $this->load->view('faq-list',$data);
 }
 public function add_faq($id=NULL)
 {
  if($id)
    {
      $details=array('id'=>$id);
      $details =$this->decryptArray($details);
      $id=$details['id'];
      $data['faq_data'] = $this->common_model->selectDetailsWhr('tbl_faq','faq_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-faq',$data);
  }
}