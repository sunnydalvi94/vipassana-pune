<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Authentication
{
 
	function _construct() 
	{
	    $CI =& get_instance();
	    $CI->load->database('database');
		$CI->load->library("session");
	}
	
	function chk_login()
	{
		$CI =& get_instance();
		$user = $CI->session->userdata('user_id');
		return ($user) ? $user : false;
	}
	function donation_login()
	{
		$CI =& get_instance();
		$user = $CI->session->userdata('user_id');
		return ($user) ? $user : false;
	}
	function login($username,$password,$role_id)
	{
		$CI =& get_instance();
		$pass = md5(sha1(md5($password)));
		$condition = array('username' => $username, 'password' => $pass,'display'=>'Y');
			$CI->db->where($condition);
			$query = $CI->db->get_where('tbl_user');
			
		if($query->num_rows()!=1)
		{
		   return false;
		}
		else
		{
			$CI->session->set_userdata("username", $query->row()->username);
			$CI->session->set_userdata("fullname", $query->row()->fullname);
			$CI->session->set_userdata("email", $query->row()->email);
			$CI->session->set_userdata("user_id", $query->row()->user_id);
			$CI->session->set_userdata("role_id", $query->row()->role_id);
			$CI->session->set_userdata("ISlogin", true);
			$CI->session->sess_expire_on_close = TRUE;
			return true;      
		}
	
	}
	
	function login1($username,$password,$role_id)
	{
		$CI =& get_instance();
		$pass = md5(sha1(md5($password)));
		$condition = array('username' => $username, 'password' => $pass,'display'=>'Y');
			$CI->db->where($condition);
			$query = $CI->db->get_where('tbl_user');
			
		if($query->num_rows()!=1)
		{
		   return false;
		}
		else
		{
			$CI->session->set_userdata("username", $query->row()->username);
			$CI->session->set_userdata("fullname", $query->row()->fullname);
			$CI->session->set_userdata("email", $query->row()->email);
			$CI->session->set_userdata("user_id", $query->row()->user_id);
			$CI->session->set_userdata("role_id", $query->row()->role_id);
			$CI->session->set_userdata("ISlogin", true);
			$CI->session->sess_expire_on_close = TRUE;
			return true;      
		}
	
	}

	function logout() 
	{	     
		$CI =& get_instance();
		$CI->session->unset_userdata("user_id");
		$CI->session->unset_userdata("role_id");
		$CI->session->unset_userdata("username");
		$CI->session->unset_userdata("fullname");
		$CI->session->unset_userdata("email");
		$CI->session->unset_userdata("ISlogin");
	}	
} ?>