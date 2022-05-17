<?php 

class Users_Model extends CI_Model {

    // !!--------------- General Functions --------------!!

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


    // !!--------------- Util Functions --------------!!
    public function login($data)
    {
        $query = $this->db->where("user_username=",$data['user_username'])->get("users");
        if($query->num_rows() > 0) {

            // var_dump($query->row());
            $user = $query->result_array()[0];
            // if( password_verify($data['user_pass'], $user['user_pass']) ) {
            if( $data['user_pass'] == $user['user_pass'] ) {
                
                return $user;

            } else {

                return "Wrong Password";

            }

        } else {

            return "No User Found";

        }
    }


    public function signup($data)
    {
       $this->db->insert("users", $data);
       $result = $this->db->insert_id();

        if($result > 0) {

            $result2 = $this->login($data);
            return $result2;

        } else {

            return "Registration Failed!";

        }
    }

    

}

?>