<?php

   class Employee_model extends CI_Model{

      public function get_employees(){
          $sql = $this->db->get('employees');
          return $sql->result_array();  // multiple value
      }

      public function get_specific_employee($id){
          $sql = $this->db->get_where('employees',array('employee_id'=>$id));
          return $sql->row_array();  // one value
      }

      public function add_employee($firstname,$lastname,$email,$birthday,$filename){
          
        $this->load->helper('url');
        $this->load->helper('date');


        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'birthdate' => $birthday,
            'profilepic' => $filename
        );

        return $this->db->insert("employees",$data);

      }

      public function update_employee($id,$firstname,$lastname,$email,$bdate){
          $this->load->helper('url');
          $this->load->helper('date');

          $data = array(
              'firstname' => $firstname,
              'lastname' => $lastname,
              'email' => $email,
              'birthday' => $bdate
          );

          $this->db->where('employee_id',$id); // connect to return?
          return $this->db->update('employees',$data);
      }
 
      public function delete_employee($id){

        $this->db->where('employee_id',$id);
        return $this->db->delete('employees');//conbine??
      }


   }  

?>