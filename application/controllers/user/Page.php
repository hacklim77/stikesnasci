<?php

    class Page extends CI_Controller{

        public function __construct()
        {
            parent::__construct();    
            $this->load->model('Informasimodel');
        }

        public function index()
        {   

            $data['judul'] = "Percobaan Judul";
            $data['berita'] = $this->Informasimodel->getberita();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/beranda/index',$data);
            $this->load->view('front/templates/footer');
        }

    }