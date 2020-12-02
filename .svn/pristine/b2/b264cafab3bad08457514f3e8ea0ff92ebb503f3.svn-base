<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_activities_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('mitra-activities/mitra_activities_api');
  }

 public function mitra_activities_list()
 {
  $details = array('all' =>true);
  $data['mitra_activities_admin_data'] = $this->mitra_activities_api->_get_mitra_activities($details);
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1); 
  $this->load->view('mitra-activities-list',$data);
 }
 public function add_mitra_activities($id=NULL)
 {
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
  if($id)
    {
      $details = array('id' =>$id);
      $details = $this->decryptArray($details);
      $id = $details['id'];
      $data['mitra_activities_data'] = $this->common_model->selectDetailsWhr('tbl_mitra_activity','mitra_activity_id',$id);
    }
    $this->load->view('add-mitra-activities',$data);
  }


  public function upload_mitra_activities_image()
    {
        if($_FILES['file']['name'] != '')
        {
            $test =explode(".", $_FILES['file']['name']);
            $extension = end($test);
            $name = rand(100000, 999999) . '.' . $extension;
            $location = 'assets/site/img/pune_activity/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $img_path = base_url().'assets/site/img/pune_activity/'.$name;
            $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
            echo $img;
        }
    }

}
