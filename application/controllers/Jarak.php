<?php

    class Jarak extends CI_Controller{

        public function __construct()
        {
            parent :: __construct();
            $this->load->model('M_jarak');   
        }

        public function index($unit='K')
        {            
            //$data['hitung'] = $this->M_jarak->hitung($unit);
            $data['hitung'] = $this->M_jarak->hitung($unit);
            $this->load->view('jarak',$data);

            //echo "<script>window.stop()</script>";
        }

        /* public function hasil()
        {
            

            $this->load->view('hasil',$data);
        }
 */
    }