<?php
  class Test extends CI_Controller{
     
    public function index(){
       
      echo "Hello World";

    } 

    public function hello(){

      $this->load->view('test');   //view -> フォルダ名　, test -> フォルダ内のファイル名

    }

    public function insert(){

      $data = array(
          'name' => 'Soma'
      );

      $this->db->insert("stud", $data);

    }

    public function update(){
 
       $data = array(
          'name' => "James"
       );

       $this->db->set($data);
       $this->db->where('roll_no','1');
       $this->db->update('stud',$data);
    }

    public function delete(){

       $this->db->delete('stud','roll_no=1');
        
    }
     
  }
?>