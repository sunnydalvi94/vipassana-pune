<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation_web extends Base_Controller {
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
  }

 public function registration_list()
 {
   $data['registration_data']=$this->common_model->fetchDataAsc('tbl_personal_details','personal_details_id');
   $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
   $this->load->view('registration-list',$data);
 }

 public function add_registration($id=NULL)
 {
  if($id)
    {
      $data['registration_data'] = $this->common_model->selectDetailsWhr('tbl_personal_details','personal_details_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-registration',$data);
  }

 // public function reply_donation($id=NULL)
 // {
 //   $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 //   $data['donation_data'] = $this->common_model->addData('tbl_donation',$data);
   
 //  if($id)
 //    {
 //      $data['donation_data'] = $this->common_model->selectDetailsWhr(' tbl_donation','donation_id',$id);
 //    }
 //  $this->load->view('reply-donation',$data);
 // }
}
