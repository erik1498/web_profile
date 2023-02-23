<section class="page-title">
    <div class="container position-relative d-flex align-items-center h-100">
        <h1 class="bolder-custom text-white">Artikel Kami</h1>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L288,192L576,160L864,224L1152,160L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#7981ce" fill-opacity="1" d="M0,256L288,192L576,160L864,224L1152,160L1440,288L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L288,192L576,96L864,224L1152,128L1440,96L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
</section>
<section class="blog">
    <div class="container position-relative py-5">
        <div class="row">
            <div class="col-lg-9 pr-lg-5">
                <?php foreach ($artikel as $a) { ?>
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <img class="card-img-top" src="<?=base_url('assets_web_profile/img/artikel/'.$a['gambar'])?>" alt="Card image cap">
                                    <small class="text-muted d-flex justify-content-between pt-4">
                                        <p><i class="fa fa-calendar-alt"></i><?=getTanggal($a['tanggal'])?></p>
                                        <p><i class="fa fa-list-alt"></i><?=$a['nama_kategori']?></p>
                                    </small>
                                </div>
                                <div class="col-lg-5">
                                    <div class="pb-5 pb-lg-0">                                        
                                        <h5 class="p-0 mb-4 mt-lg-0 mt-4"><?=$a['judul'];?></h5>
                                        <textarea class="w-100 h-100 border-0 mt-3" readonly><?=substr($a['isi'], 0, 150)?>...</textarea>
                                    </div>
                                    <a href="<?=base_url('index.php/Profile/blog_detail/'.$a['id_artikel'])?>" class="btn btn-primary rounded-0 position-absolute bottom-0">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php } ?>
                <div class="row mb-lg-0 mb-5">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php for ($i=0; $i < $page; $i++) { ?>
                                    <li class="page-item">
                                        <a class="page-link <?=$i == ( $page_index ) ? 'bg-dark text-white' : '' ?>" href="<?=base_url('blog/index/'.$i)?>"><?=$i + 1?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 border-left">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 border-0">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" name="search" aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="input-group-text btn-primary cursor-pointer" id="basic-addon2" onclick="search()">
                                        <i class="fa fa-search m-0 text-white"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <h3 class="mb-4">Recent Blog</h3>
                        <ul class="recent-blog">
                            <?php foreach ($artikel_recent as $a) { ?>
                                <li class="mt-5">
                                    <a href="<?=base_url('index.php/Profile/blog_detail/'.$a['id_artikel'])?>" class="mb-3"> 
                                        <img style="float:left; margin-right:15px;" src="<?=base_url('assets_web_profile/img/artikel/'.$a['gambar'])?>" width="110" alt="Card image cap">
                                        <b><?=$a['judul']?></b>
                                    </a>
                                    <small class="text-muted mt-4">
                                        <p><i class="fa fa-calendar-alt"></i> <?=getTanggal($a['tanggal'])?></p>
                                    </small>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="mb-3 mt-5">Category</h3>
                        <ul class="category-blog">
                            <?php foreach ($kategori as $a) { ?>
                                <li>
                                    <a href="<?=base_url('index.php/blog/index/0/'.$a['id_kategori'])?>"><?=$a['nama_kategori']?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function search() {
        window.location.href = `<?=base_url('blog/index/0/0/')?>${$('input[name="search"]').val()}`
    }
</script>