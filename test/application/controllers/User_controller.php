<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_controller
 *
 * @author user
 */
class User_controller extends CI_Controller {
    //put your code here
    public function guest() {
         $this->load->view('guestuser'); 
         
        
    }
     public function logout()
    {
         $this->session->unset_userdata('id');
         
      $this->load->view('guestuser');   
      
      
    }
    public function guest_validation(){
        $this->form_validation->set_rules('name','name ','required');
        $this->form_validation->set_rules('adhaar','adhaar ','required');
       $this->form_validation->set_rules('gender','gender','required');
       $this->form_validation->set_rules('mobile','mobile','required'); 
       $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('username','username','required');
         $this->form_validation->set_rules('password','password','required');
       
       
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('guestuser');
   
    }
    else
    {
       $data['name']=$this->input->post('name');
       $data['adhaar']=$this->input->post('adhaar');
       $data['gender']=$this->input->post('gender');
       $data['mobile']=$this->input->post('mobile');
       $data['email']=$this->input->post('email');
       $data['username']=$this->input->post('username');
       $data['password']=$this->input->post('password');


      
       $this->load->model('user_model');
       $result=$this->user_model->guest_registration($data);
      // $id=$data['itemcode'];
       if($result)
       {
          // redirect('user_controller/view_/' . $id);
           
           echo "Distributor inserting ok";
       }
       else 
       {
           echo "errors";
           

       }
    }
    
    
    }
    public function login()
    {
      $this->load->view('user_login');   
      
      
    }
    public function loginvalidation()
    {
               

       $this->form_validation->set_rules('Username','UserName ','required');    
       $this->form_validation->set_rules('Password','Password','required');
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('user_login');
       }
 else {
          $data['uname']=$this->input->post('Username');
       $data['password']=$this->input->post('Password'); 
       $this->load->model('user_model');
       $result=$this->user_model->login($data);
       if(!empty($result))
       {
          
           foreach ($result as $value)
           {
                
                $user['id'] = $value->rg_id	;
                $user['uname']=$value->rg_username;
                $user['password']=$value->rg_password;
           }
            $uid = $user['id'];
            var_dump($uid);
           $this->session->set_userdata('id',$uid);
           var_dump($this->session->set_userdata('id',$uid));
          $this->load->view('guestuser_profile',$user);
           
       }
       else 
       {
           $this->load->view('user_login');

       }
       }
    }
    public function new_card() {
        
       $this->load->view('new_card'); 
    }
    
    public function card_validation()
    {
       
       $this->form_validation->set_rules('ownername','ownername ','required');    
       $this->form_validation->set_rules('loc','owners name','required');
       $this->form_validation->set_rules('panchayath','Shop number','required');
       $this->form_validation->set_rules('members','members','required');
       $this->form_validation->set_rules('vehicle','vehicle','required');
       $this->form_validation->set_rules('area','area','required');
        $this->form_validation->set_rules('income','income','required');
         $this->form_validation->set_rules('occupation','occupation','required');
         $this->form_validation->set_rules('gas','gas','required');
          $this->form_validation->set_rules('electricity','electricity','required');
           
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('user_newcard');
   
    }
    else
    {
       $data['ownername']=$this->input->post('ownername');
       $data['loc']=$this->input->post('loc');
       $data['panchayath']=$this->input->post('panchayath');
       $data['members']=$this->input->post('members');
       $data['vehicle']=$this->input->post('vehicle');
       $data['area']=$this->input->post('area');
        $data['income']=$this->input->post('income');
         $data['occupation']=$this->input->post('occupation');
          $data['gas']=$this->input->post('gas');
           $data['electricity']=$this->input->post('electricity');
       $this->load->model('user_model');
       $result['cards']=$this->user_model->newcard($data);
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
    public function upload_application()
    {
               $this->load->view('user_upload_application');

        
    }
public function user_application_validation()
{
    
                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 100000000000000000000000000000000000;
                $config['max_width']            = 1024000000000000000000000000000000;
                $config['max_height']           = 76800000000000000000000000000000000000;

                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('application_up'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('user_upload_application', $error);
                }
                else
                {
                     $uid=$this->session->set_userdata('id');
                        $data =$this->upload->data();
                    $application['image'] = $data['file_name'];
                    $application['id']=$uid;
                     $this->load->model('user_model');
                    $this->user_model->add_application($application);
                     $this->load->view('user_upload_application_sucess');
                    
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
   public function appointment() {
       
       $this->load->view('user_appointment');
      
        
    }
     public function newappointment()
    {
          if( $this->session->has_userdata('id'))
          {
               $this->session->set_userdata('id', $data['uid']);
               
          }
            else {
                echo "Error";
            }
          $this->load->model('adminmodel');
          $res=$this->adminmodel->newappointment($data);
             if($res)
       {
        echo " inserting ok";
       }
       else 
       {
           echo "errors";
      //$this->load->view('admin_allotment_shop');     

       }
  
}
}
