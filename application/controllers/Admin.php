<?php

    class Admin extends CI_Controller{

        public function __construct()
        {
            parent::__construct();   
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

    }