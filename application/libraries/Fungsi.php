<?php

    class Fungsi{
        protected $ci;

        function __construct()
        {
            $this->ci =& get_instance();   
        }

        function user_login()
        {
            $this->ci->load->model('Usermodel');
            $user_id = $this->ci->session->userdata('id_admin');
            $user_data = $this->ci->Usermodel->get($user_id)->row();
            return $user_data;
        }
    }