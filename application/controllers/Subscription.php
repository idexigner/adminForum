<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends CI_Controller {

    var $loggedUser;
    public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('loggedUser_Admin')){
            redirect('');
        }
 
        $this->load->model('Subscription_Model');       
        

        $this->loggedUser = $this->session->userdata('loggedUser_Admin');
    }
	
	public function index()
	{             
        $data['subscription_list'] = $this->Subscription_Model->get();         
        $this->load->view('subscriptions',$data);
    }

    public function update($id){

        $data['s_id'] = $id;
       $data['s_monthly'] = $this->input->post('s_monthly');
       $data['s_annually'] = $this->input->post('s_annually');

       if($id == 1){
           $length_variable = 'forum_feature_length';
       }else if ($id == 2){
            $length_variable = 'contractor_feature_length';
       }else if ($id == 3){
        $length_variable = 'business_feature_length';
        }

       $length =  $this->input->post($length_variable);

       $feature = array();
       for($i=1;$i<=$length;$i++){  
            $arr = (object) [
                "feat" => $_POST["feature_".$i]
            ];
            array_push($feature, $arr);
        }

        $data['s_feature']=json_encode($feature);

        $result = $this->Subscription_Model->update($data);

        if($result > 0){
            redirect('subscription');
        }else {
            //assign returned data from model to session
            // $this->session->set_flashdata('message', $result);
            // redirect('user/update/'.$this->input->post('user_id'));
        }

       


    }
    
   

   

    
}
