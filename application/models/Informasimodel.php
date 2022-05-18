<?php

    class Informasimodel extends CI_Model{

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

        public function insertBerita()
        {
            $data = [
                "judul_berita" => $this->input->post('judul_berita',true),
                "isi_berita" => $this->input->post('isi_berita',true),
                "tgl_upload" => date('d m Y'),
                "tgl_edit" => date('d m Y'),
                "tipe_berita" => 'berita'
            ];

            $this->db->insert('berita',$data);
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
        
        
        //////////////////////////////////////////////////////////* CRUD INFO *///////////////////////////////////////////////////////////

        

        //////////////////////////////////////////////////////////* Batas CRUD INFO *///////////////////////////////////////////////////////////


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