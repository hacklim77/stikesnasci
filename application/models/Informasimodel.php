<?php

    class Informasimodel extends CI_Model{


        //////////////////////////////////////////////////////////////// CRUD DATA ////////////////////////////////////////////////////////////////////
        
        public function insertBerita()
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

        public function updateBerita()
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
        
        public function delBerita($id)
        {
            $this->db->where('id_berita',$id);
			$this->db->delete('berita');
        }
        
        public function getBeritaID($id)
        {
            return $this->db->get_where('berita',['id_berita' => $id]);
        }
        
        public function detailBerita($judul_berita)
        {
            return $this->db->get_where('berita',['judul_berita' => $judul_berita]);
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

        ///////////////////////////////////////////////////////////* Batas Data BAUK *///////////////////////////////////////////////////////////

    }