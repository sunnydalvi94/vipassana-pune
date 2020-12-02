<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Personal_details_model extends CI_Model
{
	private $returnarray;
	public $error;
	public $error_code;
    public function __construct() 
    {
	  parent::__construct();
	  $this->error=array();
      $error = Array('code'=>'', 'message'=>'');
    }
    /*
    =================================================================================
    Author:shuhangi Jagadale                                    Date:20/07/2020
    =================================================================================
    */
	public function getUserPersonal($details=array(),$personal_details_id)
    {
        if(isset($details))
        {
             $sql=$this->db->SELECT("user_id")
                            ->FROM('tbl_user')
                            ->WHERE('personal_details_id',$personal_details_id)     
                            ->GET(); 
            //echo $this->db->last_query();    
            $error=$this->db->error();   
            if($sql && $sql->num_rows()>0)
            {
                return $sql->row_array();
            }
            else
            {
                $this->error=$error['message'];
                return false;
            }
        }
    }
}