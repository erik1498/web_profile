        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title">Notifikasi</h5>
                    </div>
                    <div class="modal-body">
                        <p>Email Anda Telah Terkirim</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script>
            function sideScroll(element,direction,speed,distance,step){
                scrollAmount = 0;
                var slideTimer = setInterval(function(){
                    if(direction == 'left'){
                        element.scrollLeft -= step;
                    } else {
                        element.scrollLeft += step;
                    }
                    scrollAmount += step;
                    if(scrollAmount >= distance){
                        window.clearInterval(slideTimer);
                    }
                }, speed);
            }
            $(document).ready(() => {
                $(".scroll-nav").on("click", ({currentTarget}) => {
                    if($(currentTarget).hasClass('right')){                    
                        sideScroll($("."+currentTarget.dataset.target)[0],'right',25,390,50);
                    }else{                    
                        sideScroll($("."+currentTarget.dataset.target)[0],'left',25,390,50);
                    }
                })
                var fullscreen = false
                $(".btn-fullscreen").on("click", ({currentTarget}) => {
                    if (!fullscreen) {
                        document.documentElement.requestFullscreen();
                        currentTarget.innerHTML = `<i style="font-size:20px;" class="fa fa-compress"></i>`
                    }else{
                        document.exitFullscreen()
                        currentTarget.innerHTML = `<i style="font-size:20px;" class="fa fa-expand"></i>`
                    }
                    fullscreen = !fullscreen
                })
                $.each($('textarea'), (i, item) => {
                    $(item).removeClass('h-100')
                    item.style.height = item.scrollHeight + "px"
                })
                <?= $this->session->flashdata('alert') ;?>
            })
        </script>

    </body>
</html>  