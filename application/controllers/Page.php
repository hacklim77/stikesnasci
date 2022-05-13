<?php

    class Page extends CI_Controller{

        public function __construct()
        {
            parent::__construct();    
            $this->load->model('Informasimodel');
            $this->load->helper('tgl_indo');
        }

        public function index()
        {   
            $data['berita'] = $this->Informasimodel->getBerita();
            $data['infomhs'] = $this->Informasimodel->getInfomhs();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/beranda/index',$data);
            $this->load->view('front/templates/footer');
        }

    }