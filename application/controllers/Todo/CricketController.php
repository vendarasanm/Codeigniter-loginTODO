<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CricketController extends CI_Controller
{

    public function __construct() {

        parent::__construct();

        $this->load->database();

        $this->load->model('Todo/Cricketmodel');

    }

    public function create()
    {
        $this->load->view('Todo/create');
    }


    public function insertplayer()
    {

            $data = [

                'name' => $this->input->post('name'),

                'skill' => $this->input->post('skill'),

                'age' => $this->input->post('age')
            ];


    $this->Cricketmodel->insertplayer($data);

        redirect(base_url('player/list'));
    }


    public function list()
    {

        $value['player'] = $this->Cricketmodel->getplayer();

        $this->load->view('Todo/list',$value);
    }



    public function editplayer($no)
    {

        $value['player'] = $this->Cricketmodel->editplayer($no);

        $this->load->view('Todo/edit', $value);
    }

    public function updateplayer()
    {
        
    $data = [

        'no' => $this->input->post('no'),

        'name' => $this->input->post('name'),

        'skill' => $this->input->post('skill'),

        'age' => $this->input->post('age')
           
    ];

           $this->Cricketmodel->updateplayer($data);

            redirect(base_url('player/list'));

        
        
    }

    public function deleteplayer($no)
    {

        $this->Cricketmodel->deleteplayer($no);

        redirect(base_url('player/list'));
    }
}
?>
