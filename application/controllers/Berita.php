<?php

    class Berita extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasimodel');   
            $this->load->helper('tgl_indo','form','url');
            $this->load->library('form_validation');
            $this->load->model('Usermodel');
        }

        public function index()
        {
            $data['title'] = 'Berita';

            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/stikesnas/berita/index';
            $config['total_rows'] = $this->Informasimodel->getBeritaCount();
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
            cek_not_login();

            $data['title'] = 'Admin Stikes Nasional | Berita';
            $data['berita'] = $this->Informasimodel->getTblBerita();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();

            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/berita/index',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');

        }

        public function tblInfomhs()
        {
            cek_not_login();  
            
            $data['title'] = 'Admin Stikes Nasional | Berita';
            $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];
            $data['berita'] = $data = $this->Informasimodel->getTblinfomhs();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/berita/infomhs',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');

        }

        public function tambahBerita()
        {
            $this->form_validation->set_rules('judul_berita','Judul Berita','required');
			$this->form_validation->set_rules('isi_berita','Isi','required');

            if ($this->form_validation->run() === FALSE) {
                $data['title'] = 'Admin Stikes Nasional | Tambah';

                $data['tipe'] = ['berita','info_mhs','bauk','humas', //0,1,2,3
                'lppm_informasi','lppm_pkm','lppm_agenda','lppm_penelitian','jurnal', //4,5,6,7,8
                'beasiswa','hibah_mahasiswa','skp','alumni','seminar_workshop','ukm','organisasi','survey_kemahasiswaan','download_mhs', //9,10,11,12,13,14,15,16,17
                'roc','tracer_study','informasi','benchmarking','cdc_loker','download_cdc' //18,19,20,21,22,23
                ];

                $data['prodi'] = ["d3_farmasi","d3_tlm","d4_fisioterapi","d4_tlm","s1_farmasi"]; //0,1,2,3,4
                $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();    

                $this->load->view('admin/templates/head',$data);
                $this->load->view('admin/templates/sidebar.php');
                $this->load->view('admin/templates/navbar.php');
                
                if ($_SERVER['HTTP_REFERER'] == base_url('berita/tblBerita')) 
                {
                    $this->load->view('admin/berita/tambah',$data);
                } 
                elseif ($_SERVER['HTTP_REFERER'] == base_url('berita/tblInfomhs')) 
                {
                    $this->load->view('admin/informasi/tambah',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('lppm/tbl_lppminfo')) 
                {
                    $this->load->view('admin/lppm/t-informasi',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('lppm/tbl_lppmpkm')) 
                {
                    $this->load->view('admin/lppm/t-pkm',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('lppm/tbl_lppmagenda')) 
                {
                    $this->load->view('admin/lppm/t-agenda',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('lppm/tbl_lppmpenelitian')) 
                {
                    $this->load->view('admin/lppm/t-penelitian',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('lppm/tbl_lppmjurnal')) 
                {
                    $this->load->view('admin/lppm/t-jurnal',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_beasiswa')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-beasiswa',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_hibahmhs')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-hibahmhs',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_skp')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-skp',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_alumni')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-alumni',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_seminar')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-seminar',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_ukm')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-ukm',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_organisasi')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-organisasi',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_survey')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-survey',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/tbl_download')) 
                {
                    $this->load->view('admin/kemahasiswaan/t-download',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/tbl_roc')) 
                {
                    $this->load->view('admin/cdc/t-roc',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/tbl_tracerStudy')) 
                {
                    $this->load->view('admin/cdc/t-tracerstd',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/tbl_informasi')) 
                {
                    $this->load->view('admin/cdc/t-informasi',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/tbl_benchmarking')) 
                {
                    $this->load->view('admin/cdc/t-benchmarking',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/tbl_cdcloker')) 
                {
                    $this->load->view('admin/cdc/t-cdcloker',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/tbl_download')) 
                {
                    $this->load->view('admin/cdc/t-download',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('bauk/Tbl_bauk')) 
                {
                    $this->load->view('admin/bauk/t-bauk',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('humas/Tbl_humas')) 
                {
                    $this->load->view('admin/humas/t-humas',$data);
                }
                
                $this->load->view('admin/templates/footer.php');
                $this->load->view('admin/templates/endscript.php');
            } 
            else{
                $this->Informasimodel->insertBerita();
                //var_dump($q);
               /*  $this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil!</strong> Ditambahkan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'); */
                echo "<script>
                window.location=history.go(-2);
                </script>";
            }    
        }

        public function editBerita($id=null)
        {
            $this->form_validation->set_rules('judul_berita','Judul Berita','required');
			$this->form_validation->set_rules('isi_berita','Isi','required');
			/* $this->form_validation->set_rules('prodi','prodi','required'); */    

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Admin Stikes Nasional | Edit';
                $data['berita'] = $this->Informasimodel->getBeritaID($id)->row_array();
                $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();

                $this->load->view('admin/templates/head',$data);
                $this->load->view('admin/templates/sidebar.php');
                $this->load->view('admin/templates/navbar.php');
                $this->load->view('admin/berita/edit',$data);
                $this->load->view('admin/templates/footer.php');
                $this->load->view('admin/templates/endscript.php');
            } 
            else{
                $this->Informasimodel->updateBerita();
                echo "<script>
                window.location=history.go(-2);
                </script>";
            }    
        }

        public function deleteBerita($id)
        {
            $data['title'] = 'Admin Stikes Nasional | Berita';
            $data['berita'] = $this->Informasimodel->getTblBerita();
            $data['admin'] = $this->db->get_where('admin',['nama_admin' => $this->session->userdata('nama_admin')])->row_array();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/berita/index',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');

            $this->Informasimodel->delBerita($id);
            redirect($_SERVER['HTTP_REFERER']);
        }

        public function detailBerita($judul_berita)
        {
            $judul= urldecode($judul_berita);
            $data['title'] = 'Detail Artikel';
            $berita = $this->Informasimodel->detailBerita($judul)->result();
            $data['berita'] = $berita;
            $data['listberita'] = $this->Informasimodel->getBeritaside();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            
            if ($_SERVER['HTTP_REFERER'] == base_url('lppm/penelitian') || $_SERVER['HTTP_REFERER'] == base_url('lppm/pkm') || $_SERVER['HTTP_REFERER'] == base_url('lppm/informasi') || $_SERVER['HTTP_REFERER'] == base_url('lppm/agenda') ) {
                $this->load->view('front/templates/indikatorlppm',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/beasiswa') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/hibahmhs') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/skp') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/alumni') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/seminar') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/ukm') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/organisasi') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/survey') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/download')) {
                $this->load->view('front/templates/indikatormhs',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/roc') || $_SERVER['HTTP_REFERER'] == base_url('cdc/tracerStudy') || $_SERVER['HTTP_REFERER'] == base_url('cdc/informasi') || $_SERVER['HTTP_REFERER'] == base_url('cdc/benchmarking') || $_SERVER['HTTP_REFERER'] == base_url('cdc/cdcloker') || $_SERVER['HTTP_REFERER'] == base_url('cdc/download')) {
                $this->load->view('front/templates/indikatorcdc',$data);
            }
            
            elseif ($this->uri->segment(2)=="detmhs" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatormhs',$data);
            }

            elseif ($this->uri->segment(2)=="detlppm" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorlppm',$data);
            }

            elseif ($this->uri->segment(2)=="detcdc" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorcdc',$data);
            }
            
            /* elseif ($this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikator',$data);
            } */
            
            $this->load->view('front/berita/detailberita',$data);
            $this->load->view('front/templates/footer');
        }

        public function detmhs($judul_berita)
        {
            $judul= urldecode($judul_berita);
            $data['title'] = 'Detail Artikel';
            $berita = $this->Informasimodel->detailBerita($judul)->result();
            $data['berita'] = $berita;
            $data['listberita'] = $this->Informasimodel->getBeritaside();
            $data['beasiswa'] = $this->Informasimodel->get_beasiswaside();
            $data['seminar'] = $this->Informasimodel->get_seminarside();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');

            if ($_SERVER['HTTP_REFERER'] == base_url('lppm/penelitian') || $_SERVER['HTTP_REFERER'] == base_url('lppm/pkm') || $_SERVER['HTTP_REFERER'] == base_url('lppm/informasi') || $_SERVER['HTTP_REFERER'] == base_url('lppm/agenda') ) {
                $this->load->view('front/templates/indikatorlppm',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/beasiswa') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/hibahmhs') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/skp') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/alumni') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/seminar') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/ukm') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/organisasi') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/survey') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/download')) {
                $this->load->view('front/templates/indikatormhs',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/roc') || $_SERVER['HTTP_REFERER'] == base_url('cdc/tracerStudy') || $_SERVER['HTTP_REFERER'] == base_url('cdc/informasi') || $_SERVER['HTTP_REFERER'] == base_url('cdc/benchmarking') || $_SERVER['HTTP_REFERER'] == base_url('cdc/cdcloker') || $_SERVER['HTTP_REFERER'] == base_url('cdc/download')) {
                $this->load->view('front/templates/indikatorcdc',$data);
            }

            elseif ($this->uri->segment(2)=="detmhs" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatormhs',$data);
            }

            elseif ($this->uri->segment(2)=="detlppm" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorlppm',$data);
            }

            elseif ($this->uri->segment(2)=="detcdc" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorcdc',$data);
            }

            /* elseif ($this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikator',$data);
            } */
            
            $this->load->view('front/kemahasiswaan/menu/menu',$data);
            $this->load->view('front/kemahasiswaan/detmhs',$data);
            $this->load->view('front/templates/footer');
        }

        public function detlppm($judul_berita)
        {
            $judul= urldecode($judul_berita);
            $data['title'] = 'Detail Artikel';
            $berita = $this->Informasimodel->detailBerita($judul)->result();
            $data['berita'] = $berita;
            $data['listberita'] = $this->Informasimodel->getBeritaside();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            
            if ($_SERVER['HTTP_REFERER'] == base_url('lppm/penelitian') || $_SERVER['HTTP_REFERER'] == base_url('lppm/pkm') || $_SERVER['HTTP_REFERER'] == base_url('lppm/informasi') || $_SERVER['HTTP_REFERER'] == base_url('lppm/agenda') ) {
                $this->load->view('front/templates/indikatorlppm',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/beasiswa') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/hibahmhs') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/skp') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/alumni') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/seminar') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/ukm') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/organisasi') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/survey') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/download')) {
                $this->load->view('front/templates/indikatormhs',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/roc') || $_SERVER['HTTP_REFERER'] == base_url('cdc/tracerStudy') || $_SERVER['HTTP_REFERER'] == base_url('cdc/informasi') || $_SERVER['HTTP_REFERER'] == base_url('cdc/benchmarking') || $_SERVER['HTTP_REFERER'] == base_url('cdc/cdcloker') || $_SERVER['HTTP_REFERER'] == base_url('cdc/download')) {
                $this->load->view('front/templates/indikatorcdc',$data);
            }

            elseif ($this->uri->segment(2)=="detmhs" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatormhs',$data);
            }

            elseif ($this->uri->segment(2)=="detlppm" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorlppm',$data);
            }

            elseif ($this->uri->segment(2)=="detcdc" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorcdc',$data);
            }

            /* elseif ($this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikator',$data);
            } */

            $this->load->view('front/lppm/menu',$data);
            $this->load->view('front/lppm/detlppm',$data);
            $this->load->view('front/templates/footer');
        }

        public function detcdc($judul_berita)
        {
            $judul= urldecode($judul_berita);
            $data['title'] = 'Detail Artikel';
            $berita = $this->Informasimodel->detailBerita($judul)->result();
            $data['berita'] = $berita;
            $data['loker'] = $this->Informasimodel->get_lokerside();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            
            if ($_SERVER['HTTP_REFERER'] == base_url('lppm/penelitian') || $_SERVER['HTTP_REFERER'] == base_url('lppm/pkm') || $_SERVER['HTTP_REFERER'] == base_url('lppm/informasi') || $_SERVER['HTTP_REFERER'] == base_url('lppm/agenda') ) {
                $this->load->view('front/templates/indikatorlppm',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/beasiswa') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/hibahmhs') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/skp') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/alumni') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/seminar') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/ukm') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/organisasi') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/survey') || $_SERVER['HTTP_REFERER'] == base_url('kemahasiswaan/download')) {
                $this->load->view('front/templates/indikatormhs',$data);
            }
            elseif ($_SERVER['HTTP_REFERER'] == base_url('cdc/roc') || $_SERVER['HTTP_REFERER'] == base_url('cdc/tracerStudy') || $_SERVER['HTTP_REFERER'] == base_url('cdc/informasi') || $_SERVER['HTTP_REFERER'] == base_url('cdc/benchmarking') || $_SERVER['HTTP_REFERER'] == base_url('cdc/cdcloker') || $_SERVER['HTTP_REFERER'] == base_url('cdc/download') || $_SERVER['HTTP_REFERER'] == base_url('berita/detcdc/'.$judul_berita) ) {
                $this->load->view('front/templates/indikatorcdc',$data);
            }

            elseif ($this->uri->segment(2)=="detmhs" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatormhs',$data);
            }

            elseif ($this->uri->segment(2)=="detlppm" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorlppm',$data);
            }

            elseif ($this->uri->segment(2)=="detcdc" || $this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikatorcdc',$data);
            }

            /* elseif ($this->uri->segment(2)=="detailberita"){
                $this->load->view('front/templates/indikator',$data);
            } */

            $this->load->view('front/cdc/menu',$data);
            $this->load->view('front/cdc/detcdc',$data);
            $this->load->view('front/templates/footer');
        }

    }
    