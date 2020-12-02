<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller {

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
        $this->load->view('dashboard');
	}
}
