<?php

    class Bauk extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();   
            $this->load->model('Informasimodel');
            $this->load->helper('tgl_indo');
        }

        public function index()
        {
            $data['title'] = 'BAUK';
            
            $data['bauk'] = $this->Informasimodel->getBauk();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/bauk/index',$data);
            $this->load->view('front/templates/footer');
        }

    }
    