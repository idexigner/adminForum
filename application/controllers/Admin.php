<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Users_Model');

    }
	
	public function index()
	{
        // $this->session->unset_userdata('loggedUser_Admin');
		$loggedUser = $this->session->userdata('loggedUser_Admin');

		//var_dump($loggedUser);
        
		if(!$loggedUser) {
			$this->signin();
		} 
		else {
            // $this->signin();
            $role = $loggedUser['user_role'];
            
            if($role == '0'){
                redirect('home');
                
            }
    
    		// if($role == '2') {
    		// 	redirect("contractorpages"); // Contractor
    		// }
    		// else if($role == '3') {
    		// 	redirect("home"); // Business
    		// } 
		}


	}


	public function signin()
	{
		$this->load->view('signin');
	}

    public function signup()
	{
		$this->load->view('signup');
	}


	public function signin_submit()
    {
        $this->form_validation->set_rules('user_username','Username','required');
        $this->form_validation->set_rules('user_pass','Password', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data['user_username'] = $this->input->post('user_username');
            $data['user_pass'] = $this->input->post('user_pass');

            $result = $this->Users_Model->login($data);

			//var_dump($result);

            if(!is_array($result)){
                $this->session->set_flashdata('message_error', $result);
                redirect('signin');
            } else {
                //assign returned data from model to session
                $this->session->set_userdata('loggedUser_Admin', $result);
                $this->index();
            }
            
        } 
        else {
            $this->index();

        }

    }


    public function signup_submit()
    {
        $this->form_validation->set_rules('user_username','Username','required');
        $this->form_validation->set_rules('user_email','Email', 'required');
        $this->form_validation->set_rules('user_fullname','Full Name', 'required');
        $this->form_validation->set_rules('user_pass','Password', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data['user_username'] = $this->input->post('user_username');
            $data['user_email'] = $this->input->post('user_email');
            $data['user_fullname'] = $this->input->post('user_fullname');
            $data['user_pass'] = $this->input->post('user_pass');
            $data['user_role'] = '3';

            $result = $this->Users_Model->signup($data);

			//var_dump($result);

            if(!is_array($result)){
                $this->session->set_flashdata('message_error', $result);
                redirect('signup');
            } else {
                //assign returned data from model to session
                $this->session->set_userdata('loggedUser_KeepAdding', $result);
                $this->index();
            }
            
        } 
        else {
            $this->signup();
        }

    }

	public function signout(){
        $this->session->unset_userdata('loggedUser_Admin');
        redirect('');
    }
}
