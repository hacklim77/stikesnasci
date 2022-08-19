<?php

    class Jarak extends CI_Controller{

        public function __construct()
        {
            parent :: __construct();
            $this->load->model('M_jarak');   
        }

        public function index($unit='K')
        {            
            //$data['hitung'] = $this->M_jarak->hitung($unit);
            $data['dist'] = ['-7.59294198430983','110.81489362107249'];
            $data['hitung'] = $this->M_jarak->hitung($unit);
            $this->load->view('jarak',$data);
        }

        public function proses($unit='K')
        {
            
            
            $data['hitung'] = $this->M_jarak->hitung($unit);
            $this->load->view('hasil',$data);

            //redirect('jarak',$data);
            //die;

        }

    }