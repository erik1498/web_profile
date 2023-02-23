<div class="container-fluid bg-dark text-white">
      <div class="container px-lg-4 px-0 container-xl">
        <div class="row py-3 header">
          <div class="col-lg-10 col-9">
            <div class="row">
              <div class="col-lg-2 d-flex align-items-center">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="">( 0380 ) 846 0360</a>
              </div>
              <div class="col-lg-3 d-flex align-items-center">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <a href="">finacctax.cons@gmail.com</a>
              </div>
              <div class="col-lg-3 d-flex align-items-center">
                <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                <a href="">Jl. Fetor Foenay</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 d-flex col-3 justify-content-end align-items-center">
            <span class="bg-dark btn-fullscreen pointer text-white border-0"><i style="font-size:20px;" class="fa fa-expand"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid shadow-sm fixedElementTop sticky-top bg-white">
      <div class="container px-lg-4 px-0">
        <nav class="navbar navbar-expand-lg navbar-light px-0 py-3">
          <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url('assets_web_profile/img/logo.jpg')?>" alt="Logo" id="logo"></a>
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?=$sidebar == "Home" ? "active" : ""?>">
                <a class="nav-link" href="<?=base_url()?>">BERANDA</a>
              </li>
              <li class="nav-item <?=$sidebar == "About" ? "active" : ""?>">
                <a class="nav-link" href="<?=base_url('about')?>">TENTANG  <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?=$sidebar == "Services" ? "active" : ""?>">
                <a class="nav-link" href="<?=base_url('services')?>">LAYANAN</a>
              </li>
              
                    <li class="nav-item dropdown <?=$sidebar == "Product" ? "active" : ""?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PRODUK
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="http://localhost/web_profile/product/detail/6">TAX PLANING</a>
                    </div>
                </li>
              <li class="nav-item <?=$sidebar == "Blog" ? "active" : ""?>">
                <a class="nav-link" href="<?=base_url('blog')?>">ARTIKEL</a>
              </li>
              <li class="nav-item <?=$sidebar == "Contact" ? "active" : ""?>">
                <a class="nav-link" href="<?=base_url('contact')?>">KONTAK</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>