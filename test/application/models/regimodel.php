<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of regimodel
 *
 * @author CLab18
 */
class regimodel extends CI_Model{
    //put your code here
    public function newuser($data)
    {
        $n=$data['uname'];
        $pwd=$data['password'];
        $e=$data['email'];
        $ph=$data['phone'];
        $query="insert into users(username,password,email,phone) values('$n','$pwd','$e','$ph')";
        $query_res=$this->db->query($query);
        return $query_res;
    }
     public function log($data)
    {
        $n=$data['uname'];
        $pwd=$data['password'];
        
        $query="select * from users where username='$n' and password='$pwd'" ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
    }
    public function getUserDetails($u_id)
    {

        $query = "select * from users where id='$u_id'";
        $query_res = $this->db->query($query);
        $query_out = $query_res->result();
        return $query_out;
    }
}
