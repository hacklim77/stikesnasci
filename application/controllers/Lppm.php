<?php

    class Lppm extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'LPPM';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/lppm/index',$data);
            $this->load->view('front/templates/footer');
        }
    }
    