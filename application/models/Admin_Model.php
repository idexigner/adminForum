<?php 

class Admin_Model extends CI_Model {
    
    public function countProjects(){
        // $where = "order_appraiser_id='$id' OR order_appraiser_id2='$id'";
        // $this->db->where($where); 
        return $this->db->count_all_results('projects');
    }

    public function countPosts(){
        return $this->db->count_all_results('posts');
    }

    public function countBusinessUsers(){
        $this->db->where("user_role",'3');
        return $this->db->count_all_results('users');
    }

    public function countChannels(){
        return $this->db->count_all_results('channels');
    }

    public function proposalsByMonth(){
        return $this->db->get('proposals')->result();
    }

    
}

?>