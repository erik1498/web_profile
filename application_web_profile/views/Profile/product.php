<section class="page-title">
    <div class="container position-relative d-flex align-items-center h-100">
        <h1 class="bolder-custom text-white">Produk Kami</h1>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L288,192L576,160L864,224L1152,160L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#7981ce" fill-opacity="1" d="M0,256L288,192L576,160L864,224L1152,160L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L288,192L576,96L864,224L1152,128L1440,96L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
</section>
<section class="product">
    <div class="container position-relative py-5 px-0">
        <div class="col-lg-12 pr-5">
            <div class="card rounded-0 border-0">
                <div class="card-body p-0">
                    <div class="row pb-4">
                        <div class="col-lg-12">
                            <img class="card-img-top" src="<?=base_url('assets_web_profile/img/produk/'.$produk['gambar'])?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="row mb-5 pb-5">
                        <div class="col-lg-12">
                            <h1 class="mb-3 bolder-custom"><?=$produk['judul']?></h1>
                            <textarea class="w-100 border-0" readonly><?=$produk['isi']?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>