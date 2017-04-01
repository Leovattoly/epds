
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_controller
 *
 * @author CLab18
 */
class admin_controller  extends CI_Controller{
    
    public function login()
    {
      $this->load->view('login');   
      
      
    }
     public function logout()
    {
         $this->session->unset_userdata('id');
         
      $this->load->view('login');   
      
      
    }
    public function profile()
    {
      $this->load->view('admin_profile');   
      
      
    }
     public function loginvalidation()
    {
               

       $this->form_validation->set_rules('Username','UserName ','required');    
       $this->form_validation->set_rules('Password','Password','required');
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('sample');
       }
 else {
          $data['uname']=$this->input->post('Username');
       $data['password']=$this->input->post('Password'); 
       $this->load->model('adminmodel');
       $result=$this->adminmodel->login($data);
       if(!empty($result))
       {
           var_dump($result);
           foreach ($result as $value)
           {
                
                $user['id'] = $value->id;
                $user['uname']=$value->a_email;
                $user['password']=$value->a_password;
           }
           $uid = $user['id'];
           var_dump($uid);
          // var_dump($this->load->library('session'));
           $this->session->set_userdata('a_id',$uid);
           var_dump($this->session->set_userdata('a_id',$uid));
          $this->load->view('admin_profile',$user);
           
       }
       else 
       {
           $this->load->view('login');

       }
       }
    }
    public function loginfun()
    {
        if($this->session->has_userdata('id'))
        {
            $u_id = $this->session->userdata('id');
            $this->load->model('adminmodel');
            $result = $this->regimodel->getadminDetails($u_id);
            if(empty($result))
            {
                $msg['message']="Invalid user";
                $this->load->view('login',$msg);
            }
             else
              {
                // var_dump($result);

                 foreach($result as $res)
                 {
                        $user_data['u_id']= $res->id;
                        
                        $user_data['u_email']= $res->email;
                        
                   }
                     
                   $this->load->view('admin_profile',$user_data);
              }
           
        }
        else {
            $this->load->view('login');
        }
	
    }
    public function newuser() {
        
         $this->load->view('user_profile');
    }
    public function regivalidation()
    {
       
       $this->form_validation->set_rules('rid','ration card number ','required');    
       $this->form_validation->set_rules('name','owners name','required');
       $this->form_validation->set_rules('shopno','Shop number','required');
       $this->form_validation->set_rules('locality','locality','required');
       $this->form_validation->set_rules('panchayath','panchayath','required');
       //$this->form_validation->set_rules('members','number of members','required');
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('user_profile');
   
    }
    else
    {
       $data['rid']=$this->input->post('rid');
       $data['name']=$this->input->post('name');
       $data['sno']=$this->input->post('shopno');
       $data['loc']=$this->input->post('locality');
       $data['panch']=$this->input->post('panchayath');
       //$data['members']=$this->input->post('members');
       $this->load->model('adminmodel');
       $result['cards']=$this->adminmodel->newuser($data);
       if($result)
       {
           //$this->load->model('adminmodel');
        //$result['cards']=$this->adminmodel->newuser($data);
          var_dump($result);
         //$this->load->view('view_regiuser_data',$result);
          redirect('admin_controller/view_cards');
       
       }
       else 
       {
           echo "errors";
           

       }
    }
    }
    
    public function view_cards() {
        $this->load->model('adminmodel');
        $result['cards']=$this->adminmodel->regi_card_details();
        $this->load->view('admin_view_data',$result);
        
    }
    public function add_member($s) {
        $data['r_id'] = $s;
       $this->load->view('admin_add_member',$data); 
      
    }
   public function member_validation()
   {
       
     $this->form_validation->set_rules('rid','ration card number ','required');    
       $this->form_validation->set_rules('mname','members name','required');
       $this->form_validation->set_rules('age','age','required');
       $this->form_validation->set_rules('gender','gender','required');
       $this->form_validation->set_rules('occupation','occupation','required');
       $this->form_validation->set_rules('relation','relation with owner','required');
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('admin_add_member');
   
    }
    else
    {
       $data['rid']=$this->input->post('rid');
       $data['mname']=$this->input->post('mname');
       $data['age']=$this->input->post('age');
       $data['gender']=$this->input->post('gender');
       $data['occupation']=$this->input->post('occupation');
       $data['relation']=$this->input->post('relation');
       $this->load->model('adminmodel');
       $result=$this->adminmodel->new_member($data);
       $ration_id=$data['rid'];
       if($result)
       {
           redirect('admin_controller/view_member/' . $ration_id);
           
           #echo "Member inserting ok";
       }
       else 
       {
           echo "errors";
           

       }
    }
    
   }
   public function  view_member($ration_id)
   {
      $data['rid']=$ration_id;
      // var_dump($data);
     $this->load->model('adminmodel');
        $result['member']=$this->adminmodel->view_member_details($data);
        //var_dump($result);
        $this->load->view('admin_view_member_details',$result);  
   }
   public function  delete_member($m_id,$ration_id)
   {
     $data['rid']=$ration_id;
     $data['mid']=$m_id;
     $this->load->model('adminmodel');
     $result['member']=$this->adminmodel->delete_member_details($data);
     redirect('admin_controller/view_member/' . $ration_id);
     // $this->load->view('admin_view_member_details',$result);
   }
   
   public function  delete_user($ration_id)
   {
    $data['rid']=$ration_id;  
    $this->load->model('adminmodel');
     $result['member']=$this->adminmodel->delete_user_details($data);
     redirect('admin_controller/view_cards/' . $ration_id);
   } 
   public function add_shop() {
        
       $this->load->view('admin_add_shop'); 
    }
     public function Shop_validation()
   {
       
     $this->form_validation->set_rules('shopid','ration shop number ','required');    
       $this->form_validation->set_rules('ownername','Ownners name','required');
       $this->form_validation->set_rules('loc','location','required');
       $this->form_validation->set_rules('salesman','salesmans name','required');
       $this->form_validation->set_rules('cards','no. of cards','required');
       $this->form_validation->set_rules('license','license end date','required');
       $this->form_validation->set_rules('dist_id','distributor id','required');
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('admin_add_shop');
   
    }
    else
    {
       $data['shopid']=$this->input->post('shopid');
       $data['ownername']=$this->input->post('ownername');
       $data['loc']=$this->input->post('loc');
       $data['salesman']=$this->input->post('salesman');
       $data['cards']=$this->input->post('cards');
       $data['license']=$this->input->post('license');
        $data['dist_id']=$this->input->post('dist_id');
       $this->load->model('adminmodel');
       $result=$this->adminmodel->new_shop($data);
       $shopid=$data['shopid'];
       if($result)
       {
           redirect('admin_controller/view_shop/' . $shopid);
           
           
          # echo "Shop inserting ok";
       }
       else 
       {
           echo "errors";
           

       }
    }
    
   }
   public function  view_shop($shopid)
   {
      $data['shopid']=$shopid;
      // var_dump($data);
     $this->load->model('adminmodel');
        $result['shopid']=$this->adminmodel->view_shop_details($data);
        //var_dump($result);
        $this->load->view('admin_view_shop_details',$result);  
   }
   public function  shop()
   {
     $this->load->view('shops');   
   }
   
   public function  delete_shop($shop_id)
   {
     $data['shop_id']=$shop_id;
     
     $this->load->model('adminmodel');
     $result['dist']=$this->adminmodel->delete_shop_details($data);
     redirect('admin_controller/view_distributor/' . $shop_id);
     // $this->load->view('admin_view_member_details',$result);
   }
   
   
    public function add_distributor() {
        
       $this->load->view('admin_add_distributor'); 
    }
    public function distributor_validation()
   {
       
     $this->form_validation->set_rules('distid','Distributor_id ','required');    
       $this->form_validation->set_rules('ownersname','Ownners name','required');
       $this->form_validation->set_rules('loc','location','required');
       $this->form_validation->set_rules('address','address','required');
       $this->form_validation->set_rules('no_of_shops','no. of shops','required');
       
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('admin_add_distributor');
   
    }
    else
    {
       $data['distid']=$this->input->post('distid');
       $data['ownersname']=$this->input->post('ownersname');
       $data['loc']=$this->input->post('loc');
       $data['address']=$this->input->post('address');
       $data['no_of_shops']=$this->input->post('no_of_shops');
       $this->load->model('adminmodel');
       $result=$this->adminmodel->new_distributor($data);
       $distid=$data['distid'];
       if($result)
       {
           redirect('admin_controller/view_distributor/' . $distid);
           
           #echo "Distributor inserting ok";
       }
       else 
       {
           echo "errors";
           

       }
    }
    
    
   }
   public function  view_distributor($distid)
   {
      $data['distid']=$distid;
      // var_dump($data);
     $this->load->model('adminmodel');
        $result['dist']=$this->adminmodel->view_distributor_details($data);
        //var_dump($result);
        $this->load->view('admin_view_distributor_details',$result);  
   }
   public function  delete_distributor($dist_id)
   {
     $data['dist_id']=$dist_id;
     
     $this->load->model('adminmodel');
     $result['dist']=$this->adminmodel->delete_distributor_details($data);
     redirect('admin_controller/view_distributor/' . $dist_id);
     // $this->load->view('admin_view_member_details',$result);
   }
   
   public function allotmentsitem()
   {
       $this->load->view('admin_allotments');
   }
    public function allotmentitem_validation()
   {
       
     $this->form_validation->set_rules('itemcode','Item code ','required');    
       $this->form_validation->set_rules('cardtype','Card type','required');
       $this->form_validation->set_rules('qty','Quantity','required');
       $this->form_validation->set_rules('price','Price','required');
       
       
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('admin_allotments');
   
    }
    else
    {
       $data['itemcode']=$this->input->post('itemcode');
       $data['cardtype']=$this->input->post('cardtype');
       $data['qty']=$this->input->post('qty');
       $data['price']=$this->input->post('price');
      
       $this->load->model('adminmodel');
       $result=$this->adminmodel->allotments($data);
       $id=$data['itemcode'];
       if($result)
       {
           redirect('admin_controller/view_allotments/' . $id);
           
          // echo "Distributor inserting ok";
       }
       else 
       {
           echo "errors";
           

       }
    }
    
    
   }
   public function allot_shops() {
       $this->load->model('adminmodel');
       $result['shop']=$this->adminmodel->shop();
       $result['item']=$this->adminmodel->item();
       
        $this->load->view('admin_allotment_shop',$result);
   }
   public function allotshop_validation()
  {
      $this->form_validation->set_rules('shop','shop ID ','required');    
       $this->form_validation->set_rules('item','item ','required');
       
      
      
       if ($this->form_validation->run()==FALSE)
       {
          $this->load->view('admin_allotment_shop');
    }
    else
    {
       $data['shop']=$this->input->post('shop');
       $data['item']=$this->input->post('item');
      
      
       $this->load->model('adminmodel');
       $result=$this->adminmodel->shop_allot($data);
              if($result)
       {
           //redirect('admin_controller/admin_view_shops_allot/' . $id);
           
           echo " inserting ok";
       }
       else 
       {
          // echo "errors";
      $this->load->view('admin_allotment_shop');     

       }
  }
  }
   
    public function add_dist_shop() {
        
        $this->load->model('adminmodel');
       $result['dist_id']=$this->adminmodel->view_dist();
       $result['shop']=$this->adminmodel->view_shop();
       $this->load->view('admin_add_dist_shops',$result);
       
    }
   public function  view_allotments($id)
   {
      $data['id']=$id;
      // var_dump($data);
     $this->load->model('adminmodel');
        $result['id']=$this->adminmodel->view_allotment_details($data);
        //var_dump($result);
        $this->load->view('admin_view_allotment_details',$result);  
   }
  public function distshop_validation()
  {
      $this->form_validation->set_rules('distid','distributor ID ','required');    
       $this->form_validation->set_rules('shopid','Ration Shop Number','required');
       
      
      
       if ($this->form_validation->run()==FALSE)
       {
          $this->load->view('admin_add_dist_shops');
    }
    else
    {
       $data['dist_id']=$this->input->post('distid');
       $data['ratio_shop_no']=$this->input->post('shopid');
      
      
       $this->load->model('adminmodel');
       $result=$this->adminmodel->dist_shop_add($data);
              if($result)
       {
           redirect('admin_controller/admin_view_dist_shops/' . $id);
           
           //echo "Distributor inserting ok";
       }
       else 
       {
          // echo "errors";
      $this->load->view('admin_add_dist_shops');     

       }
  }
  }
  public function admin_view_dist_shops()
  {
       $this->load->view('admin_view_distributor_shops');     

      
  }
  

  public function sample() {
        
       $this->load->view('sample'); 
    }
   
     public function design() {
         
         $this->load->view('design'); 
     }
     public function designfooter() {
         
         $this->load->view('footerthemeone'); 
     }
      public function about() {
        
       $this->load->view('about'); 
    }
    
     public function shopown_stock()
    {
       $this->load->view('rationown_stock_updation');  
       
    }
    public function shop_account_view()
    {
        $this->load->model('adminmodel');  
         $res=$this->adminmodel->shop_account();
         
         $result="";
        // var_dump($result);
         if(!empty($res))
         {
             $result['result']=$res;
          
                 echo "fkdjf";
         }
        $this->load->view('admin_view_shop_account',$result);
    }
    public function dist_account_view()
    {
        $this->load->model('adminmodel');  
         $res=$this->adminmodel->dist_account();
       
         $result="";
        // var_dump($result);
         if(!empty($res))
         {
             $result['result']=$res;
         }
        $this->load->view('admin_view_dist_account',$result);
    }
     public function view_dists_shops()
    {
         $this->load->view('dist_view_shops');
         
     }
      public function view_dists_shops1()
    {
          $this->load->model('adminmodel');
          $dist_id= $this->session->userdata('id');
         $res=$this->adminmodel->dist_show_shops($dist_id);
         $result="";
        // var_dump($result);
         if(!empty($res))
         {
             $result['result']=$res;
         }
         
        $this->load->view('dist_view_shopunder',$result);
         
          
      }
        public function view_appointment()
    {
             $this->load->model('adminmodel');
             $res=$this->adminmodel->appointments();
              if(!empty($res))
         {
             $result['result']=$res;
              $this->load->view('admin_view_appointment',$result);
         }
        }
        public function give_appointments($id)
    {
            $user_id['appointment_id']=$id;
            $this->load->view('admin_view_alloc_appointment',$user_id);
            
        }
      
        public function appointment_add_date() {
         
            $data['appointment_id']=$this->input->post('appointment_id');
            $data['date']=$this->input->post('alloc_date');
           // $data['id']=$user_id;
            $this->load->model('adminmodel');
             $res=$this->adminmodel->add_alloc_date($data);
            if(!empty($res))
         {
             echo"sucessfully added";
         }
         else
         {
             echo 'error occured';
        }
        
             
        }
  }
        
         
     
    
    
           
