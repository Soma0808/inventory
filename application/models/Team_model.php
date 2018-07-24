<?php

class Team_model extends CI_Model{

   public function get_team(){

       $sql = $this->db->get('team');
       return $sql->result_array();
   }

   public function add_team($fname,$lname,$email){
       
       $this->load->helper('url');
       
       $data = array(
           'firstname' => $fname,
           'lastname' => $lname,
           'email' => $email
       );

       return $this->db->insert("team",$data);

   }

}

?>