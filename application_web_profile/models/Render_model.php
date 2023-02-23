<?php 

class Render_model extends CI_Model {
    
    public $url_admin = 'http://localhost/admin_web_profile/';

    public function generateDaftarAboutListString()
    {
        $daftar_about = $this->About_model->getAllDaftarAbout();
        $string = "";
        $i = 0;
        foreach ($daftar_about as $d) {
            $i++;
            if ($i == 1) {
                $string .= '
                <div class="col-lg-4 about-list-column col-12">
                    <ul>';
            }
            $string .= '
                        <li>'.$d['judul'].'</li>
                    ';

            if ($i == 2) {
                $string .= '</ul>
                </div>';
            }
            if ($i == 2) { $i = 0; }
        }
        return $string;
    }

    function curl_get_file_contents($URL)
    {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
        else return FALSE;
    }

    public function generateDaftarAboutString()
    {
        $it = new FilesystemIterator(FCPATH.'/assets_web_profile/img/about');
        $files = [];
        foreach ($it as $fileinfo) {
            $files[] = $fileinfo->getFilename();
        }

        foreach ($files as $f) {
            unlink(FCPATH.'/assets_web_profile/img/about/'.$f);
        }

        $daftar_about = $this->About_model->getAllDaftarAbout();
        $string = "";
        $i = 0;
        foreach ($daftar_about as $d) {
            $i++;
            if ($i == 1) {
                $string .= '
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-deck">';
            }
            // ABOUT IMAGES
            $url = $this->url_admin.'assets_admin_web_profile/img/about/daftar/'.$d['gambar'];
            $img = FCPATH.'/assets_web_profile/img/about/'.$d['gambar'];
            file_put_contents($img, $this->curl_get_file_contents($url));

            $string .= '
                <div class="card rounded-0 border-0">
                    <img class="card-img-top" src="'.base_url("assets_web_profile/img/about/".$d['gambar']).'" alt="Card image cap">
                    <div class="card-body px-0">
                        <h5 class="card-title">'.$d['judul'].'</h5>
                        <p class="card-text">'.$d['keterangan'].'</p>
                    </div>
                </div>';

            if ($i == 4) {
                $string .= '
                        </div>
                    </div>
                </div>';
            }
            if ($i == 4) { $i = 0; }
        }
        return $string;
    }
    
    public function generateDaftarServicesString()
    {
        $services_data = $this->Services_model->getAllData();
        $string = "";
        $i = 0;
        foreach ($services_data as $d) {
            $i++;
            if ($i == 1) {
                $string .= '
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-deck">';
            }
            $string .= '
                <div class="card rounded-0 border-0" style="max-width:300px;">
                    <img class="card-img-top" src="'.base_url("assets_web_profile/img/services/".$d['gambar']).'" alt="Card image cap">
                    <div class="card-body px-0">
                        <h5 class="card-title">'.$d['judul'].'</h5>
                        <p class="card-text">'.$d['keterangan'].'</p>
                    </div>
                </div>';

            if ($i == 4) {
                $string .= '
                        </div>
                    </div>
                </div>';
            }
            if ($i == 4) { $i = 0; }
        }
        return $string;
    }

    public function generateDaftarServicesHomeString()
    {
        $it = new FilesystemIterator(FCPATH.'/assets_web_profile/img/services');
        $files = [];
        foreach ($it as $fileinfo) {
            $files[] = $fileinfo->getFilename();
        }

        foreach ($files as $f) {
            unlink(FCPATH.'/assets_web_profile/img/services/'.$f);
        }

        $services_data = $this->Services_model->getAllData();
        $string = '
        <section class="services bg-secondary text-white">
            <div class="container position-relative py-5">
                <div class="row py-5">
                    <div class="col-lg-12">
                        <h1 class="bolder-custom mb-4 text-center">LAYANAN KAMI</h1>
                        <h5 class="mt-5 text-center">Beberapa pilihan kategori pelayanan kami yang dapat anda gunakan</h5>
                        <div class="scroll-nav pointer bg-primary" data-target="vertical-list-container"><span class="carousel-control-prev-icon"></span></div>
                        <div class="scroll-nav right bg-primary pointer" data-target="vertical-list-container"><span class="carousel-control-next-icon"></span></div>
                        <div class="vertical-list-container">
                            <div class="vertical-list mt-5 pt-5 pl-5">
                                ';
        foreach ($services_data as $d) {
            // SERVICES IMAGES
            $url = $this->url_admin.'assets_admin_web_profile/img/services/'.$d['gambar'];

            $img = FCPATH.'/assets_web_profile/img/services/'.$d['gambar'];
            file_put_contents($img, $this->curl_get_file_contents($url));

            $string .= '
            <div class="card bg-secondary border-0 rounded-0" style="width: 20rem;">
                <img src="'.base_url('assets_web_profile/img/services/'.$d['gambar']).'" class="card-img-top" alt="ListImage">
                <div class="card-body px-0">
                    <h2>'.$d['judul'].'</h2>
                    <p class="card-text">'.$d['keterangan'].'</p>
                </div>
            </div>';
        }
        $string .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
        return count($services_data) == 0 ? '' : $string;
    }
    
