<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller

{

    public function __construct() {

        parent::__construct();

        $this->load->database();

        $this->load->model('Login/Loginmodel');

    }

public function login()
    {
        
    if ($this->session->userdata('email')) {

       $this->load->view('Todo/create');
}
   else{

        $this->load->view('Login/Login');

       }
    
    }

public function logincheck()

    {


  $email = $this->input->post('email');


  $password = md5($this->input->post('password'));

    if($value = $this->Loginmodel->login($email)){

        if($value->password==$password){

    $this->session->set_userdata('email', $value->name);

     
       $this->load->view('Todo/create');

        }
        
    else{
            $data['user'] = "login failed!";
            $this->load->view('Login/Login',$data);
        }

        
    
    }}

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->sess_destroy();

        redirect('login');
    }
}
?>
