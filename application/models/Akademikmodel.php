<?php

    class Akademikmodel extends CI_Model{

        public function insertProdi()
        {
            $data = [
                "nama_program_studi" => $this->input->post('nama_program_studi',true),
                "visi" => $this->input->post('visi',true),
                "misi" => $this->input->post('misi',true),
                "tentang" => $this->input->post('tentang',true),
            ];

            $this->db->insert('program_studi',$data);
        }

        public function getprodiID($id)
        {
            return $this->db->get_where('program_studi',['id_program_studi' => $id]);
        }

        public function get_Tbls1farmasi()
        {
            $this->db->select('*');
            $this->db->from('program_studi');
            $this->db->like('nama_program_studi','S1 Farmasi');
            $query = $this->db->get()->result_array();
            return $query;    
        }

        public function get_Tbld3farmasi()
        {
            $this->db->select('*');
            $this->db->from('program_studi');
            $this->db->like('nama_program_studi','DIII Farmasi');
            $query = $this->db->get()->result_array();
            return $query;    
        }
        
        public function get_Tbld4fisio()
        {
            $this->db->select('*');
            $this->db->from('program_studi');
            $this->db->like('nama_program_studi','DIV Fisioterapi');
            $query = $this->db->get()->result_array();
            return $query;    
        }
        
        public function get_Tbld3tlm()
        {
            $this->db->select('*');
            $this->db->from('program_studi');
            $this->db->like('nama_program_studi','DIII Teknologi Laboratorium Medis');
            $query = $this->db->get()->result_array();
            return $query;    
        }
        public function get_Tbld4tlm()
        {
            $this->db->select('*');
            $this->db->from('program_studi');
            $this->db->like('nama_program_studi','DIV Teknologi Laboratorium Medis');
            $query = $this->db->get()->result_array();
            return $query;    
        }

    }