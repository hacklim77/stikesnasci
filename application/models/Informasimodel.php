<?php

    class Informasimodel extends CI_Model{


        //////////////////////////////////////////////////////////////// CRUD DATA ////////////////////////////////////////////////////////////////////
        
        public function insertBerita() //fungsi input berita
        {
            $data = [
                "judul_berita" => $this->input->post('judul_berita',true),
                "img_berita" => $this->upload_image(),
                "isi_berita" => $this->input->post('isi_berita',true),
                "tgl_upload" => date('Ymd'),
                "tgl_edit" => date('Ymd'),
                "tipe_berita" => $this->input->post('tipe_berita',true),
                "status" => 1
            ];

            $this->db->insert('berita',$data);
        }

        public function updateBerita() //fungsi edit berita
        {
            $data = [
                "judul_berita" => $this->input->post('judul_berita',true),
                "isi_berita" => $this->input->post('isi_berita',true),
                "tgl_edit" => date('Ymd')

            ];

            if($this->upload_image() != null){
                $data['img_berita'] = $this->upload_image();
            }
            
            $this->db->where('id_berita',$this->input->post('id_berita'));
            $this->db->update('berita',$data);
        }
        
        public function delBerita($id) //menghapus berita
        {
            $this->db->where('id_berita',$id);
			$this->db->delete('berita');
        }
        
        public function getBeritaID($id) //mengambil id berita (admin)
        {
            return $this->db->get_where('berita',['id_berita' => $id]);
        }
        
        public function detailBerita($judul_berita) //mengambil judul berita (front)
        {
            return $this->db->get_where('berita',['judul_berita' => $judul_berita]);
        }

        public function Tberita($tb)
        {
            return $this->db->get_where('berita',['tipe_berita' => $tb]);
        }

        ///////////////////////////////////////////////////////////* Private Upload Image *///////////////////////////////////////////////////////////

        private function upload_image()
        {
            date_default_timezone_set("ASIA/JAKARTA");
            $config['upload_path']      = './userfiles/img/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['overwrite']		= true;
            $config['max_size']         = 1048576;
            $config['file_name']        = 'info-'.$this->input->post('tipe_berita',true).'-'.date('Y-M-d-H-i-s');

            $this->load->library('upload',$config);
			if($this->upload->do_upload('gambar')){
				return $this->upload->data("file_name");
			}
        }

        ///////////////////////////////////////////////////////////* Batas Private Upload Image *///////////////////////////////////////////////////////////

        ////////////////////////////////////////////////////////// BATAS CRUD DATA ////////////////////////////////////////////////////////////////////
        
        
        //////////////////////////////////////////////////////////* Data Berita Utama *///////////////////////////////////////////////////////////

        public function getBerita()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','berita');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(2);
            $query = $this->db->get()->result_array();
            return $query;
        }

        public function getBeritaside()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','berita');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(7);
            $query = $this->db->get()->result_array();
            return $query;
        }

        public function getBeritaAll($limit,$start)
        {
            return $this->db->order_by('id_berita','desc')->get_where('berita', ['tipe_berita' => 'berita'], $limit,$start)->result_array();
        }
        
        public function getBeritaCount()
        {
            return $this->db->get_where('berita', ['tipe_berita' => 'berita'])->num_rows();
        }

        public function getTblBerita()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','berita');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;
        }

        //////////////////////////////////////////////////////////* Batas Berita Utama *//////////////////////////////////////////////////////////

        ///////////////////////////////////////////////////////////* Data Info Kampus *///////////////////////////////////////////////////////////
        
        public function getInfomhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->not_like('tipe_berita','berita');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;
        }

        public function getInfomhsAll($limit,$start)
        {
            return $this->db->not_like('tipe_berita','berita')->order_by('id_berita','desc')->get('berita', $limit,$start)->result_array();
        }
        
        public function getInfomhsCount()
        {
            return $this->db->not_like('tipe_berita','berita')->get('berita')->num_rows();
        }

        public function getTblinfomhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->not_like('tipe_berita','berita');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;
        }

        //////////////////////////////////////////////////////////* Batas Info Kampus *///////////////////////////////////////////////////////////
        
        ///////////////////////////////////////////////////////////* Data BAUK *///////////////////////////////////////////////////////////

        public function getBauk()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','bauk');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTblbauk()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','bauk');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        ///////////////////////////////////////////////////////////* Batas Data BAUK *///////////////////////////////////////////////////////////
        
        ///////////////////////////////////////////////////////////* Data Humas *///////////////////////////////////////////////////////////

        public function getHumas()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','humas');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTblhumas()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','humas');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        ///////////////////////////////////////////////////////////* Batas Data Humas *///////////////////////////////////////////////////////////
        
        ///////////////////////////////////////////////////////////* Data Lppm informasi *///////////////////////////////////////////////////////////

        public function get_Lppminformasi()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_informasi');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_Lppminformasi()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_informasi');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        ///////////////////////////////////////////////////////////* Batas Lppm Informasi *///////////////////////////////////////////////////////////
        
        ///////////////////////////////////////////////////////////* Data Lppm PKM *///////////////////////////////////////////////////////////

        public function get_Lppmpkm()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_pkm');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_Lppmpkm()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_pkm');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        ///////////////////////////////////////////////////////////* Batas Lppm PKM *///////////////////////////////////////////////////////////
        
        ///////////////////////////////////////////////////////////* Data Lppm Agenda *///////////////////////////////////////////////////////////

        public function get_Lppmagenda()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_agenda');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_Lppmagenda()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_agenda');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        ///////////////////////////////////////////////////////////* Batas Lppm Agenda *///////////////////////////////////////////////////////////
        
        ///////////////////////////////////////////////////////////* Data Lppm Penelitian *///////////////////////////////////////////////////////////

        public function get_Lppmpenelitian()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_penelitian');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_Lppmpenelitian()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_penelitian');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        ///////////////////////////////////////////////////////////* Batas Lppm Penelitian *///////////////////////////////////////////////////////////
        
        ///////////////////////////////////////////////////////////* Data Lppm Jurnal *///////////////////////////////////////////////////////////

        public function get_Lppmjurnal()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','jurnal');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_Lppmjurnal()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','lppm_jurnal');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        ///////////////////////////////////////////////////////////* Batas Lppm Jurnal *///////////////////////////////////////////////////////////

        public function get_beasiswa()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','beasiswa');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_beasiswa()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','beasiswa');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_hibahmhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','hibah_mahasiswa');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_hibahmhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','hibah_mahasiswa');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_skp()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','skp');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_skp()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','skp');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_alumni()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','alumni');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_alumni()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','alumni');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_seminarWorkshop()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','seminar_workshop');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_seminarWorkshop()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','seminar_workshop');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_ukm()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','ukm');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_ukm()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','ukm');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        public function get_organisasi()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','organisasi');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_organisasi()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','organisasi');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_surveymhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','survey_kemahasiswaan');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_surveymhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','survey_kemahasiswaan');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_downloadmhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','download_mhs');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_downloadmhs()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','download_mhs');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        public function get_roc()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','roc');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_roc()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','roc');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_tracerStudy()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','tracer_study');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_tracerStudy()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','tracer_study');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        public function get_inform()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','informasi');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_inform()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','informasi');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        public function get_benchmarking()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','benchmarking');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_benchmarking()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','benchmarking');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        
        public function get_cdcloker()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','cdc_loker');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_cdcloker()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','cdc_loker');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }

        public function get_downloadcdc()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','download_cdc');
            $this->db->order_by('id_berita','DESC');
            $this->db->limit(5);
            $query = $this->db->get()->result_array();
            return $query;        
        }

        public function getTbl_downloadcdc()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->like('tipe_berita','download_cdc');
            $this->db->order_by('id_berita','DESC');
            $query = $this->db->get()->result_array();
            return $query;   
        }
        

    }