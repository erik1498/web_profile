        <section>
            <footer>
                <div class="container-fluid bg-dark py-5 px-0 text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="pb-4 pt-lg-0 pt-5 border-bottom">KEPS Consult</h4>
                                <p class="pt-5">%ABOUT_SHORT%</p>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="pb-4 pt-lg-0 pt-5 border-bottom">Navigasi Link</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="pt-5 px-4">
                                            <li><a href="<?=base_url()?>">Beranda</a></li>
                                            <li><a href="<?=base_url('about')?>">Tentang</a></li>
                                            <li><a href="<?=base_url('services')?>">Layanan</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="pt-lg-5 px-4">
                                            <li><a href="<?=base_url('blog')?>">Artikel</a></li>
                                            <li><a href="<?=base_url('contact')?>">Kontak</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="pb-4 pt-lg-0 pt-5 border-bottom">Kontak Kami</h4>
                                <div class="row pt-5">
                                    <div class="col-lg-12 pb-3 d-flex align-items-center">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="">%TELP%</a>
                                    </div>
                                    <div class="col-lg-12 pb-3 d-flex align-items-center">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        <a href="">%EMAIL%</a>
                                    </div>
                                    <div class="col-lg-12 pb-3 d-flex align-items-center">
                                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                                        <a href="">%ADDRESS%</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($sidebar != "Contact") { ?>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <h4 class="pb-4 mb-5 pt-lg-0 pt-5 border-bottom">Lokasi Kami</h4>
                                        %IFRAME%
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg-primary p-5 text-center text-white">
                    <h4 class="font-weight-bold">&copy; 2021 Copyright KEPS Consult</h4>
                </div>
            </footer>
            <div class="whatsapp-container">
                <a target="_blank" href="https://wa.me/%WHATSAPP%?text=%WHATSAPP_TEXT%">
                    <div class="img-container">
                        <img src="<?=base_url('assets_web_profile/img/wa-transparent.png')?>" alt="Anda Whatsapp">
                    </div>
                </a>
            </div>
        </section>