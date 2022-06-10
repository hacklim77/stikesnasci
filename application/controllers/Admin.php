<?php

    class Admin extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Usermodel');
        }

        public function index()
        {
            $this->form_validation->set_rules('username_admin','Username','required');
			$this->form_validation->set_rules('password_admin','Password','required');
            
            if ($this->form_validation->run() == FALSE) {
                
                $data['title'] = 'Stikes Nasional | Login Administrator';
    
                $this->load->view('admin/templates/i-head',$data);
                $this->load->view('admin/login',$data);
                $this->load->view('admin/templates/i-script.php');
            }
            else{
                
                $username_admin = $this->input->post('username_admin');
                $password_admin = md5($this->input->post('password_admin'));
                $user = $this->db->get_where('admin',['username_admin' => $username_admin])->row_array();
                
                if ($user) {
                    if($user['status'] == 1) {                        
                        if ($password_admin == $user['password_admin']) {                      
                            $data = [
                                'username_admin' => $user['username_admin'],
                                'katagori_admin' => $user['katagori_admin']
                            ];
                            $this->session->set_userdata($user,$data);
                            redirect('dashboard');
                        } else{
                            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Password tidak sesuai!</div>');
                            redirect('admin');
                        }
                    }
                } else{
                    $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Username tidak ada!</div>');
                    redirect('admin');
                }
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('admin');
        }

    }