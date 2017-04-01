<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminmodel
 *
 * @author CLab18
 */
class adminmodel extends CI_Model{
    
     public function login($data)
    {
        $n=$data['uname'];
        $pwd=$data['password'];
        
        $query="select * from admin where a_email='$n' and a_password='$pwd'" ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
    }
     public function getadminDetails($u_id)
    {

        $query = "select * from admin where id=$u_id";
        $query_res = $this->db->query($query);
        $query_out = $query_res->result();
        return $query_out;
    }
    public function newuser($data)
    {
        $id=$data['rid'];
        $name=$data['name'];
        $no=$data['sno'];
        $l=$data['loc'];
        $p=$data['panch'];
        
        $query="insert into regiusers(ration_id,owner_name,ration_shop_no,locality,panchayath) values('$id','$name','$no','$l','$p')";
        $query_res1=$this->db->query($query);
        
        $q="select * from regiusers where ration_id=$id";
        $query_res=$this->db->query($q);
        $query_out = $query_res->result();
        return $query_out;
    }
    public function regi_card_details()
    {
        $query = "select * from regiusers";
        $query_res = $this->db->query($query);
        $query_out = $query_res->result();
        return $query_out; 
    }

    public function new_member($data)
    {
        $id=$data['rid'];
        $mname=$data['mname'];
        $mage=$data['age'];
        $mgender=$data['gender'];
        $moccupation=$data['occupation'];
        $mrelation=$data['relation'];
        $query="insert into members(ration_id,member_name,member_age,member_gender,member_occupation,member_relation) values('$id','$mname','$mage','$mgender','$moccupation','$mrelation')";
         $query_res=$this->db->query($query);
        $q="select * from members where ration_id=$id";
        $query_res1=$this->db->query($q);
        $q_count= "select member_id from members where ration_id=$id";
        $query_res2=$this->db->query($q_count);
        $count_member=$query_res2->result();
        $count1=count($count_member);
        $q_update_member_no="update regiusers set no_members =$count1 where ration_id=$id";
         $query_res3=$this->db->query($q_update_member_no);
       
        return $query_res;
    }
    public function view_member_details($data)
    {
        $id = $data['rid'];
        $query = " select * from members where ration_id = $id";
        //var_dump($query);
        $query_res = $this->db->query($query);
        $query_out = $query_res->result();
        
        return $query_out; 
    }
     public function delete_member_details($data)
    {
       $id = $data['rid'];
       $mid = $data['mid'];
        $query = " delete  from members where member_id = $mid";
        $query_res = $this->db->query($query);
        $q="select * from members where ration_id=$id";
        $query_res1=$this->db->query($q);
        $q_count= "select member_id from members where ration_id=$id";
        $query_res2=$this->db->query($q_count);
        $count_member=$query_res2->result();
        $count1=count($count_member);
        $q_update_member_no="update regiusers set no_members =$count1 where ration_id=$id";
         $query_res3=$this->db->query($q_update_member_no);
        return $query_res; 
        
     }
     public function delete_user_details($data)
    {
          $id = $data['rid'];
          $query = " delete  from regiusers where ration_id=$id";
              
          $query_res = $this->db->query($query);
            $query = "delete  from members where ration_id=$id ";  
            $query_res2 = $this->db->query($query);
          $q="select * from regiusers where ration_id=$id";
        $query_res1=$this->db->query($q);
        $query_out = $query_res1->result();
         return $query_out;
     }
      public function new_shop($data)
    {
        $id=$data['shopid'];
        $ownername=$data['ownername'];
        $loc=$data['loc'];
        $salesman=$data['salesman'];
        $cards=$data['cards'];
        $license=$data['license'];
         $distid=$data['dist_id'];
        $query="insert into regi_shop(ration_shop_no,owner_name,location,salesman,no_cards,licence_end_date,dist_id) values('$id','$ownername','$loc','$salesman','$cards','$license','$distid')";
         $query_res=$this->db->query($query);
       
       
        return $query_res;
    }
    public function view_shop_details($data)
    {
        $id = $data['shopid'];
        $query = " select * from regi_shop";
        //var_dump($query);
        $query_res = $this->db->query($query);
        $query_out = $query_res->result();

        return $query_out; 
    }
    public function delete_shop_details($data)
    {
          $id = $data['shop_id'];
          $query = " delete  from regi_shop where ration_shop_no=$id";
              
          $query_res = $this->db->query($query);
            
          $q="select * from regi_shop where ration_shop_no=$id";
        $query_res1=$this->db->query($q);
        $query_out = $query_res1->result();
         return $query_out;
     }
     public function new_distributor($data)
    {
        $id=$data['distid'];
        $ownersname=$data['ownersname'];
        $loc=$data['loc'];
        $address=$data['address'];
        $shops=$data['no_of_shops'];
       
        $query="insert into regi_distributors(dist_id,location,owner_name,address,no_shops) values('$id','$loc','$ownersname','$address','$shops')";
         $query_res=$this->db->query($query);
       
       
        return $query_res;
    }
    public function view_distributor_details($data)
    {
        $id = $data['distid'];
        $query = " select * from regi_distributors";
        //var_dump($query);
        $query_res = $this->db->query($query);
        $query_out = $query_res->result();

        return $query_out; 
    }
     public function delete_distributor_details($data)
    {
          $id = $data['dist_id'];
          $query = " delete  from regi_distributors where dist_id=$id";
              
          $query_res = $this->db->query($query);
            
          $q="select * from regi_distributors where dist_id=$id";
        $query_res1=$this->db->query($q);
        $query_out = $query_res1->result();
         return $query_out;
     }
     public function allotments($data) {
         
       $itemcode=$data['itemcode'];
        $cardtype=$data['cardtype'];
        $qty=$data['qty'];
        $price=$data['price'];
        
       
        $query="insert into stock_alloc(itemcode,cardtype,quantity,price) values('$itemcode','$cardtype','$qty','$price')";
         $query_res=$this->db->query($query);
       
       
        return $query_res;  
     }
      public function view_allotment_details($data)
    {
        $id = $data['id'];
        $query = " select * from stock_alloc";
        //var_dump($query);
        $query_res = $this->db->query($query);
        $query_out = $query_res->result();

        return $query_out; 
    }
    
