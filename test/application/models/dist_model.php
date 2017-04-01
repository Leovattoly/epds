<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dist_model
 *
 * @author user
 */
class dist_model extends CI_Model {
    //put your code here
     public function distlogin($data)
    {
        $n=$data['uname'];
        $pwd=$data['password'];
        
         $query="select * from regi_distributors where dist_id='$n' and owner_name='$pwd'" ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
    }
     public function view_allotment($id)
    {   
        $query="select * from shop_alloc as  t1 inner join stock_alloc as t2 on t1.item_id=t2.id where t1.shop_id='$id'" ;
        //var_dump($query);
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res; 
     }
      public function account_update($data)
    {
        $dist_id=$data['id'];
        $date=$data['update_date'];
         $rice=$data['rice_qty'];
        $wheat=$data['wheat_qty'];
         $sugar=$data['sugar_qty'];
        $kerosene=$data['kerosene_qty'];
        $query = "insert into dist_stock(dist_id,date,rice_qty,wheat_qty,sugar_qty,kerosene_qty) values('$dist_id','$date','$rice','$wheat','$sugar','$kerosene') ";
        $query_res=$this->db->query($query);
        return $query_res;
        
}
public function dist_show_shops($dist_id) {
       
        $query="select * from dist_shop  where  dist_id='$dist_id' " ;
        $query_res=$this->db->query($query);
        $res = $query_res->result();
        return $res;
        
    }
    public function allocate($shop_id) {
        
        $query="update shop_alloc set status='allocated' where  shop_id='$shop_id' " ;
         $query_res=$this->db->query($query);
            
    }
}