<?php

    class Cdc extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('tgl_indo','form','url');
            $this->load->model('Informasimodel');   
        }

        public function index()
        {
            $data['title'] = 'CDC';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/index',$data);
            $this->load->view('front/templates/footer');
        }

        public function Roc()
        {
            $data['title'] = 'Recruitment on Campus';
            $data['berita'] = $this->Informasimodel->get_roc();
            //$data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/cdc/indikator',$data);
            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/roc',$data);
            $this->load->view('front/templates/footer');
        }

        public function Tbl_roc()
        {
            $data['title'] = 'CDC | Recruitmen on Campus';
            $data['berita'] = $this->Informasimodel->getTbl_roc();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/roc',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tracerStudy()
        {
            $data['title'] = 'Tracer Study';
            $data['berita'] = $this->Informasimodel->get_tracerStudy();
            //$data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/cdc/indikator',$data);
            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/tracer-std',$data);
            $this->load->view('front/templates/footer');
        }

        public function Tbl_tracerStudy()
        {
            $data['title'] = 'CDC | Tracer Study';
            $data['berita'] = $this->Informasimodel->getTbl_tracerStudy();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/tracer-study',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function Informasi()
        {
            $data['title'] = 'Informasi';
            
            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/cdc/Informasi';
            $config['total_rows'] = $this->Informasimodel->get_informCount();
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

            $data['berita'] = $this->Informasimodel->get_inform($config['per_page'],$data['start']);

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/cdc/indikator',$data);
            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/informasi',$data);
            $this->load->view('front/templates/footer');
        }

        public function Tbl_informasi()
        {
            $data['title'] = 'CDC | Informasi';
            $data['berita'] = $this->Informasimodel->getTbl_inform();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/informasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function Benchmarking()
        {
            $data['title'] = 'Benchmarking';
            $data['berita'] = $this->Informasimodel->get_benchmarking();
            //$data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/cdc/indikator',$data);
            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/benchmarking',$data);
            $this->load->view('front/templates/footer');
        }

        public function Tbl_benchmarking()
        {
            $data['title'] = 'CDC | Benchmarking';
            $data['berita'] = $this->Informasimodel->getTbl_benchmarking();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/benchmarking',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function cdcLoker()
        {
            $data['title'] = 'Lowongan Pekerjaan';

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/cdc/cdcloker';
            $config['total_rows'] = $this->Informasimodel->getcdcCount();
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

            $data['berita'] = $this->Informasimodel->getcdcAll($config['per_page'],$data['start']);

            //$data['berita'] = $this->Informasimodel->get_cdcloker();
            //$data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/cdc/indikator',$data);
            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/loker',$data);
            $this->load->view('front/templates/footer');
        }

        public function Tbl_cdcloker()
        {
            $data['title'] = 'CDC | CDC Loker';
            $data['berita'] = $this->Informasimodel->getTbl_cdcloker();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/cdc-loker',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function download()
        {
            $data['title'] = 'Download';
            $data['berita'] = $this->Informasimodel->get_downloadcdc();
            //$data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/cdc/indikator',$data);
            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/download',$data);
            $this->load->view('front/templates/footer');
        }

        public function Tbl_download()
        {
            $data['title'] = 'CDC | Download';
            $data['berita'] = $this->Informasimodel->getTbl_downloadcdc();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/download',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        /* public function max()
        {
            $count = $this->Informasimodel->get_informc();
            echo $count;
        } */

    }
    