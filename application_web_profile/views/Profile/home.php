<section class="hero">
    <div class="container position-relative d-flex align-items-center">
        <div class="card shadow">
            <h1 class="bg-white text-dark">Tingkatkan Bisnis Anda</h1>
            <p class="mt-4">Kami dapat membantu memelihara dan memodernisasi infrastruktur akuntansi Anda dan menyelesaikan berbagai masalah khusus keuangan yang anda dihadapi.</p>
            <a href="<?=base_url('about')?>" class="btn btn-about btn-primary mt-5">LEBIH LANJUT<i class="fa fa-arrow-right text-white ml-2"></i></a>
        </div>
    </div>
</section>
<section class="contant-section bg-primary">
    <div class="container position-relative py-lg-5 py-0">
        <div class="row py-5">
            <div class="col-lg-9 col-sm-6">
                <h2 class="text-white">Ketahui Tentang Accounting, Tax, Software IT dan Business Consultant Lebih Lanjut.</h2>
            </div>
            <div class="col-lg-3 col-sm-12 d-flex justify-content-lg-end mt-lg-0 mt-3">
                <button onclick="window.location.href = `<?=base_url('contact')?>`" class="btn px-5 py-2 btn-dark rounded-0">KONTAK KAMI</button>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container position-relative py-5">
        <div class="row py-5">
            <div class="col-lg-8">
                <h5 class="mt-5">KEPS Consult</h5>
                <p class="mt-4">KEPS consult adalah kantor Konsultan Pajak, Akuntan dan Bisnis yang memberikan jasa profesional dalam menyelesaikan usaha anda serta membantu anda dalam SPT Bulanan dan Tahunan secara perorangan maupun perusahaan.</p>
                <div class="row about-list mt-5">
                    
                <div class="col-lg-4 about-list-column col-12">
                    <ul>
                        <li>ACCOUNTING</li>
                    
                        <li>TAX</li>
                    </ul>
                </div>
                <div class="col-lg-4 about-list-column col-12">
                    <ul>
                        <li>SOFWARE IT</li>
                    
                        <li>BUSINESS CONSULTANT</li>
                    </ul>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-primary rounded-0 bolder-custom py-3 px-5 mt-3">LEBIH LANJUT</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-4">
                <img src="<?=base_url('assets_web_profile/img/hero3.jpg')?>" class="about-img w-100 h-100">
            </div>
        </div>
    </div>
</section>

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
                                
            <div class="card bg-secondary border-0 rounded-0" style="width: 20rem;">
                <img src="http://localhost/web_profile/assets_web_profile/img/services/1672843373634.jpg" class="card-img-top" alt="ListImage">
                <div class="card-body px-0">
                    <h2>Konsultasi Pajak Online Proconsult</h2>
                    <p class="card-text">menyediakan layanan konsultasi pajak online maupun offline berkualitas dan profesional tinggi kepada klien. Layanan ini dapat dilakukan melalui berbagai call, meeting, dan email.</p>
                </div>
            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="contant-section bg-white">
    <div class="container position-relative py-lg-5 py-0">
       <form action="<?=base_url('home/sendEmailCall')?>" method="post">
            <div class="row py-5">
                <div class="col-lg-6 col-sm-6">
                    <h4 class="text-dark">Bila anda membutuhkan konsultan accounting, konsultan pajak, software IT dan konsultan bisnis</h4>
                    <p class="mt-3 text-muted mb-lg-0 mb-4">Informasikan email Anda, kami akan segera menghubungi.</p>
                </div>
                <div class="col-lg-6">
                    <div class="input-group mb-3">
                        <input required type="text" name="email" class="form-control rounded-0 p-4" placeholder="Alamat Email Anda" aria-label="Email Address" aria-describedby="button-addon2">
                        <button class="btn btn-primary rounded-0 px-5" id="button-addon2">
                        <i class="fa fa-paper-plane text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
       </form>
    </div>
</section>

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
        <div class="carousel-item active text-center p-4">
                <h5>Text Testimoni 1</h5>
                <h3 class="mt-5">Testimoni 1</h3>
            </div><div class="carousel-item text-center p-4">
                <h5>Text Testimoni 2</h5>
                <h3 class="mt-5">Testimoni 2</h3>
            </div>
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
        
            <div class="card rounded-0 border-0" style="max-width:300px;">
                <img class="card-img-top" src="http://localhost/web_profile/assets_web_profile/img/artikel/1672843907978.jpg" alt="Card image cap">
                <div class="card-body px-0">
                    <h5 class="card-title">PAJAK PERTAMBAHAN NILAI ATAS PENYERAHAN RUMAH TAPAK DAN UNIT HUNIAN RUMAH SUSUN YANG DITANGGUNG PEMERINTAH</h5>
                    <p class="card-text">Penulis artikel adal...</p>
                    <a href="http://localhost/web_profile/Profile/blog_detail/25" class="btn btn-primary btn-sm mt-2">Read More</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <p><i class="fa fa-calendar-alt"></i> 04 Januari 2023</p>
                    </small>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>