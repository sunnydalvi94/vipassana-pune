<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Site_model extends CI_Model {
    private $returnarray;
    public function __construct() {
        parent::__construct();
        $this->returnarray = array();
    }

    /*-----------------------------------------------------------------------------------------------------
        Author : Rahul D                Date : 27-12-2019
    -----------------------------------------------------------------------------------------------------*/
    public function generateAndFetchRegNumber() {
        $Q = $this->db->query("CALL generateAndFetchRegistrationNumber('');");
        if($Q) {
            $res = $Q->row();
            $Q->next_result(); // Dump the extra resultset.
            $Q->free_result(); // Does what it says.
            return isset($res->reg_no) && !empty($res->reg_no)?$res->reg_no:$res->default_reg_no;
        }
        return false;
    }
}