<?php

    class Akademik extends CI_Controller
    {   
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Informasimodel');   
            $this->load->model('Akademikmodel');   
            $this->load->helper('tgl_indo','form','url');
            $this->load->library('form_validation'); 
        }

        public function index()
        {
            $data['title'] = 'Akademik';

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/templates/indikator',$data);
            $this->load->view('front/akademik/index',$data);
            $this->load->view('front/templates/footer');
        }


        public function createProdi()
        {
            $this->form_validation->set_rules('nama_program_studi','Program Studi','required');
			$this->form_validation->set_rules('visi','Visi','required');
			$this->form_validation->set_rules('misi','Misi','required');

            if ($this->form_validation->run() == FALSE) {
                
                $data['title'] = 'Admin Stikes Nasional | Akademik';

                $data['prodi'] = ['DIII Farmasi','DIII Teknologi Laboratorium Medis','DIV Fisioterapi','DIV Teknologi Laboratorium Medis','S1 Farmasi']; //0,1,2,3,4
                
                $this->load->view('admin/templates/head',$data);
                $this->load->view('admin/templates/sidebar.php');
                $this->load->view('admin/templates/navbar.php');

                if ($_SERVER['HTTP_REFERER'] == base_url('akademik/tbl_d3farmasi')) 
                {
                    $this->load->view('admin/akademik/t-d3farmasi',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('akademik/tbl_d3tlm')) 
                {
                    $this->load->view('admin/akademik/t-d3tlm',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('akademik/tbl_d4fisioterapi')) 
                {
                    $this->load->view('admin/akademik/t-d4fisioterapi',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('akademik/tbl_d4tlm')) 
                {
                    $this->load->view('admin/akademik/t-d4tlm',$data);
                }
                elseif ($_SERVER['HTTP_REFERER'] == base_url('akademik/tbl_s1farmasi')) 
                {
                    $this->load->view('admin/akademik/t-s1farmasi',$data);
                }

                $this->load->view('admin/templates/footer.php');
                $this->load->view('admin/templates/endscript.php');
            }
            else {
                $this->Akademikmodel->insertProdi();
                echo "<script>
                window.location=history.go(-2);
                </script>";
            }
        }
        
        public function editProdi($id=null)
        {
            $this->form_validation->set_rules('nama_program_studi','Program Studi','required');
			$this->form_validation->set_rules('visi','Visi','required');
			$this->form_validation->set_rules('misi','Misi','required');
            
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Admin Stikes Nasional | Akademik';
                $data['prodi'] = $this->Akademikmodel->getprodiID($id)->row_array();

                $this->load->view('admin/templates/head',$data);
                $this->load->view('admin/templates/sidebar.php');
                $this->load->view('admin/templates/navbar.php');
                $this->load->view('admin/akademik/edit',$data);
                $this->load->view('admin/templates/footer.php');
                $this->load->view('admin/templates/endscript.php');
            } 
            else{
                $this->Akademikmodel->updateProdi($id) ;          
                echo "<script>
                window.location=history.go(-2);
                </script>";
            }
        }

        public function deleteProdi($id)
        {
            $data['title'] = 'Admin Stikes Nasional | Akademik';
            $data['prodi'] = $this->Akademikmodel->getTblakademik();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/akademik/d-d3farmasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');

            $this->Akademikmodel->deleteProdi($id);
            redirect($_SERVER['HTTP_REFERER']);
        }

        public function tbl_d3farmasi()
        {
            $data['title'] = 'DIII Farmasi';
            $data['prodi'] = $this->Akademikmodel->get_Tbld3farmasi();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/akademik/d-d3farmasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function DIII_Farmasi()
        {
            $data['title'] = 'DIII Farmasi';
            $data['prodi'] = $this->Akademikmodel->get_Tbld3farmasi();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d3farmasi',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_d3tlm()
        {
            $data['title'] = 'DIII TLM';
            $data['prodi'] = $this->Akademikmodel->get_Tbld3tlm();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/akademik/d-d3tlm',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function DIII_TLM()
        {
            $data['title'] = 'DIII Teknologi Laboratorium Medis';
            $data['prodi'] = $this->Akademikmodel->get_Tbld3tlm();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d3tlm',$data);
            $this->load->view('front/templates/footer');
        }

        public function tbl_d4fisioterapi()
        {
            $data['title'] = 'DIV Fisioterapi';
            $data['prodi'] = $this->Akademikmodel->get_Tbld4fisio();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/akademik/d-d4fisioterapi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function DIV_Fisioterapi()
        {
            $data['title'] = 'DIV Fisioterapi';
            $data['prodi'] = $this->Akademikmodel->get_Tbld4fisio();
            
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d4fisio',$data);
            $this->load->view('front/templates/footer');
        }
        
        public function tbl_d4tlm()
        {
            $data['title'] = 'DIV TLM';
            $data['prodi'] = $this->Akademikmodel->get_Tbld4tlm();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/akademik/d-d4tlm',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function DIV_TLM()
        {
            $data['title'] = 'DIV Teknologi Laboratorium Medis';
            $data['prodi'] = $this->Akademikmodel->get_Tbld4tlm();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/d4tlm',$data);
            $this->load->view('front/templates/footer');
        }
        
        public function tbl_s1farmasi()
        {
            $data['title'] = 'S1 Farmasi';
            $data['prodi'] = $this->Akademikmodel->get_Tbls1farmasi();
            
            $this->load->view('admin/templates/head',$data);
            $this->load->view('admin/templates/sidebar.php');
            $this->load->view('admin/templates/navbar.php');
            $this->load->view('admin/akademik/d-s1farmasi',$data);
            $this->load->view('admin/templates/footer.php');
            $this->load->view('admin/templates/endscript.php');
        }

        public function SI_Farmasi()
        {
            $data['title'] = 'SI Farmasi';
            $data['prodi'] = $this->Akademikmodel->get_Tbls1farmasi();

            $this->load->view('front/templates/header');
            $this->load->view('front/templates/endscript');
            $this->load->view('front/templates/menu');
            $this->load->view('front/akademik/indikator',$data);
            $this->load->view('front/akademik/menu',$data);
            $this->load->view('front/akademik/s1farmasi',$data);
            $this->load->view('front/templates/footer');
        }
        
    }
    