<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shop_owner_model
 *
 * @author user
 */
class shop_owner_model extends CI_Model {
    //put your code here
     public function shopownerlogin($data)
    {
        $n=$data['uname'];
        $pwd=$data['password'];
        
         $query="select * from regi_shop where ration_shop_no='$n' and owner_name='$pwd'" ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
    }
    public function account_update($data)
    {
        $shop_id=$data['id'];
        $date=$data['update_date'];
         $rice=$data['rice_qty'];
        $wheat=$data['wheat_qty'];
         $sugar=$data['sugar_qty'];
        $kerosene=$data['kerosene_qty'];
        $query = "insert into shop_stock(shop_id,date,rice_qty,wheat_qty,sugar_qty,kerosene_qty) values('$shop_id','$date','$rice','$wheat','$sugar','$kerosene') ";
        $query_res=$this->db->query($query);
        return $query_res;
    }

     public function view_allotment($id)
    {
        $query="select * from stock_alloc where dist_id='$id'  " ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res; 
     }
    }
