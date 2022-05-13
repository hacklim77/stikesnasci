<?php

    class Infokampus extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasimodel');
            $this->load->helper('tgl_indo');   
        }

        public function index()
        {
            $data['title'] = 'Info Kampus';

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/infokampus/index';
            $config['total_rows'] = $this->Informasimodel->getInfomhsCount();
            $config['per_page'] = 10;


            $config['full_tag_open'] = '<nav class=nav-page><ul class="pagination">';
            $config['full_tag_close'] = '</ul></nav>';

            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
            
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            
            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
            
            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';
            
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');

            $this->pagination->initialize($config);
            
            $data['start'] = $this->uri->segment(3);
            //$data['mytable'] = $this->Mytable_model->getMytable($config['per_page'],$data['start']);
            $data['infomhs'] = $this->Informasimodel->getInfomhsAll($config['per_page'],$data['start']);
            $data['berita'] = $this->Informasimodel->getBeritaAll(5,0);

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/infokampus/index',$data);
            $this->load->view('front/templates/footer');
        }
    }
    