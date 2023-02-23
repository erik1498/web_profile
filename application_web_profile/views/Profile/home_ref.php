<section class="hero">
    <div class="container position-relative d-flex align-items-center">
        <div class="card shadow">
            <h1 class="bg-white text-dark">%TITLE_TEXT%</h1>
            <p class="mt-4">%SUB_TEXT%</p>
            <a href="<?=base_url('about')?>" class="btn btn-about btn-primary mt-5">LEBIH LANJUT<i class="fa fa-arrow-right text-white ml-2"></i></a>
        </div>
    </div>
</section>
<section class="contant-section bg-primary">
    <div class="container position-relative py-lg-5 py-0">
        <div class="row py-5">
            <div class="col-lg-9 col-sm-6">
                <h2 class="text-white">%TEXT_CONTACT_1%</h2>
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
                <p class="mt-4">%ABOUT_SHORT%</p>
                <div class="row about-list mt-5">
                    %DAFTAR_ABOUT_LIST%
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
%SERVICES_LIST%
<section class="contant-section bg-white">
    <div class="container position-relative py-lg-5 py-0">
       <form action="<?=base_url('home/sendEmailCall')?>" method="post">
            <div class="row py-5">
                <div class="col-lg-6 col-sm-6">
                    <h4 class="text-dark">%TEXT_CONTACT_2%</h4>
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
%TESTIMONI%
%BLOG_LIST%