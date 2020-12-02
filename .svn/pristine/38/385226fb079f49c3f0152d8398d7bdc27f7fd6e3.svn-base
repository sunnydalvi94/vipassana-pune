<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Base_Controller {

	/*
	-------------------------------------------------------------
	Author 	: Roshan Deshmukh				Date: 18 Dec 19
	-------------------------------------------------------------
	*/

	public function __construct()
  	{
	    parent::__construct(); 
    }

	public function index()
    {
        $role_id=$this->session->userdata('role_id');
        if($this->authentication->chk_login() && $role_id ==1)
        {
            redirect('dashboard');
        }
        else
        {
            $this->load->view('login');
        }
    }

	public function chk_login() 
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $role_id=$this->input->post('role_id');

        $chklogin = false;
        if (!isset($username) or strlen($username) == 0)
        {
            $error = 'Please enter your username.';
        }
        elseif (!isset($password) or strlen($password) == 0)
        {
            $error = 'Please enter your password.';
        }
        else
        {
            $chklogin=$this->authentication->login($username,$password,$role_id);
            if(!$chklogin) $error = 'Wrong username / password, please try again.';
           //echo $this->db->last_query();
        }
        $ajax = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) and strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
        if($chklogin && $ajax)
        {  
            $role_id=$this->session->userdata('role_id');
            if($role_id==1)
            {
                $data=array(
                    'valid' => TRUE,
                    'redirect' => base_url().'dashboard'
                );
            }
            else{
                $data=array(
                    'valid' => TRUE
                );
            }
        }
        elseif($chklogin)
        {
            $role_id=$this->session->userdata('role_id');
            if($role_id==1)
            {  
                $data=array(
                    'valid' => TRUE,
                    'redirect' => base_url().'dashboard'
                );             
           }
            else{
                $data=array(
                    'valid' => TRUE,
                );
            }
        }
        else
        {
            $data=array(
                'valid' => FALSE,
                'msg' => $error
            );
        }
        $this->json->jsonReturn($data);
    }

    public function donation_login() 
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $role_id=$this->input->post('role_id');

        $chklogin = false;
        if (!isset($username) or strlen($username) == 0)
        {
            $error = 'Please enter your username.';
        }
        elseif (!isset($password) or strlen($password) == 0)
        {
            $error = 'Please enter your password.';
        }
        else
        {
            $chklogin=$this->authentication->login($username,$password,$role_id);
            if(!$chklogin) $error = 'Wrong username / password, please try again.';
           //echo $this->db->last_query();
        }
        $ajax = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) and strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
        if($chklogin && $ajax)
        {  
            $role_id=$this->session->userdata('role_id');
            if($role_id==1)
            {
                $data=array(
                    'valid' => TRUE,
                    'redirect' => base_url().'dashboard'
                );
            }
            else{
                $data=array(
                    'valid' => TRUE
                );
            }
        }
        elseif($chklogin)
        {
            $role_id=$this->session->userdata('role_id');
            if($role_id==1)
            {  
                $data=array(
                    'valid' => TRUE,
                    'redirect' => base_url().'dashboard'
                );             
           }
            else{
                $data=array(
                    'valid' => TRUE,
                );
            }
        }
        else
        {
            $data=array(
                'valid' => FALSE,
                'msg' => $error
            );
        }
        $this->json->jsonReturn($data);
    }	
    
   
    public function logout()
    {
        $this->authentication->logout();
        redirect('admin');
    }
    public function logoutSite()
    {
      $this->authentication->logout();
      redirect('donation-page');
    }
}
