<?php
class Signupmodel extends CI_Model

{

    public function user($email) {

       return $this->db->where('email', $email)->get('tab')->row();

    }


    public function insert($name,$email,$password)

    {
        $data = [

        'name' => $name,
        'email' => $email,
        'password' => $password
    ];
        return $this->db->insert('tab', $data);
    }
}
?>
