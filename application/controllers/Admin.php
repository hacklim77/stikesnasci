<?php

    class Admin extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation','session');
            $this->load->model('Usermodel');
        }

        public function index()
        {
           $data['title'] = 'Admin Stikes Nasional';

           $this->load->view('admin/templates/head',$data);
           $this->load->view('admin/templates/sidebar.php');
           $this->load->view('admin/templates/navbar.php');
           $this->load->view('admin/dashboard/index',$data);
           $this->load->view('admin/templates/footer.php');
           $this->load->view('admin/templates/endscript.php');
        }

        public function login()
        {
            $this->form_validation->set_rules('username_admin','Username','required');
			$this->form_validation->set_rules('password_admin','Password','required');
            
            if ($this->form_validation->run() == FALSE) {
                
                $data['title'] = 'Stikes Nasional | Login Administrator';
    
                $this->load->view('admin/templates/i-head',$data);
                $this->load->view('admin/login');
                $this->load->view('admin/templates/i-script.php');
            }
            else{
                $username_admin = $this->input->post('username_admin');
                $password_admin = md5($this->input->post('password_admin'));
                $data_user = $this->Usermodel->getUser($username_admin);
                
                if (count($data_user)>0) {
                    $admin_password = $data_user[0]->password_admin;
                    if ($password_admin == $admin_password) {
                       
                        redirect('admin');
                    } else{
                        $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Password tidak sesuai!</div>');
                        redirect('admin/login');
                    }
                } else{
                    $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Username tidak ada!</div>');
                    redirect('admin/login');
                }
                
                //$this->_islogin();
            }
        }

        /* private function _islogin()
        {
            $username = $this->input->post('username_admin');
            $password = $this->input->post('password_admin');

            $user = $this->db->get_where('admin',['username_admin' => $username])->row_array();
            //var_dump($user);


            if($user['status'] == 1){
                if(password_verify($password, $user['password_admin'])){
                    $data = [
                        'username_admin' => $user['username_admin']
                        //'katagori_admin' => $user['katagori_admin']
                    ];
                    $this->session->set_userdata($user,$data);
                    //var_dump($c);
                    redirect('admin');
                }  else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Password tidak sesuai!</div>');
                    //var_dump($b);
                    redirect('admin/login');
                }
            }  else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Username tidak ada!</div>');
                redirect('admin/login');
            } 
        } */

    }