<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('form');
	}
	
	public function index()
	{
        //Get user info
		$allUsers = $this->User_model->get_all_users();
		$data = array();
        $data['user'] = $allUsers[1];
        
        //Set session data with user's id 
        $this->session->set_userdata('userID',$data['user']->id);

        //Load view
		$this->load->view('user', $data);
    }
    
    public function logout()
    {
        //End session 
        $this->session->unset_userdata('userID');
        
        //Redirect to welcome page
        $this->load->helper('url');
        redirect(base_url(), 'refresh');
    }
}