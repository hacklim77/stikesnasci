<?php

    class Kemahasiswaan extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('tgl_indo','form','url');
            $this->load->model('Informasimodel');   
        }
        
        public function index()
        {
            $data['title'] = 'Kemahasiswaan';
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarside();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/index',$data);
            $this->load->view('front/templates/footer');
        }

        public function beasiswa()
        {
            $data['title'] = 'Beasiswa';
            $data['berita'] = $this->Informasimodel->get_beasiswa();
            $data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/beasiswa',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_beasiswa()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | Beasiswa';
            $data['berita'] = $this->Informasimodel->getTbl_beasiswa();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-beasiswa',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function hibahmhs()
        {
            $data['title'] = 'Hibah Mahasiswa';
            $data['berita'] = $this->Informasimodel->get_hibahmhs();
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/hibahmhs',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_hibahmhs()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | Hibah Mahasiswa';
            $data['berita'] = $this->Informasimodel->getTbl_hibahmhs();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-hibahmhs',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function skp()
        {
            $data['title'] = 'SKP';
            $data['berita'] = $this->Informasimodel->get_skp();
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarside();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/skp',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_skp()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | SKP';
            $data['berita'] = $this->Informasimodel->getTbl_skp();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-skp',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_alumni()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | Alumni';
            $data['berita'] = $this->Informasimodel->getTbl_alumni();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-alumni',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function seminar()
        {
            $data['title'] = 'Seminar Workshop';
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['berita'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/seminar',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_seminar()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | Seminar Workshop';
            $data['berita'] = $this->Informasimodel->getTbl_seminarWorkshop();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-seminar',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function ukm()
        {
            $data['title'] = 'Unit Kegiatan Mahasiswa';
            $data['berita'] = $this->Informasimodel->get_ukm();
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarside();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/ukm',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_ukm()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | UKM';
            $data['berita'] = $this->Informasimodel->getTbl_ukm();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-ukm',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function organisasi()
        {
            $data['title'] = 'Organisasi';
            $data['berita'] = $this->Informasimodel->get_organisasi();
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarside();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/organisasi',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_organisasi()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | Organisasi';
            $data['berita'] = $this->Informasimodel->getTbl_organisasi();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-organisasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function survey()
        {
            $data['title'] = 'Survey Layanan Kemahasiswaan';
            $data['berita'] = $this->Informasimodel->get_surveymhs();
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarside();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/survey',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_survey()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | Survey Mahasiswa';
            $data['berita'] = $this->Informasimodel->getTbl_surveymhs();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-survey',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function download()
        {
            $data['title'] = 'Download';
            $data['berita'] = $this->Informasimodel->get_downloadmhs();
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarside();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/kemahasiswaan/indikator',$data);
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/download',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_download()
        {
            if(!$this->session->userdata('username_admin')){
                redirect('admin');
            }  

            $data['title'] = 'Kemahasiswaan | Download';
            $data['berita'] = $this->Informasimodel->getTbl_downloadmhs();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/kemahasiswaan/d-download',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function detailBerita($judul_berita)
        {
            $judul= urldecode($judul_berita);
            $data['title'] = 'Berita';
            $berita = $this->Informasimodel->detailBerita($judul)->result();
            $data['berita'] = $berita;
            $data['listberita'] = $this->Informasimodel->getBeritaside();
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/berita/detailberita',$data);
            $this->load->view('front/templates/footer');
        }
    }
    