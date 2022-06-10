<?php

    class Usermodel extends CI_Model{

        public function getUser($id)
        {
            $this->db->select('*');
            $this->db->where('username_admin',$id);
            $this->db->from('admin');
            $q = $this->db->get();
            return $q->result();
        }

        public function getses()
        {
            $this->db->select('*');
            $this->db->where('username_admin');
            $this->db->from('admin');
            $q = $this->db->get();
            return $q->result();
        }

        public function getAll()
        {
            $this->db->get('admin')->result_array();
        }


    }