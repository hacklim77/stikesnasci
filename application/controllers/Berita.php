<?php

    class Berita extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasi_model');   
            $this->load->helper('tgl_indo');   
        }

        public function index()
        {
            $data['title'] = 'Berita';
        }
    }
    