<?php

    class Kemahasiswaan extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasimodel');   
        }
        
        public function index()
        {
            $data['title'] = 'Kemahasiswaan';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/kemahasiswaan/index',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_beasiswa()
        {
            $data['title'] = 'Kemahasiswaan | Beasiswa';
            $data['berita'] = $this->Informasimodel->getTbl_beasiswa();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-beasiswa',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_hibahmhs()
        {
            $data['title'] = 'Kemahasiswaan | Hibah Mahasiswa';
            $data['berita'] = $this->Informasimodel->getTbl_hibahmhs();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-hibahmhs',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_skp()
        {
            $data['title'] = 'Kemahasiswaan | SKP';
            $data['berita'] = $this->Informasimodel->getTbl_skp();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-skp',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_alumni()
        {
            $data['title'] = 'Kemahasiswaan | Alumni';
            $data['berita'] = $this->Informasimodel->getTbl_alumni();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-alumni',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_seminar()
        {
            $data['title'] = 'Kemahasiswaan | Seminar Workshop';
            $data['berita'] = $this->Informasimodel->getTbl_seminarWorkshop();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-seminar',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_ukm()
        {
            $data['title'] = 'Kemahasiswaan | UKM';
            $data['berita'] = $this->Informasimodel->getTbl_ukm();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-ukm',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_organisasi()
        {
            $data['title'] = 'Kemahasiswaan | Organisasi';
            $data['berita'] = $this->Informasimodel->getTbl_organisasi();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-organisasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_survey()
        {
            $data['title'] = 'Kemahasiswaan | Survey Mahasiswa';
            $data['berita'] = $this->Informasimodel->getTbl_surveymhs();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-survey',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_download()
        {
            $data['title'] = 'Kemahasiswaan | Download';
            $data['berita'] = $this->Informasimodel->getTbl_downloadmhs();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-download',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }
    }
    