<?php

    class Informasimodel extends CI_Model{

        /* Data Berita Utama */

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

        /* Batas Berita Utama */


        /* Data Info Kampus */
        
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

        /* Batas Info Kampus */


        /* Data BAUK */

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


        /* Batas Data BAUK */
    }