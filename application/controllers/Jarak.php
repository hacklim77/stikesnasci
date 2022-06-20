<?php

    class Jarak extends CI_Controller{

        public function __construct()
        {
            parent :: __construct();
            $this->load->model('M_jarak');   
        }

        public function index()
        {            
            //$data['hitung'] = $this->M_jarak->hitung($unit);

            $this->load->view('jarak');
        }

        public function hasil($unit='K')
        {
            $data['hitung'] = $this->M_jarak->hitung($unit);

            $this->load->view('hasil',$data);
        }

    }