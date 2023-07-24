<?php
class college_model extends CI_Model{

    public function insertdata($data){

       $this->load->database();

       return $this->db->insert('staff',$data);
       

    }
}
?>