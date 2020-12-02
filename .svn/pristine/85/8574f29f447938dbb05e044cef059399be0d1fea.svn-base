<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation_web extends Base_Controller {
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->model('donation/donation_model');
    $this->load->library('Encryptdecryptstring'); 
  }

 public function donation_list()
 {
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
      $form_date = $this->input->post('form_date');
      $form_date1 = strtr($form_date, '/', '-');
      $fdate = date('Y-m-d',strtotime($form_date1));
      $to_date = $this->input->post('to_date');
      $to_date1 = strtr($to_date, '/', '-');
      $tdate = date('Y-m-d',strtotime($to_date1));
      $data['fdate'] = $fdate;
      $data['tdate'] = $tdate;
      $status=$this->input->post('status');
          if($tdate<$fdate)
            {
              echo '<script>alert("'.("Start Date should be less than End Date").'")</script>';
              echo '<script>window.location.href = "donation"</script>';
             }else 
             {
              $data['donation_data']=$this->donation_model->fetchDataAsc('tbl_donation','donation_id',$fdate,$tdate,$status);
              $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
              $this->load->view('donation-list',$data);
             }    
    }else
    {
      $data['donation_data']=$this->donation_model->fetchDataAsc('tbl_donation','donation_id','','','');
       $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
      $this->load->view('donation-list',$data);
    }
 }


 public function add_donation($id=NULL)
 {
  if($id)
    {
      $id = $this->encryptdecryptstring->decrypt_string($id);
      $data['donation_data'] = $this->common_model->selectDetailsWhr('tbl_donation','donation_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-donation',$data);
  }

  public function donation_viewform($id=NULL)
 {
  if($id)
    {
      $id = $this->encryptdecryptstring->decrypt_string($id);
      $data['donation_data'] = $this->common_model->selectDetailsWhr('tbl_donation','donation_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('donation-viewform',$data);
  }

 


}
