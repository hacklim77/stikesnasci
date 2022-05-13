<?php

    class Profile extends CI_Controller{

        public function index()
        {
            $data['title'] = 'Profile';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/profile/index',$data);
            $this->load->view('front/templates/footer');
        }

    }