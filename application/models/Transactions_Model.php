<?php 

class Transactions_Model extends CI_Model {

    public function get()
    {
        $this->db->select('*');
        $this->db->from('transactions t');
        $this->db->join('users u', 't.t_user_id=u.user_id');
        $this->db->order_by('t_id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('transactions t');
        $this->db->where('t_user_id', $id);
        $this->db->order_by('t_id', 'desc');
        
        $query = $this->db->get();
        return $query->result();

    
    }

    

}

?>