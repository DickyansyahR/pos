<?php
class model_operator extends CI_Model{
    
    
    function login($username,$password){
        $chek= $this->db->get_where('operator',array('username'=>$username,'password'=> sha1($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    function tampildata(){
        return $this->db->get('operator');
    }
}