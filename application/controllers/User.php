<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    var $loggedUser;
    public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('loggedUser_Admin')){
            redirect('');
        }
        
        $this->load->model('Users_Model');
        $this->load->model('Post_Comments_Pledges_Model');
        // $this->load->model('Proposals_Model');
        
        

        $this->loggedUser = $this->session->userdata('loggedUser_Admin');
    }
	
	public function index()
	{        
        $data['users'] = $this->Users_Model->get(); 
        $this->load->view('user-list', $data);
	}

    public function get($id)
	{        
        $data['project'] = $this->Projects_Model->getById($id); 
        $data['proposals'] = $this->Proposals_Model->getByProjectId($id);
        $data['proposals_count'] = count($data['proposals']);

        $this->load->view('project-view', $data);
	}

    public function create()
	{ 

        $data['user'] = (object)[
            "user_id" => '',
            "user_fullname" => '',
            "user_username" => '',
            "user_email" => '',
            "user_pass" => '',
            "user_role" => '',
            "is_active" => ''        
        ];
        $data['edit'] = false;
        
        $this->load->view('user-create',$data);
	}

    public function create_submit()
	{       
        $this->form_validation->set_rules('user_fullname','Full Name','required');
        $this->form_validation->set_rules('user_username','User Name', 'required');
        $this->form_validation->set_rules('user_pass', 'Password', 'required');
        $this->form_validation->set_rules('user_role', 'User Role', 'required');
        $this->form_validation->set_rules('is_active', 'Status', 'required');


        if ($this->form_validation->run() == TRUE) {

            $data['user_fullname'] = $this->input->post('user_fullname');
            $data['user_email'] = $this->input->post('user_email');
            $data['user_username'] = $this->input->post('user_username');
            $data['user_pass'] = $this->input->post('user_pass');
            $data['user_role'] = $this->input->post('user_role');
            $data['is_active'] = $this->input->post('is_active');


            $result = $this->Users_Model->create($data);

            if($result > 0){
                redirect('user');
            } else {
                //assign returned data from model to session
                $this->session->set_flashdata('message', $result);
                redirect('user/create');
            }
            
        } 
        else {
            $this->create();
        }
    }
    
    public function update($id)
    {
        $data['user'] = $this->Users_Model->getById($id);
        $data['edit'] = true;
        $data['pledge_list'] = $this->Post_Comments_Pledges_Model->getByUser($id);
        // echo "<pre>";
        // print_r($data);
        $this->load->view('user-create',$data);
    }

    public function update_submit(){
        $this->form_validation->set_rules('user_fullname','Full Name','required');
        $this->form_validation->set_rules('user_username','User Name', 'required');
        $this->form_validation->set_rules('user_pass', 'Password', 'required');
        $this->form_validation->set_rules('user_role', 'User Role', 'required');
        $this->form_validation->set_rules('is_active', 'Status', 'required');
        if ($this->form_validation->run() == TRUE) {

            $data['user_id'] = $this->input->post('user_id');
            $data['user_fullname'] = $this->input->post('user_fullname');
            $data['user_email'] = $this->input->post('user_email');
            $data['user_username'] = $this->input->post('user_username');
            $data['user_pass'] = $this->input->post('user_pass');
            $data['user_role'] = $this->input->post('user_role');
            $data['is_active'] = $this->input->post('is_active');


            $result = $this->Users_Model->update($data);

            if($result > 0){
                redirect('user');
            } else {
                //assign returned data from model to session
                $this->session->set_flashdata('message', $result);
                redirect('user/update/'.$this->input->post('user_id'));
            }
            
        } 
        else {
            $this->update( $this->input->post('user_id'));
        }

    }

    public function delete($id){

        $result = $this->Users_Model->delete($id);
        if($result > 0) {
            redirect("user");
        } 
        // else {            
        //     $this->session->set_flashdata('update_message_error', 'Failed to delete!');
        //     redirect("user/update/".$id);
        // }
    }

    
}
