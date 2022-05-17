<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('Admin_Model');

    }
	
	public function index()
	{        
        $data['loggedUser'] = $this->session->userdata('loggedUser_Admin');
        $data['projects'] = $this->Admin_Model->countProjects();
        $data['posts'] = $this->Admin_Model->countPosts();
        $data['business_users'] = $this->Admin_Model->countBusinessUsers();
        $data['channels'] = $this->Admin_Model->countChannels();
        $data['proposals_by_month'] = $this->Admin_Model->proposalsByMonth();
        $this->load->view('index',$data);
	}
}
