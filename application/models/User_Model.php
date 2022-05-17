<?php 

class User_Model extends CI_Model {

    public function get()
    {
            $query = $this->db->where("user_role in (1,2,3)")->get('users');
            return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where("user_id =",$id)->get("users");
        return $query->row();
    }

    // public function search($keyword, $business)
    // {
    //     $this->db->like('pro_title', $keyword);
    //     $this->db->like('pro_business_owner', $business);
    //     $query = $this->db->get('users');
    //     return $query->result();

    //     $query = $this->db->where("pro_id =",$id)->get("users");
    //     return $query->row();
    // }

    public function create($data)
    {
       $this->db->insert("users", $data);
       $result = $this->db->insert_id();
       return $result;
    }
    public function update($data)
    {
        $id = $data['user_id'];
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
        $result = $this->db->affected_rows();
        return $result;
    }
    public function delete($id)
    {
        // $id = $data['user_id'];
        $this->db->where('user_id', $id);
        $this->db->delete('users'); 
        return $this->db->affected_rows();
    }


}

?>