<?php

    class Berita extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasimodel');   
            $this->load->helper('tgl_indo');
            $this->load->library('form_validation');   
        }

        public function index()
        {
            $data['title'] = 'Berita';

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/berita/index';
            $config['total_rows'] = $this->Informasimodel->getBeritaCount();
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

            $data['berita'] = $this->Informasimodel->getBeritaAll($config['per_page'],$data['start']);
            $data['infomhs'] = $this->Informasimodel->getInfomhs();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/berita/index',$data);
            $this->load->view('front/templates/footer');
        }

        public function tblBerita()
        {
            $data['title'] = 'Admin Stikes Nasional | Berita';

            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/berita/index');
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');

        }

        public function dataBerita()
        {
            $data = $this->Informasimodel->getTblBerita();
            echo json_encode($data);
        }

        public function tambahBerita()
        {
            $data['title'] = 'Admin Stikes Nasional | Berita';

            if ($this->form_validation->run('simpan') == FALSE) {
                
                $this->load->view('admin/templates/head',$data);
                $this->load->view('admin/templates/sidebar.php');
                $this->load->view('admin/templates/navbar.php');
                $this->load->view('admin/berita/tambah');
                $this->load->view('admin/templates/footer.php');
                $this->load->view('admin/templates/endscript.php');
            } 
            else{
            $this->Informasimodel->insertBerita();
            //echo json_encode($insert);
            redirect('berita/tblBerita');
            }    
        }
    }
    