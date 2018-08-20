<?php

class operator extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
    
    function index(){
        $data['record']= $this->model_operator->tampildata();  
        $this->load->view('operator/lihat_data',$data);
    }
}