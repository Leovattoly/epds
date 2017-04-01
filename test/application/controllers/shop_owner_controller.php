<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shop_owner_controller
 *
 * @author user
 */
class shop_owner_controller extends CI_Controller {
    public function login()
    {
      $this->load->view('shop_owner_login');   
      
      
    }
     public function logout()
    {
         $this->session->unset_userdata('id');
         
      $this->load->view('shop_owner_login');   
      
      
    }
    
    public function loginvalidation()
    {
               

       $this->form_validation->set_rules('Username','UserName ','required');    
       $this->form_validation->set_rules('Password','Password','required');
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('shop_owner_login');
       }
 else {
          $data['uname']=$this->input->post('Username');
       $data['password']=$this->input->post('Password'); 
       $this->load->model('shop_owner_model');
       $result=$this->shop_owner_model->shopownerlogin($data);
       if(!empty($result))
       {
          
           foreach ($result as $value)
           {
                
                $user['id'] = $value->id;
               $user['shop_id']=$value->ration_shop_no;
               // $user['email']=$value->email;
                //$user['phone']=$value->phone;
                
                
           }
           $uid = $user['id'];
           $shop_id=$user['shop_id'];
           $uid=$this->session->set_userdata('id',$uid);
           $shop_id=$this->session->set_userdata('ration_shop_no',$shop_id);
           
          $this->load->view('shop_owner_profile',$user);
           
       }
       else
       {
           $this->load->view('shop_owner_login');

       }
       }
    }

    public function stock_updation()
    {
                   $this->load->view('rationown_stock_updation');

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
          $this->load->view('rationown_stock_updation');
    }
    else
    {
         $data['id'] = $this->session->userdata('ration_shop_no');
        $data['update_date']=$this->input->post('update_acc_date');
       $data['rice_qty']=$this->input->post('rice_qty');
    $data['wheat_qty']=$this->input->post('wheat_qty');
    $data['sugar_qty']=$this->input->post('sugar_qty');
       $data['kerosene_qty']=$this->input->post('kerosene_qty');
       
    
    $this->load->model('shop_owner_model');
       $result=$this->shop_owner_model->account_update($data);
    if($result)
       {
           //$this->load->model('adminmodel');
        //$result['cards']=$this->adminmodel->newuser($data);
        
          //var_dump($result);
         //$this->load->view('view_regiuser_data',$result);
          redirect('shop_owner_controller/shopown_stock_success');
      
       
       }
       else 
       {
           echo "errors";
           

       }
    }   
    }
        public function view_allotments() {
        
       $this->load->model('shop_owner_model');
           $shop_id=$this->session->set_userdata('ration_shop_no',$shop_id);
        $res=$this->shop_owner_model->view_allotment($shop_id);
      
         $result="";
        // var_dump($result);
         if(!empty($res))
         {
             $result['result']=$res;
         }
         
        $this->load->view('dist_view_allotements',$result);
       }

    public function shopown_stock_success() {
        
                   $this->load->view('shopown_stock_update_success');

        
    }
    
       }

