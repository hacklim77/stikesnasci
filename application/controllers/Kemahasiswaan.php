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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/beasiswa';
            $config['total_rows'] = $this->Informasimodel->getbeasiswaCount();
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

            $data['berita'] = $this->Informasimodel->getbeasiswa($config['per_page'],$data['start']);

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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/hibahmhs';
            $config['total_rows'] = $this->Informasimodel->gethibahmhsCount();
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

            $data['berita'] = $this->Informasimodel->gethibahmhs($config['per_page'],$data['start']);

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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/skp';
            $config['total_rows'] = $this->Informasimodel->getskpCount();
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

            $data['berita'] = $this->Informasimodel->getskp($config['per_page'],$data['start']);

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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/seminar';
            $config['total_rows'] = $this->Informasimodel->getseminarwrkCount();
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

            $data['berita'] = $this->Informasimodel->getseminarwrk($config['per_page'],$data['start']);

            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();

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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/ukm';
            $config['total_rows'] = $this->Informasimodel->getukmCount();
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

            $data['berita'] = $this->Informasimodel->getukm($config['per_page'],$data['start']);

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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/organisasi';
            $config['total_rows'] = $this->Informasimodel->getorganisasiCount();
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

            $data['berita'] = $this->Informasimodel->getorganisasi($config['per_page'],$data['start']);

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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/survey';
            $config['total_rows'] = $this->Informasimodel->getsurveyCount();
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

            $data['berita'] = $this->Informasimodel->getsurvey($config['per_page'],$data['start']);

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

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/kemahasiswaan/download';
            $config['total_rows'] = $this->Informasimodel->getdownloadmhsCount();
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

            $data['berita'] = $this->Informasimodel->getdownloadmhs($config['per_page'],$data['start']);

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
    