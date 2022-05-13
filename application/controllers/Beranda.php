<?php

    class Beranda extends CI_Controller{


        public function index()
        {
            $this->load->view('front/templates/header.php');
            $this->load->view('front/templates/menu.php');
            $this->load->view('front/beranda/index.php');
            $this->load->view('front/templates/footer.php');
        }

    }