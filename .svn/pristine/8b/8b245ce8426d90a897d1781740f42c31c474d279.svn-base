<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourcenters_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
     $this->load->module('ourcenters/ourcenters_api');
  }

 public function our_centers_list()
 {

  $details=array('all'=>'True');
  $data['our_centers_data']=$this->ourcenters_api->_get_ourcenters($details);

  // $data['our_centers_data']=$this->common_model->fetchDataAsc('tbl_our_centers','our_center_id');
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);	
  $this->load->view('our-centers-list',$data);

 }
 public function add_our_centers($id=NULL)
 {
    $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
   	if($id)
    {
      // $details=array('all'=>'True');
      // $data['our_centers']=$this->ourcenters_api->_get_ourcenters($details);
      $details=array('id'=>$id);
      $details = $this->decryptArray($details);
      $id=$details['id']; 
      $data['our_centers_data'] = $this->common_model->selectDetailsWhr('tbl_our_centers','our_center_id',$id);

    }
    $this->load->view('add-our-centers',$data);
 }

    public function upload_our_centers_image()
    {
        if($_FILES['file']['name'] != '')
        {
            $test =explode(".", $_FILES['file']['name']);
            $extension = end($test);
            $name = rand(100000, 999999) . '.' . $extension;
            $location = './uploads/our_centers_images/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $img_path = base_url().'uploads/our_centers_images/'.$name;
            $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
            echo $img;
        }
    }


}