    public function generateDaftarArtikelHomeString()
    {
        $it = new FilesystemIterator(FCPATH.'/assets_web_profile/img/artikel');
        $files = [];
        foreach ($it as $fileinfo) {
            $files[] = $fileinfo->getFilename();
        }

        foreach ($files as $f) {
            unlink(FCPATH.'/assets_web_profile/img/artikel/'.$f);
        }

        $blog_data = $this->Blog_model->getAllDataNoLimit();
        $string = '
            <section class="blog">
                <div class="container position-relative py-lg-5 py-0">
                    <div class="row py-5">
                        <div class="col-lg-12">
                            <h1 class="bolder-custom mb-4 text-center">ARTIKEL TERBARU</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-deck">
        ';
        foreach ($blog_data as $d) {
            
            // ARTIKEL IMAGES
            $url = $this->url_admin.'assets_admin_web_profile/img/artikel/'.$d['gambar'];
            $img = FCPATH.'/assets_web_profile/img/artikel/'.$d['gambar'];
            file_put_contents($img, $this->curl_get_file_contents($url));

            $string .= '
            <div class="card rounded-0 border-0" style="max-width:300px;">
                <img class="card-img-top" src="'.base_url('assets_web_profile/img/artikel/'.$d['gambar']).'" alt="Card image cap">
                <div class="card-body px-0">
                    <h5 class="card-title">'.$d['judul'].'</h5>
                    <p class="card-text">'.substr($d['isi'], 0, 20).'...</p>
                    <a href="'.base_url('Profile/blog_detail/'.$d['id_artikel']).'" class="btn btn-primary btn-sm mt-2">Read More</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <p><i class="fa fa-calendar-alt"></i> '.getTanggal($d['tanggal']).'</p>
                    </small>
                </div>
            </div>';
        }
        $string .= '
                        </div>
                    </div>
                </div>
            </div>
        </section>';

        return count($blog_data) == 0 ? "" : $string;
    }
    
    public function generateTestimoniString()
    {
        $testimoni_data = $this->db->get('tbl_testimoni')->result_array();
        $string = '
        <section class="testimoni bg-highlight pb-5">
            <div class="container position-relative py-lg-5 py-0">
                <div class="row py-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="bolder-custom mb-4">TESTIMONI</h1>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-lg-12">
                        <div class="container">
                            <div id="carouselContent" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
        ';
        $i = 0;
        foreach ($testimoni_data as $d) {
            if ($i == 0) {
                $string .= '<div class="carousel-item active text-center p-4">';
            }
            else{
                $string .= '<div class="carousel-item text-center p-4">';
            }
            $i++;
            $string .= '
                <h5>'.$d['keterangan'].'</h5>
                <h3 class="mt-5">'.$d['judul'].'</h3>
            </div>';
        }
        $string .= '
                                </div>
                                    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon px-3 py-4 bg-dark rounded" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon px-3 py-4 bg-dark rounded" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ';
        return $i == 0 ? "" : $string;
    }

