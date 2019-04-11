<?php

class User extends CI_Controller
{
    public function index(){
        echo "Hello";
    }

    $this->load->database();
    $this->load->db();
    $this->load->get('table_name');
    //select * from table_name;

}