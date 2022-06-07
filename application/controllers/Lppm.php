<?php

    class Lppm extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('tgl_indo','form','url');
            $this->load->model('Informasimodel');   
        }

        public function index()
        {
            $data['title'] = 'LPPM';
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/lppm/menu',$data);
            $this->load->view('front/lppm/index',$data);
            $this->load->view('front/templates/footer');
        }
        
        public function informasi()
        {
            $data['title'] = 'Informasi';
            //$data['berita'] = $this->Informasimodel->get_Lppminformasi();

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/lppm/informasi';
            $config['total_rows'] = $this->Informasimodel->getlppminfCount();
            $config['per_page'] = 10;


            $config['full_tag_open'] = '<nav class="nav-page"><ul class="pagination">';
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

            $data['berita'] = $this->Informasimodel->getlppminf($config['per_page'],$data['start']);
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/lppm/indikator',$data);
            $this->load->view('front/lppm/menu',$data);
            $this->load->view('front/lppm/informasi',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_Lppminfo()
        {
            $data['title'] = 'LPPM Informasi';
            $data['berita'] = $this->Informasimodel->getTbl_Lppminformasi();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-informasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function pkm()
        {
            $data['title'] = 'Pengabdian Kepada Masyarakat';
            $data['berita'] = $this->Informasimodel->get_Lppmpkm();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/lppm/indikator',$data);
            $this->load->view('front/lppm/menu',$data);
            $this->load->view('front/lppm/pkm',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_Lppmpkm()
        {
            $data['title'] = 'LPPM PKM';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmpkm();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-pkm',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function penelitian()
        {
            $data['title'] = 'Penelitian';
            $data['berita'] = $this->Informasimodel->get_Lppmpenelitian();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/lppm/indikator',$data);
            $this->load->view('front/lppm/menu',$data);
            $this->load->view('front/lppm/penelitian',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_Lppmpenelitian()
        {
            $data['title'] = 'LPPM Penelitian';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmpenelitian();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-penelitian',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function agenda()
        {
            $data['title'] = 'Agenda';
            $data['berita'] = $this->Informasimodel->get_Lppmagenda();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/lppm/indikator',$data);
            $this->load->view('front/lppm/menu',$data);
            $this->load->view('front/lppm/agenda',$data);
            $this->load->view('front/templates/footer');
        }
        
        public function tbl_Lppmagenda()
        {
            $data['title'] = 'LPPM Agenda';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmagenda();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-agenda',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function jurnal()
        {
            $data['title'] = 'Jurnal';
            $data['berita'] = $this->Informasimodel->get_Lppmjurnal();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/lppm/indikator',$data);
            $this->load->view('front/lppm/menu',$data);
            $this->load->view('front/lppm/jurnal',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_Lppmjurnal()
        {
            $data['title'] = 'LPPM Jurnal';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmjurnal();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-jurnal',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }
    
    }
    