    public function renderFromDatabaseToFile()
    {        
        $about_data = $this->About_model->getAllData();
        $contact_data = $this->Contact_model->getAllData();
        $home_data = $this->Home_model->getAllData();

        
        // HERO IMAGES
        $url = $this->url_admin.'assets_admin_web_profile/img/home/'.$home_data['hero_images'];
        $img = FCPATH.'/assets_web_profile/img/hero2.jpg';
        file_put_contents($img, $this->curl_get_file_contents($url));

        // ABOUT IMAGES
        $url = $this->url_admin.'assets_admin_web_profile/img/about/'.$about_data['gambar'];
        $img = FCPATH.'/assets_web_profile/img/hero3.jpg';
        file_put_contents($img, $this->curl_get_file_contents($url));


        $sub_text_manage = "application_web_profile/views/Ref/home/sub_text.php";
        $title_text_manage = "application_web_profile/views/Ref/home/title_text.php";
        $testimoni_manage = "application_web_profile/views/Ref/home/testimoni.php";
        $about_full_manage = "application_web_profile/views/Ref/about/about_full.php";
        $about_short_manage = "application_web_profile/views/Ref/about/about_short.php";
        $daftar_about_manage = "application_web_profile/views/Ref/about/about_daftar.php";
        $daftar_about_list_manage = "application_web_profile/views/Ref/about/about_daftar_list.php";
        $kontak_text_1_manage = "application_web_profile/views/Ref/contact/text_kontak_1.php";
        $kontak_text_2_manage = "application_web_profile/views/Ref/contact/text_kontak_2.php";
        $iframe_manage = "application_web_profile/views/Ref/contact/iframe.php";
        $telp_alamat_email_whatsapp_text_manage = "application_web_profile/views/Ref/contact/telp_alamat_email_whatsapp_text.php";
        $services_manage = "application_web_profile/views/Ref/services/daftar.php";
        $services_home_manage = "application_web_profile/views/Ref/services/daftar_home.php";
        $blog_home_manage = "application_web_profile/views/Ref/blog/daftar_home.php";
        

        $sub_text_man = fopen($sub_text_manage, "w") or die("Unable to open sub_text_man!");
        $testimoni_man = fopen($testimoni_manage, "w") or die("Unable to open testimoni_man!");
        $title_text_man = fopen($title_text_manage, "w") or die("Unable to open title_text_man!");
        $about_full_man = fopen($about_full_manage, "w") or die("Unable to open about_full_man!");
        $about_short_man = fopen($about_short_manage, "w") or die("Unable to open about_short_man!");
        $daftar_about_man = fopen($daftar_about_manage, "w") or die("Unable to open daftar_about_man!");
        $daftar_about_list_man = fopen($daftar_about_list_manage, "w") or die("Unable to open daftar_about_list_man!");
        $kontak_text_1_man = fopen($kontak_text_1_manage, "w") or die("Unable to open kontak_text_1_man!");
        $kontak_text_2_man = fopen($kontak_text_2_manage, "w") or die("Unable to open kontak_text_2_man!");
        $iframe_man = fopen($iframe_manage, "w") or die("Unable to open iframe_man!");
        $telp_alamat_email_whatsapp_text_man = fopen($telp_alamat_email_whatsapp_text_manage, "w") or die("Unable to open telp_alamat_email_whatsapp_text_man!");
        $services_man = fopen($services_manage, "w") or die("Unable to open services_man!");
        $services_home_man = fopen($services_home_manage, "w") or die("Unable to open services_home_man!");
        $blog_home_man = fopen($blog_home_manage, "w") or die("Unable to open blog_home_man!");

      
        fwrite($sub_text_man, $home_data['text_sub']);
        fwrite($testimoni_man, $this->generateTestimoniString());
        fwrite($title_text_man, $home_data['text_title']);
        fwrite($about_full_man, $about_data['about_full']);
        fwrite($about_short_man, $about_data['about_short']);
        fwrite($daftar_about_man, $this->generateDaftarAboutString());
        fwrite($daftar_about_list_man, $this->generateDaftarAboutListString());
        fwrite($kontak_text_1_man, $contact_data['text_kontak_1']);
        fwrite($kontak_text_2_man, $contact_data['text_kontak_2']);
        fwrite($iframe_man, $contact_data['maps_iframe']);

        $text = $contact_data['telp'].'|'.$contact_data['alamat'].'|'.$contact_data['email'].'|'.$contact_data['whatsapp'].'|'.$contact_data['whatsapp_text'];
        fwrite($telp_alamat_email_whatsapp_text_man, $text);
        
        fwrite($services_man, $this->generateDaftarServicesString());
        fwrite($services_home_man, $this->generateDaftarServicesHomeString());
        fwrite($blog_home_man, $this->generateDaftarArtikelHomeString());

        fclose($sub_text_man);
        fclose($testimoni_man);
        fclose($title_text_man);
        fclose($about_full_man);
        fclose($about_short_man);
        fclose($daftar_about_man);
        fclose($daftar_about_list_man);
        fclose($kontak_text_1_man);
        fclose($kontak_text_2_man);
        fclose($iframe_man);
        fclose($telp_alamat_email_whatsapp_text_man);
        fclose($services_man);
        fclose($blog_home_man);

        $this->headerFooterRender();

        $this->About_model->renderAboutPage();
        $this->Home_model->renderHomePage();
        $this->Services_model->renderServicesPage();
        $this->Contact_model->renderContactPage();
    }

