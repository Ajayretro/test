<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization_model extends CI_Model {


  	public function login_user($table, $dataArr)
   {
    $this->db->insert($table, $dataArr);
    $insert_id = $this->db->insert_id();
    return $insert_id;
    }

}