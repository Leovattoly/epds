<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of regi_controller
 *
 * @author CLab18
 */
class regi_controller extends CI_Controller {
    
    //put your code here
    public function index()
    {
        $this->load->view('regi_view');
        
    }
    public function login()
    {
      $this->load->view('login');   
      
      
    }
     public function loginvalidation()
    {
               

       $this->form_validation->set_rules('Username','UserName ','required');    
       $this->form_validation->set_rules('Password','Password','required');
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('login');
       }
 else {
          $data['uname']=$this->input->post('Username');
       $data['password']=$this->input->post('Password'); 
       $this->load->model('regimodel');
       $result=$this->regimodel->log($data);
       if(!empty($result))
       {
          
           foreach ($result as $value)
           {
                
                $user['id'] = $value->id;
                $user['uname']=$value->username;
                $user['email']=$value->email;
                $user['phone']=$value->phone;
                
                
           }
           $uid = $user['id'];
           $uid=$this->session->set_userdata('id',$uid);
          $this->load->view('user_profile',$user);
           
       }
       else 
       {
           $this->load->view('login');

       }
       }
    }
    
    
    public function regivalidation()
    {
       
       $this->form_validation->set_rules('Username','UserName ','required');    
       $this->form_validation->set_rules('Password','Password','required');
       $this->form_validation->set_rules('Email','Email','required');
       $this->form_validation->set_rules('Phone','phone number','required');
      
     
       if ($this->form_validation->run()==FALSE)
       {
           $this->load->view('login');
   
    }
    else
    {
       $data['uname']=$this->input->post('Username');
       $data['password']=$this->input->post('Password');
       $data['email']=$this->input->post('Email');
       $data['phone']=$this->input->post('Phone');
       $this->load->model('regimodel');
       $result=$this->regimodel->newuser($data);
       if($result)
       {
           echo "successfull";
       }
       else 
       {
           echo "errors";
           

       }
    }
    }
    public function loginfun()
    {
        if($this->session->has_userdata('id'))
        {
            $u_id = $this->session->userdata('id');
            $this->load->model('regimodel');
            $result = $this->regimodel->getUserDetails($u_id);
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
                        $user_data['u_name']= $res->username;
                        $user_data['u_email']= $res->email;
                        $user_data['u_phone']= $res->phone;
                   }
                     
                   $this->load->view('user_profile',$user_data);
              }
           
        }
        else {
            $this->load->view('login');
        }
	
    }
    
}
