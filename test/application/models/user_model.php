<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author user
 */
class user_model extends CI_Model{
    
    public function guest_registration($data) {
         
       $name=$data['name'];
       $adhaar=$data['adhaar'];
        $gender=$data['gender'];
        $mobile=$data['mobile'];
        $email=$data['email'];
        $username=$data['username'];
        $password=$data['password'];


        
       
        $query="insert into Guestusers(rg_name,rg_adhar,rg_gender,rg_mobile,rg_email,rg_username,rg_password) values('$name','$adhaar','$gender','$mobile','$email','$username','$password')";
         $query_res=$this->db->query($query);
       
       
        return $query_res;  
     }
    //put your code here
      public function login($data)
    {
        $n=$data['uname'];
        $pwd=$data['password'];
        
        $query="select * from guestusers where rg_username='$n' and rg_password='$pwd'" ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
    }
    
    public function add_application($application)
    { 
      $img=$application['image'];  
      $uid=$application['id'];
       $query="insert into application(user,image) values('$uid','$img')";
         $query_res=$this->db->query($query);
    
}

    public function take_appointment()
    { 
      
       $query="insert into application(user,image) values('$uid','$img')";
         $query_res=$this->db->query($query);
    
}
}