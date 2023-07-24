<?php

class college extends CI_Controller{
   
   public function index(){
    $this->load->view('indexclg');
   }


    public function front(){
        $this->load->view('college_form');
    }
    public function savedata(){
       /* $name=$this->input->post('name');
        $Dateofjoining=$this->input->post('Dateofjoining');
        $Address=$this->input->post('Address');
        $Department=$this->input->post('Department');
        $phonenumber=$this->input->post('phonenumber');
        $gender=$this->input->post('gender');
        $BloodGroup=$this->input->post('BloodGroup');
     */ 
      extract($_POST);
      $data=[
        'name'=>$name,
        'dateofjoining'=>$Dateofjoining,
        'Address'=>$Address,
        'Department'=>$Department,
        'Phone_Number'=>$phonenumber,
        'Gender'=>$gender,
        'Blood_Group'=>$BloodGroup
      ];

      $this->load->model('college_model');
      $result=$this->college_model->insertdata($data);
      if($result)
      {
        
        $this->load->view('indexclg');

      }
      else
      {
        echo 'error ';
      }
        
    }
    public function edit(){
      $this->load->view('edit');
    }
    
}

?>