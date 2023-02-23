<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->helper('cookie');
        $cookie= get_cookie('keps_remember_visited_status');
        if (is_null($cookie) || $cookie != date('Y-m-d')) {
            $cookie = array(
                    'name'   => 'keps_remember_visited_status',
                    'value'  => date('Y-m-d'),                            
                    'expire' => strval(86400),                                                                              
                    'secure' => TRUE
            );
            set_cookie($cookie);

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "http://localhost/admin_web_profile/communication/setKunjungan",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"date\"\r\n\r\n".date('Y-m-d')."\r\n-----011000010111000001101001--\r\n",
                CURLOPT_HTTPHEADER => [
                    "Accept: */*",
                    "User-Agent: Thunder Client (https://www.thunderclient.com)",
                    "content-type: multipart/form-data; boundary=---011000010111000001101001"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
        }
        $data['judul'] = 'Beranda';
        $data['sidebar'] = 'Home';
        $this->load->view('Template/header_inject', $data);
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/home', $data);
        $this->load->view('Template/footer', $data);
        $this->load->view('Template/footer_inject', $data);
    }

    public function sendEmailCall()
    {
        $data = $this->input->post();
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "http://localhost/admin_web_profile/communication/getKontakMessage",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\n".$data['email']."\r\n-----011000010111000001101001--\r\n",
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
                "User-Agent: Thunder Client (https://www.thunderclient.com)",
                "content-type: multipart/form-data; boundary=---011000010111000001101001"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $this->session->set_flashdata('alert', "$('#myModal').modal('show')");
        redirect($_SERVER['HTTP_REFERER']);
    }
}