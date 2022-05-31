<?php

    class Lppm extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasimodel');   
        }

        public function index()
        {
            $data['title'] = 'LPPM';
            $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/lppm/index',$data);
            $this->load->view('front/templates/footer');
        }
        
        public function tbl_Lppminfo()
        {
            $data['title'] = 'LPPM Informasi';
            $data['berita'] = $this->Informasimodel->getTbl_Lppminformasi();
            $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-informasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_Lppmpkm()
        {
            $data['title'] = 'LPPM PKM';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmpkm();
            $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-pkm',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_Lppmpenelitian()
        {
            $data['title'] = 'LPPM Penelitian';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmpenelitian();
            $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-penelitian',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_Lppmagenda()
        {
            $data['title'] = 'LPPM Agenda';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmagenda();
            $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-agenda',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function tbl_Lppmjurnal()
        {
            $data['title'] = 'LPPM Jurnal';
            $data['berita'] = $this->Informasimodel->getTbl_Lppmjurnal();
            $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/lppm/d-jurnal',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }
    
    }
    