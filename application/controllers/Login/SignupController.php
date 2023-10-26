<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignupController extends CI_Controller
{

        public function __construct() {
    
            parent::__construct();
    
            $this->load->database();
    
            $this->load->model('Login/Signupmodel');
    
        }

public function signup()
    {
        $this->load->view('Login/Signup');
    }

public function signupcheck()
    {
        
     $name = $this->input->post('name');

     $email = $this->input->post('email');

     $password = md5($this->input->post('password'));


  if ($value = $this->Signupmodel->user($email)) {

  if ($value->email = $email){

    $data['user'] = "User already exits";
    
    $this->load->view('Login/Signup', $data);
  }
  }

else{

    $this->Signupmodel->insert($name, $email, $password);

            redirect('login');
        } 

       
            
    }
}
?>
