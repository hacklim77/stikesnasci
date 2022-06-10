<?php

    class Dashboard extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation','session');
            $this->load->model('Usermodel');
            
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            } 
        }

        public function index()
        {
           if ($this->session->userdata('katagori_admin') == 0) {
               
               $data['title'] = 'Admin Stikes Nasional';
               //$data['user'] = $this->Usermodel->getAll();
               $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
               
               $this->load->view('admin/templates/head',$data);
               $this->load->view('admin/templates/sidebar.php');
               $this->load->view('admin/templates/navbar.php',$data);
               $this->load->view('admin/dashboard/index',$data);
               $this->load->view('admin/templates/footer.php');
               $this->load->view('admin/templates/endscript.php');
            }
               
        }
    }