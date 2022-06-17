<?php

    class Maps extends CI_Controller{

        public function index()
        {
            $data['title'] = 'Lokasi Stikes Nasional';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/beranda/maps',$data);
            $this->load->view('front/templates/footer');
        }

    }