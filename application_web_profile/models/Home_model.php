<?php 

class Home_model extends CI_Model {
    public function getAllData()
    {
        return $this->db->get('tbl_home')->row_array();
    }

    public function renderHomePage()
    {
        $file_ref = "application_web_profile/views/Profile/home_ref.php";
        $testimoni_manage = "application_web_profile/views/Ref/home/testimoni.php";
        $title_text_manage = "application_web_profile/views/Ref/home/title_text.php";
        $sub_text_manage = "application_web_profile/views/Ref/home/sub_text.php";
        $text_kontak_1_manage = "application_web_profile/views/Ref/contact/text_kontak_1.php";
        $text_kontak_2_manage = "application_web_profile/views/Ref/contact/text_kontak_2.php";
        $about_short_manage = "application_web_profile/views/Ref/about/about_short.php";
        $about_daftar_list_manage = "application_web_profile/views/Ref/about/about_daftar_list.php";
        $services_daftar_list_manage = "application_web_profile/views/Ref/services/daftar_home.php";
        $blog_daftar_list_manage = "application_web_profile/views/Ref/blog/daftar_home.php";

        $file = "application_web_profile/views/Profile/home.php";
        
        $my_file_ref = fopen($file_ref, "r") or die("Unable to open my_file_ref!");
                
        $testimoni_man = fopen($testimoni_manage, "r") or die("Unable to open testimoni_man!");
        $title_text_man = fopen($title_text_manage, "r") or die("Unable to open title_text_man!");
        $sub_text_man = fopen($sub_text_manage, "r") or die("Unable to open sub_text_man!");
        $text_kontak_1_man = fopen($text_kontak_1_manage, "r") or die("Unable to open text_kontak_1_man!");
        $text_kontak_2_man = fopen($text_kontak_2_manage, "r") or die("Unable to open text_kontak_2_man!");
        $about_short_man = fopen($about_short_manage, "r") or die("Unable to open about_short_man!");
        $about_daftar_list_man = fopen($about_daftar_list_manage, "r") or die("Unable to open about_daftar_list_man!");
        $service_daftar_list_man = fopen($services_daftar_list_manage, "r") or die("Unable to open service_daftar_list_man!");
        $blog_daftar_list_man = fopen($blog_daftar_list_manage, "r") or die("Unable to open blog_daftar_list_man!");
        
        $text = fread($my_file_ref, filesize($file_ref));
        
        $testimoni = fread($testimoni_man, filesize($testimoni_manage));
        $title_text = fread($title_text_man, filesize($title_text_manage));
        $sub_text = fread($sub_text_man, filesize($sub_text_manage));
        $text_kontak_1 = fread($text_kontak_1_man, filesize($text_kontak_1_manage));
        $text_kontak_2 = fread($text_kontak_2_man, filesize($text_kontak_2_manage));
        $about_short = fread($about_short_man, filesize($about_short_manage));
        $about_daftar_list = fread($about_daftar_list_man, filesize($about_daftar_list_manage));
        $service_daftar_list = fread($service_daftar_list_man, filesize($services_daftar_list_manage));
        $blog_daftar_list = fread($blog_daftar_list_man, filesize($blog_daftar_list_manage));
        
        $replaces = [
            [
                'text' => $title_text,
                'replace' => '%TITLE_TEXT%'
            ],[
                'text' => $sub_text,
                'replace' => '%SUB_TEXT%'
            ],[
                'text' => $text_kontak_1,
                'replace' => '%TEXT_CONTACT_1%'
            ],[
                'text' => $text_kontak_2,
                'replace' => '%TEXT_CONTACT_2%'
            ],[
                'text' => $about_short,
                'replace' => '%ABOUT_SHORT%'
            ],[
                'text' => $about_daftar_list,
                'replace' => '%DAFTAR_ABOUT_LIST%'
            ],[
                'text' => $service_daftar_list,
                'replace' => '%SERVICES_LIST%'
            ],[
                'text' => $blog_daftar_list,
                'replace' => '%BLOG_LIST%'
            ],[
                'text' => $testimoni,
                'replace' => '%TESTIMONI%'
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