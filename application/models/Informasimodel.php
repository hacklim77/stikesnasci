<?php

    class Informasimodel extends CI_Model{

        public function getAllberita()
        {
            $query = $this->db->get('berita')->result_array();
            return $query;
        }

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

    }