    public function view_dist()
    {
         $query = " select dist_id from regi_distributors";
          $query_res = $this->db->query($query);
        $dist_id = $query_res->result();

        return $dist_id; 
    }
    public function view_shop()
    {
         $query = " select ration_shop_no from regi_shop";
          $query_res = $this->db->query($query);
        $shop = $query_res->result();

        return $shop; 
    }
    public function dist_shop_add($data)
    {
        $dist_id=$data['dist_id'];
        $ration_no=$data['ratio_shop_no'];
        $query = "insert into dist_shop(dist_id,shop_id) values('$dist_id','$ration_no') ";
        $query_res=$this->db->query($query);
        return $query_res;
    }
    public function shop()
    {
        $query = " select ration_shop_no from regi_shop";
          $query_res = $this->db->query($query);
        $shop = $query_res->result();
        return $shop;

    }
    public function item()
    {
        $query = " select id from stock_alloc";
          $query_res = $this->db->query($query);
        $item = $query_res->result();
        return $item;
    }
    public function shop_allot($data)
    {
        $shop=$data['shop'];
        $item=$data['item'];
        $query = "insert into shop_alloc(shop_id,item_id) values('$shop','$item') ";
        $query_res=$this->db->query($query);
        return $query_res;
    }
   
    public function shop_account()
    {
        $query="select * from shop_stock " ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
    }
    public function dist_account() {
        $query="select * from dist_stock " ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
        
    }
    public function dist_show_shops($dist_id) {
       
        $query="select * from dist_shop  where  dist_id='$dist_id' " ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
        
    }
    public function newappointment($data) {
       $uid=$data['uid'];
        $query="insert into appointment(user) values('$uid') ";
        $query_res=$this->db->query($query);
         return $query_res;
        
    }
    public function appointments()
    {
        $query="select *  from appointment" ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
    }
    public function add_alloc_date($data) {
        $alloc_date=$data['date'];
        $appointment_id=$data['appointment_id'];
         $query="update appointment set alloc_date='$alloc_date' where id='$appointment_id' ";
        $query_res=$this->db->query($query);
         return $query_res;
        
        
    }
    
    }
