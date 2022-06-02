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

        public function Tbl_bauk()
        {
            $data['title'] = 'BAUK';
            $data['berita'] = $this->Informasimodel->getTblbauk();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/bauk/bauk',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

    }
    