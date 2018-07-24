<?php

class Employee extends CI_Controller{

   public function __construct(){
       parent:: __construct();
       $this->load->model('employee_model');
       $this->load->helper('url'); //handle url
   }

   public function index(){  //default

      $data['employees'] = $this->employee_model->get_employees();
      $this->load->view('header');  //$this->load は require　と一緒
      $this->load->view('employee',$data);  //read all of data from employee table
      $this->load->view('footer');

   }

   public function create(){
       $this->load->helper('form'); //helper Library とかはSystemから呼び出されてる
       $this->load->library('form_validation');  // call the function of library
       $this->form_validation->set_rules('fname','Firstname','required|min_length[5]|max_length[12]|is_unique[employees.firstname]');

       $firstname = $this->input->post('fname');
       $lastname = $this->input->post('lname');
       $email = $this->input->post('email');
       $birthday = $this->input->post('bdate');


       if($this->form_validation->run() == FALSE){
        $this->load->view('header');
        $this->load->view('addemployee');
        $this->load->view('footer');
       }
       else{

       $config['upload_path'] = './uploads/';
       $config['allowed_types'] = 'gif|jpg|png';
       $config['max_size'] = 10000;

       $filename = $_FILES['profilepic']['name'];

       $this->load->library('upload',$config);

       if(!$this->upload->do_upload('profilepic')){
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('header');
          $this->load->view('addemployee',$error);
          $this->load->view('footer');
       }
       else{
           $data = array('upload_data'=>$this->upload->data());

           $add = $this->employee_model->add_employee($firstname,$lastname,$email,$birthday,$filename);


           if($add == TRUE){
               redirect('Employee','refresh');  // jump to function index
           }
           else{
               redirect('Emlpoyee/add','refresh');
           }
       }
         
    

        }
       
    }

   public function add(){  //ask
    $this->load->helper('form');  //どこの$this??
       $this->load->view('header');
       $this->load->view('addemployee');
       $this->load->view('footer');

   }

   public function edit(){
    $this->load->helper('form');
    $id = $this->uri->segment('3');
    $data['editemployee'] = $this->employee_model->get_specific_employee($id); // model
    
    $this->load->view('header');
    $this->load->view('editemployee',$data);  //$data
    $this->load->view('footer');
    

   }

   public function update(){
    $this->load->helper('form');
    $this->load->library('form_validation'); //question

    $id = $this->uri->segment(3); //get from id in form opened()
    $firstname = $this->input->post('firstname');
    $lastname =  $this->input->post('lastname');
    $email = $this->input->post('email');
    $bdate = $this->input->post('birthdate');

    $update = $this->employee_model->update_employee($id,$firstname,$lastname,$email,$bdate);
    if($update == TRUE){
        redirect('Employee','refresh');
    }
    
   }

   public function delete(){
       $id = $this->uri->segment(3);

       $delete = $this->employee_model->delete_employee($id);

       if($delete == TRUE){
           redirect('Employee','refresh');
       }
   }


}

?>