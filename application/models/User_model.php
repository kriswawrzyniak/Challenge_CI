<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class User_model extends CI_Model {


    function __construct() {
        parent::__construct();
    } 

    function get_all_users() {
        $query = $this->db->get(users);
        $results = array();
        foreach ($query->result() as $result) {
            $results[] = $result;
        }
        return $results;
    }

    function get_admin() {
        
    }
    
    function get_user() {
        
    }
}