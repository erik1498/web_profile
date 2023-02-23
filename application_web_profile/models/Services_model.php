<?php 

class Services_model extends CI_Model {
    public function getAllData()
    {
        return $this->db->get('tbl_services')->result_array();
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

    public function renderServicesPage()
    {
        $file_ref = "application_web_profile/views/Profile/services_ref.php";
        $services_manage = "application_web_profile/views/Ref/services/daftar.php";

        $file = "application_web_profile/views/Profile/services.php";        

        $my_file_ref = fopen($file_ref, "r") or die("Unable to open my_file_ref!");
                
        $services_man = fopen($services_manage, "r") or die("Unable to open services_man!");
        
        $text = fread($my_file_ref, filesize($file_ref));
        
        $services = fread($services_man, filesize($services_manage));
        
        $replaces = [
            [
                'text' => $services,
                'replace' => '%SERVICES_LIST%'
            ],
        ];

        foreach ($replaces as $r) {
            $text = str_replace($r['replace'], $r['text'], $text);
        }

        $myfile = fopen($file, "w");
        fwrite($myfile, $text);
        fclose($myfile);
    }
}