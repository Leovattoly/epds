<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dist_controller
 *
 * @author user
 */
class dist_controller extends CI_Controller {
    //put your code here
    public function login()
    {
      $this->load->view('dist_login');   
      
      
    }
     public function logout()
    {
     $this->session->unset_userdata('id');
      $this->load->view('dist_login');   
      
      
    }
    
    public function loginvalidation()
    {
               

       $this->form_validation->set_rules('Username','UserName ','required');    
       $this->form_validation->set_rules('Password','Password','required');
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('dist_login');
       }
 else {
          $data['uname']=$this->input->post('Username');
       $data['password']=$this->input->post('Password'); 
       $this->load->model('dist_model');
       $result=$this->dist_model->distlogin($data);
       if(!empty($result))
       {
          
           foreach ($result as $value)
           {
                
                 $user['id'] = $value->dist_id;
               // $user['uname']=$value->username;
               // $user['email']=$value->email;
                //$user['phone']=$value->phone;
                
                
           }
           $uid = $user['id'];
           $uid=$this->session->set_userdata('id',$uid);
          $this->load->view('dist_profile',$user);           
       }
       else 
       {
           $this->load->view('dist_login');

       }
       }
    }
    public function view_allotment($shop) {
        
       $this->load->model('dist_model');
                
        $res=$this->dist_model->view_allotment($shop);
      
         $result="";
        //var_dump($res);
         if(!empty($res))
         {
             $result['result']=$res;
         }
         
       $this->load->view('dist_view_allotements',$result);
       }
    
    public function dist_account_update() {
        
        $this->load->view('diste_acc_update');
    }
     public function account_updat_validation()
    {
         $this->form_validation->set_rules('update_acc_date','Date ','required');    
       $this->form_validation->set_rules('rice_qty','Quantity','required');
        $this->form_validation->set_rules('wheat_qty','Quantity ','required');  
         $this->form_validation->set_rules('sugar_qty','Quantity ','required');  
       $this->form_validation->set_rules('kerosene_qty','Quantity ','required'); 
         
    
     if ($this->form_validation->run()==FALSE)
       {
          $this->load->view('dist_acc_update');
    }
    else
    {
         $data['id'] = $this->session->userdata('id');
        $data['update_date']=$this->input->post('update_acc_date');
       $data['rice_qty']=$this->input->post('rice_qty');
    $data['wheat_qty']=$this->input->post('wheat_qty');
    $data['sugar_qty']=$this->input->post('sugar_qty');
       $data['kerosene_qty']=$this->input->post('kerosene_qty');
       
    
    $this->load->model('dist_model');
       $result=$this->dist_model->account_update($data);
    if($result)
       {
           //$this->load->model('adminmodel');
        //$result['cards']=$this->adminmodel->newuser($data);
        
          //var_dump($result);
         //$this->load->view('view_regiuser_data',$result);
          $this->load->view('dist_profile');    
      
       
       }
       else 
       {
           echo "errors";
           

       }
    }   
    }
    
      public function view_dists_shops1()
    {
          $this->load->model('dist_model');
          $dist_id= $this->session->userdata('id');
         $res=$this->dist_model->dist_show_shops($dist_id);
         $result="";
        var_dump($result);
         if(!empty($res))
         {
             $result['result']=$res;
         }
         
        $this->load->view('dist_view_shopunder',$result);
         
          
      }
      public function allocate($shop_id) {
          $this->load->model('dist_model');
         
          $res=$this->dist_model->allocate($shop_id);
           $this->load->view('dist_view_allocate_sucess');
      }
    
       }
