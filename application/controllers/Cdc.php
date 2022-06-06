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
            $data['berita'] = $this->Informasimodel->get_inform();
            //$data['seminar'] = $this->Informasimodel->get_seminarWorkshop();

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
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/benchmarking',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function cdcLoker()
        {
            $data['title'] = 'CDC Loker';
            $data['berita'] = $this->Informasimodel->get_cdcloker();
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
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/cdc/download',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

    }
    