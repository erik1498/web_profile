<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Kontak';
        $data['sidebar'] = 'Contact';
        $this->load->view('Template/header_inject', $data);
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/contact', $data);
        $this->load->view('Template/footer', $data);
        $this->load->view('Template/footer_inject', $data);
    }

    public function sendKontakMessage()
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
            CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\n".$data['email']."\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"message\"\r\n\r\n".$data['message']."\r\n-----011000010111000001101001--\r\n",
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