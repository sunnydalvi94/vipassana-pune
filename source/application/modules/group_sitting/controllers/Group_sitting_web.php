<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group_sitting_web extends Base_Controller {
     
    /*
    -------------------------------------------------------------
    Author  : Roshan Deshmukh       Date: 18 Dec 19
    -------------------------------------------------------------
    */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->module('group_sitting/group_sitting_api');
    }

    public function group_sitting_list()
    {
        $details = array('all' =>true);
        $data['group_sitting_data'] = $this->group_sitting_api->_get_group_sitting($details);
        $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
        $this->load->view('group-sitting-list',$data);
    }

    public function add_group_sitting($id=NULL)
    {
        $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
        if($id)
        {
            $details = array('id' =>$id);
            $details = $this->decryptArray($details);
            $id = $details['id'];
            $data['group_sitting_data']=$this->common_model->selectDetailsWhr('tbl_group_sitting','group_sitting_id',$id);
        }
        $this->load->view('add-group-sitting',$data);
    }

    public function upload_group_sitting_image()

    {
         
        if($_FILES['file']['name'] != '')
        {
            $test =explode(".", $_FILES['file']['name']);
            $extension = end($test);
            $name = rand(100000, 999999) . '.' . $extension;
            $location = 'uploads/group_sitting_images/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $img_path = base_url().'uploads/group_sitting_images/'.$name;
            $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
            echo $img;
        }
    }

    }




  