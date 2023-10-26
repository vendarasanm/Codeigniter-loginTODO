<?php
class Loginmodel extends CI_Model
{
    public function login($email)
    {
      return  $this->db->where('email', $email)->get('tab')->row();

    }
     
}
?>
