<?php 

class About_model extends CI_Model {
    public function getAllData()
    {
        return $this->db->get('tbl_about')->row_array();
    }

    public function getAllDaftarAbout()
    {
        return $this->db->get('tbl_daftar_about')->result_array();
    }

    public function generateDaftarAboutString()
    {
        $daftar_about = $this->getAllDaftarAbout();
        $string = "";
        foreach ($daftar_about as $d) {
            $string .= '
            <div class="card rounded-0 border-0" style="min-width:150px;max-width:250px;">
                <img class="card-img-top" src="'.base_url("assets_web_profile/img/hero.jpg").'" alt="Card image cap">
                <div class="card-body px-0">
                    <h5 class="card-title">'.$d['judul'].'</h5>
                    <p class="card-text">'.$d['keterangan'].'</p>
                </div>
            </div>';
        }
        return $string;
    }

    public function renderAboutPage()
    {
        $file_ref = "application_web_profile/views/Profile/about_ref.php";
        $about_manage = "application_web_profile/views/Ref/about/about_full.php";
        $daftar_about_manage = "application_web_profile/views/Ref/about/about_daftar.php";
        $contact_manage = "application_web_profile/views/Ref/contact/text_kontak_1.php";

        $file = "application_web_profile/views/Profile/about.php";
        
        $my_file_ref = fopen($file_ref, "r") or die("Unable to open my_file_ref!");
                
        $about_man = fopen($about_manage, "r") or die("Unable to open about_man!");
        $daftar_about_man = fopen($daftar_about_manage, "r") or die("Unable to open about_man!");
        $contact_man = fopen($contact_manage, "r") or die("Unable to open contact_man!");
        
        $text = fread($my_file_ref, filesize($file_ref));
        
        $about = fread($about_man, filesize($about_manage));
        $daftar_about = fread($daftar_about_man, filesize($daftar_about_manage));
        $contact = fread($contact_man, filesize($contact_manage));
        
        $replaces = [
            [
                'text' => $about,
                'replace' => '%ABOUT_FULL%',
            ],
            [
                'text' => $contact,
                'replace' => '%TEXT_KONTAK_1%'
            ],
            [
                'text' => $daftar_about,
                'replace' => '%DAFTAR_ABOUT%'
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