<section class="page-title">
    <div class="container position-relative d-flex align-items-center h-100">
        <h1 class="bolder-custom text-white">Kontak Kami</h1>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L288,192L576,160L864,224L1152,160L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#7981ce" fill-opacity="1" d="M0,256L288,192L576,160L864,224L1152,160L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L288,192L576,96L864,224L1152,128L1440,96L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
</section>
<section class="blog">
    <div class="container position-relative py-5">
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="border-custom">Kantor Pusat</h1>
                        <p class="mt-4"><i class="fa fa-map-marker-alt"></i>%ADDRESS%</p>
                        <p class="mt-4"><i class="fa fa-phone"></i>%TELP%</p>
                        <p class="mt-4"><i class="fa fa-paper-plane"></i>%EMAIL%</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="<?=base_url('contact/sendKontakMessage')?>" method="post">
                    <h1 class="border-custom mb-5 mt-lg-0 mt-5">Hubungi Kami</h1>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input required name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pesan</label>
                        <textarea required class="form-control resize-none" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <button onclick="sendKontakMessage()" class="btn btn-primary bolder-custom">Kirim <i class="fa fa-paper-plane text-white"></i></button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">        
                <h1 class="border-custom mb-5">Lokasi Maps</h1>
                %IFRAME%
            </div>
        </div>
    </div>
</section>