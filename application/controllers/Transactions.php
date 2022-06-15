<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

    var $loggedUser;
    public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('loggedUser_Admin')){
            redirect('');
        }
 
        $this->load->model('Transactions_Model');       
        

        $this->loggedUser = $this->session->userdata('loggedUser_Admin');
    }
	
	public function index()
	{      
        
        
        $data['transaction_list'] = $this->Transactions_Model->get(); 
        
        $this->load->view('transaction',$data);
    }
    
   

   

    
}