    public function getAllProdukString()
    {
        $it = new FilesystemIterator(FCPATH.'/assets_web_profile/img/produk');
        $files = [];
        foreach ($it as $fileinfo) {
            $files[] = $fileinfo->getFilename();
        }

        foreach ($files as $f) {
            unlink(FCPATH.'/assets_web_profile/img/produk/'.$f);
        }

        $product = $this->db->get('tbl_product')->result_array();
        $str = '
                    <li class="nav-item dropdown <?=$sidebar == "Product" ? "active" : ""?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PRODUK
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        ';
        foreach ($product as $p) {
            // ARTIKEL IMAGES
            $url = $this->url_admin.'assets_admin_web_profile/img/produk/'.$p['gambar'];
            $img = FCPATH.'/assets_web_profile/img/produk/'.$p['gambar'];
            file_put_contents($img, $this->curl_get_file_contents($url));

            $str .= '<a class="dropdown-item" href="'.base_url('product/detail/'.$p['id_produk']).'">'.substr($p['judul'], 0, 15).'</a>';
        }
        $str .= '
                    </div>
                </li>';
        return count($product) == 0 ? "" : $str;
    }

    public function headerFooterRender()
    {
        $header_ref = "application_web_profile/views/Template/header_ref.php";
        $footer_ref = "application_web_profile/views/Template/footer_ref.php";
        
        $about_short_manage = "application_web_profile/views/Ref/about/about_short.php";
        $iframe_manage = "application_web_profile/views/Ref/contact/iframe.php";
        $telp_alamat_email_whatsapp_text_manage = "application_web_profile/views/Ref/contact/telp_alamat_email_whatsapp_text.php";

        $header = "application_web_profile/views/Template/header.php";
        $footer = "application_web_profile/views/Template/footer.php";
        
        $my_header_ref = fopen($header_ref, "r") or die("Unable to open my_header_ref!");
        $my_footer_ref = fopen($footer_ref, "r") or die("Unable to open my_footer_ref!");
                
        $about_short_man = fopen($about_short_manage, "r") or die("Unable to open about_short_man!");
        $iframe_man = fopen($iframe_manage, "r") or die("Unable to open iframe_man!");
        $telp_alamat_email_whatsapp_text_man = fopen($telp_alamat_email_whatsapp_text_manage, "r") or die("Unable to open iframe_man!");
        
        $text_header = fread($my_header_ref, filesize($header_ref));
        $text_footer = fread($my_footer_ref, filesize($footer_ref));
        
        $about_short = fread($about_short_man, filesize($about_short_manage));
        $iframe = fread($iframe_man, filesize($iframe_manage));
        $telp_alamat_email_whatsapp_text = fread($telp_alamat_email_whatsapp_text_man, filesize($telp_alamat_email_whatsapp_text_manage));
        
        $exp = explode("|", $telp_alamat_email_whatsapp_text);
        $replaces = [
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
            ],
            [
                'text' => $this->getAllProdukString(),
                'replace' => '%PRODUK%'
            ]
        ];

        foreach ($replaces as $r) {
            $text_header = str_replace($r['replace'], $r['text'], $text_header);
        }

        $myfile = fopen($header, "w");
        fwrite($myfile, $text_header);
        fclose($myfile);
       
        $replaces = [
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
            ],
            [
                'text' => $exp[3],
                'replace' => '%WHATSAPP%'
            ],
            [
                'text' => $exp[4],
                'replace' => '%WHATSAPP_TEXT%'
            ],
            [
                'text' => $iframe,
                'replace' => '%IFRAME%'
            ],
            [
                'text' => $about_short,
                'replace' => '%ABOUT_SHORT%'
            ]
        ];

        foreach ($replaces as $r) {
            $text_footer = str_replace($r['replace'], $r['text'], $text_footer);
        }

        $myfile = fopen($footer, "w");
        fwrite($myfile, $text_footer);
        fclose($myfile);
    }
}