<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hearing_speech_impaired_children_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('hearing_speech_impaired_children/hearing_speech_impaired_children_api');
  }

 public function hearing_speech_impaired_children_list()
 {
  
  $details = array('all' =>true);
  $data['hearing_speech_impaired_children_data'] = $this->hearing_speech_impaired_children_api->_get_hearing_speech_impaired_children($details);
 	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);	
  $this->load->view('hearing-speech-impaired-children-list',$data);
 }

 public function add_hearing_speech_impaired_children($id=NULL)
 {
 	if($id)
    {
      $details = array('id' =>$id);
      $details = $this->decryptArray($details);
      $id = $details['id'];
      $data['hearing_speech_impaired_children_data'] = $this->common_model->selectDetailsWhr('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-hearing-speech-impaired-children',$data);
  }

 public function upload_hearing_speech_impaired_children_image()
    {
         if($_FILES['file']['name'] != '')
        {
          $test =explode(".", $_FILES['file']['name']);
          $extension = end($test);
          $name = rand(100000, 999999) . '.' . $extension;
          $location = './uploads/hearing_speech_impaired_images/'.$name;
          move_uploaded_file($_FILES['file']['tmp_name'], $location);
          $img_path = base_url().'uploads/hearing_speech_impaired_images/'.$name;
          $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
          echo $img;
        }
    }

}