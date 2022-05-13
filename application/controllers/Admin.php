<?php

    class Admin extends CI_Controller{

        public function __construct()
        {
            parent::__construct();   
        }

        public function index()
        {
           $this->load->view('admin/templates/head.php');
           $this->load->view('admin/templates/sidebar.php');
           $this->load->view('admin/templates/navbar.php');
           $this->load->view('admin/templates/footer.php');
           $this->load->view('admin/templates/endscript.php');
        }

    }