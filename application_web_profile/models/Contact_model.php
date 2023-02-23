<?php 

class Contact_model extends CI_Model {

    public function getAllData()
    {
        return $this->db->get('tbl_contact')->row_array();
    }

    public function renderContactPage()
    {
        $file_ref = "application_web_profile/views/Profile/contact_ref.php";
        $iframe_manage = "application_web_profile/views/Ref/contact/iframe.php";
        $telp_alamat_email_whatsapp_text_manage = "application_web_profile/views/Ref/contact/telp_alamat_email_whatsapp_text.php";

        $file = "application_web_profile/views/Profile/contact.php";
        
        $my_file_ref = fopen($file_ref, "r") or die("Unable to open my_file_ref!");
                
        $iframe_man = fopen($iframe_manage, "r") or die("Unable to open iframe_man!");
        $telp_alamat_email_whatsapp_text_man = fopen($telp_alamat_email_whatsapp_text_manage, "r") or die("Unable to open iframe_man!");
        
        $text = fread($my_file_ref, filesize($file_ref));
        
        $iframe = fread($iframe_man, filesize($iframe_manage));
        $telp_alamat_email_whatsapp_text = fread($telp_alamat_email_whatsapp_text_man, filesize($telp_alamat_email_whatsapp_text_manage));
        
        $exp = explode("|", $telp_alamat_email_whatsapp_text);
        $replaces = [
            [
                'text' => $iframe,
                'replace' => '%IFRAME%'
            ],
            [
                'text' => $exp[0],
                'replace' => '%TELP%'
            ],
            [
                'text' => $exp[1],
                'replace' => '%ADDRESS%'
            ],
            [
                'text' => $exp[2],
                'replace' => '%EMAIL%'
            ]
        ];

        foreach ($replaces as $r) {
            $text = str_replace($r['replace'], $r['text'], $text);
        }

        $myfile = fopen($file, "w");
        fwrite($myfile, $text);
        fclose($myfile);
    }
}