<?php

    class Humas extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();   
            $this->load->model('Informasimodel');
            $this->load->helper('tgl_indo');
        }

        public function index()
        {
            $data['title'] = 'Humas';
            
            $data['bauk'] = $this->Informasimodel->getHumas();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/bauk/index',$data);
            $this->load->view('front/templates/footer');
        }

        public function Tbl_humas()
        {
            $data['title'] = 'Humas';
            $data['berita'] = $this->Informasimodel->getTblhumas();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/humas/index',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

    }
    