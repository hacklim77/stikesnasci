<?php

    class Cdc extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'CDC';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/cdc/index',$data);
            $this->load->view('front/templates/footer');
        }
    }
    