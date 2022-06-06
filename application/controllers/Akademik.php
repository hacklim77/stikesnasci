<?php

    class Akademik extends CI_Controller
    {   
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasimodel');   
            $this->load->helper('tgl_indo','form','url'); 
        }

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

        public function DIII_Farmasi()
        {
            $data['title'] = 'DIII Farmasi';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d3farmasi',$data);
            $this->load->view('front/templates/footer');
        }

        public function DIII_TLM()
        {
            $data['title'] = 'DIII Teknologi Laboratorium Medis';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d3tlm',$data);
            $this->load->view('front/templates/footer');
        }

        public function DIV_Fisioterapi()
        {
            $data['title'] = 'DIV Fisioterapi';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d4fisio',$data);
            $this->load->view('front/templates/footer');
        }
        
        public function DIV_TLM()
        {
            $data['title'] = 'DIV Teknologi Laboratorium Medis';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d4tlm',$data);
            $this->load->view('front/templates/footer');
        }
        
        public function SI_Farmasi()
        {
            $data['title'] = 'SI Farmasi';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/s1farmasi',$data);
            $this->load->view('front/templates/footer');
        }
        
    }
    