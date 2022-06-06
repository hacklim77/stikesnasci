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
            $data['berita'] = $this->Informasimodel->get_Lppminformasi();
            
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
    