<?php

    class Akademik extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Akademik';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/akademik/index',$data);
            $this->load->view('front/templates/footer');
        }

        
    }
    