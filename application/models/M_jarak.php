<?php

    class M_jarak extends CI_Model{

        public function hitung($unit)
        {
            $lat1 = $this->input->post('Latitude1');
            $lat2 = $this->input->post('Latitude2');
            $lon1 = $this->input->post('Longitude1');
            $lon2 = $this->input->post('Longitude2');	

            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad(floatval($lat1))) * sin(deg2rad(floatval($lat2))) +  cos(deg2rad(floatval($lat1))) * cos(deg2rad(floatval($lat2))) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $dist = $dist *  60 * 1.1515;

            switch ($unit) {
                case 'miles':
                    break;
                case 'K':
                    $dist = $dist * 1.609344;
            }
            
            return (round($dist,2));

        }
            
    }