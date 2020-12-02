<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_school_seva_registration_web extends Base_Controller {
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('mitra_school_seva_registration/mitra_school_seva_registration_api');
  }

 public function mitra_school_seva_registration_list()
 {
   $details = array('all' =>true);
   $data['mitra_school_seva_registration_data'] = $this->mitra_school_seva_registration_api->_get_mitra_school_seva_registration($details);
   $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
   $this->load->view('mitra-school-seva-registration-list',$data);
 }
 
 public function add_mitra_school_seva_registration($id=NULL)
 {
  if($id)
    {
      $details = array('id' =>$id);
      $details = $this->decryptArray($details);
      $id = $details['id'];
      $data['mitra_school_seva_registration_data'] = $this->common_model->selectDetailsWhr('tbl_mitra_school_seva_registration','mitra_school_seva_registration_id',$id);
    }
    $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-mitra-school-seva-registration',$data);
  }
  public function mitra_school_seva_registration_viewform($id=NULL)
 {
   if($id)
    {
      $details = array('id' =>$id);
      $details = $this->decryptArray($details);
      $id = $details['id'];
      $data['mitra_school_seva_registration_data'] = $this->common_model->selectDetailsWhr('tbl_mitra_school_seva_registration','mitra_school_seva_registration_id',$id);
    }
   $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
   $this->load->view('mitra-school-seva-registration-viewform',$data);
 }
 
}
