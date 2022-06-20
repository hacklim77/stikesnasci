<?php

    function cek_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('username_admin');

        if($user_session){
            redirect('dashboard');
        }
    }

    function cek_not_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('username_admin');

        if(!$user_session){
            redirect('admin');
        }
    }

    function cek_admin()
    {
        $ci =& get_instance();
        $ci->load->library('fungsi');
    }