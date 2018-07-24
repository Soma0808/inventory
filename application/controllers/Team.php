<?php

class Team extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('team_model');
        $this->load->helper('url');
    }

    public function index(){

       $data['team'] = $this->team_model->get_team();
       $this->load->view('header');
       $this->load->view('team',$data); //?? 
       $this->load->view('footer');

    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');

        $add = $this->team_model->add_team($fname,$lname,$email);
        
        if($add == TRUE){
            redirect('team','refresh');
        }
        else{
            redirect('Team/add','refresh');
        }

    }

    public function displayform(){

       $this->load->helper('form');
       $this->load->view('header');
       $this->load->view('addplayer');
       $this->load->view('footer');
    }

}

?>