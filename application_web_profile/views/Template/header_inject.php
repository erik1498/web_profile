<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="KEPS Consult">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
      .btn-primary, .btn-primary:hover{
        background-color:#7981ce;
        border:none;
      }
      .bg-primary{
        background-color:#7981ce !important;
      }
      textarea:not(.form-control) {
        resize: none;
        pointer-events: none;
      }
      .whatsapp-container {
        position: fixed;
        right: 0;
        bottom: 30px;
        text-align: center;
        padding: 15px;
        padding-left: 30px;
        z-index: 9;
        padding-right: 45px;
      }
      .whatsapp-container .img-container {
        border-radius: 50%;
        display: inline-block;
        background: #25D366;
        padding: 10px;
      }
      .whatsapp-container img {
        width: 35px;
      }
      *{
        font-size:13px;
        margin:0px;
        padding:0px;
        box-sizing:border-box;
      }
      ::-webkit-scrollbar {
          width: 0px;
      }

      ::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 0px rgba(0,0,0,0.3);
      }

      ::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 0px solid slategrey;
      }
      .bottom-0{
        bottom:0;
      }
      .right-0{
        right:0;
      }
      .recent-blog{
        list-style:none;
      }
      i {
        color : #7981ce !important;
      }
      .recent-blog li {
        margin-bottom:30px;
      }
      .category-blog{
        padding-left:30px;
      }
      .recent-blog a, .recent-blog a:hover, .category-blog a, .category-blog a:hover{
        all:unset;
        color:inherit;
        font-size:13px;
        cursor: pointer;
      }
      p{
        margin:0px;
        padding:0px;
      }
      .header a, .header a:hover, footer a, footer a:hover{
        all:unset;
        color:inherit;
        font-size:13px;
        cursor: pointer;
        font-weight:600;
      }
      .fa-phone{
        rotate:100deg;
      }
      i{
        margin-right:5px;
        color:#7981ce;
      }
      #logo{
        width:150px;
        height:55px;
      }
      .nav-item{
        font-size:15px;
        padding:20px 20px;
        font-weight:700;
      }
      .hero{
        height: 70vh;
        display: flex;
        background-image:url("<?=base_url('assets_web_profile/img/hero2.jpg')?>");
        background-position: top;
        background-size: cover;
        background-repeat: no-repeat;
      }
      .hero h1{
        font-size: 40px;
        font-weight: 700;
      }
      .hero .card {
        width:30vw;
        border:0;
        border-radius:0px;
        padding:50px;
        height:fit-content;
      }
      .btn-about, .btn-about:hover{
        width: fit-content;
        background-color: #7981ce;
        font-weight: 800;
        border-radius: 0;
        color: white;
        padding:15px 55px;
      }
      .services .card-img, .services .card-img-top{
        height:200px;
      }
      .contant-section h2{
        font-weight:700;
      }
      .contant-section button{
        font-weight:700;
      }
      .resize-none {
        resize: none;
      }
      .bolder-custom{
        font-weight:700;
      }
      .about h1{
        font-size:40px;
      }
      .about-list .about-list-column ul{
        margin-top: 10px;
        margin-left: 30px;
        list-style: none;
      }
      .about-list .about-list-column ul li{
        line-height: 30px;
        font-size:12px;
        position: relative;
      }
      .about-list .about-list-column ul li:before {
        position: absolute;
        content: '';
        width: 12px;
        height: 12px;
        left: -30px;
        top: 50%;
        margin-top: -5px;
        border: 2px solid #777;
      }
      .about-img{
        width: -webkit-fill-available;
        height: -webkit-fill-available;
      }
      footer li{
        margin-bottom:10px;
      }
      .vertical-list-container{
        overflow:scroll;
      }
      .pointer{
        cursor:pointer;
      }
      html {
        scroll-behavior: smooth;
      }
      .scroll-nav{
        cursor: pointer;
        position: absolute;
        top: 60%;
        z-index: 99;
        padding: 20px 11px 14px 6px;
      }
      .scroll-nav.right{
        right:15px;
      }
      .vertical-list{
        display:inline-flex;
      }
      .vertical-list .card{
        margin-right:30px;
      }
      .vertical-list .card::nth-last-child(){
        margin-right:0px;
      }
      .bg-highlight{
        background-color:#f0f0f0;
      }
      .page-title svg{
        position: absolute;
        bottom:0;
        opacity: .5;
        z-index: 0;
      }
      .page-title::before{
        content:'';
        position: absolute;
        top:0;
        bottom:0;
        left:0;
        right:0;
        background-color: rgba(0,0,0,.5);
      }
      .page-title{
        position: relative;
        height:280px;
        background-image:url('<?=base_url('assets_web_profile/img/page-title-bg.jpg')?>');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -1;
      }
      .page-title h1{
        font-size:60px;
        z-index: 2;
      }
      .fixedElementTop {
        z-index: 999 !important;
      }
      @media screen and (max-width:900px){
        .hero .card {
          width:60vw;
          border:0;
          border-radius:0px;
          padding:50px;
          height:fit-content;
        }
      }

      @media screen and (max-width:768px){
        .navbar-light .navbar-toggler{
          border-color:transparent;
        }
        .testimoni .carousel-item h5{
          font-size:14px;
        }
        .testimoni .carousel-item h3{
          font-size:20px;
        }
        .page-title h1{
          font-size:30px;
        }
        .page-title{
          height:100px;
        }
        .whatsapp-container {
          padding-right: 15px;
        }
        .hero{
          height: 40vh;
          display: flex;
          padding-bottom:20px;
          background-image:url("<?=base_url('assets_web_profile/img/hero2.jpg')?>");
          background-position: top;
          background-size: cover;
          background-repeat: no-repeat;
        }
        .hero .container{
          align-items:end!important;
        }
        .hero h1{
          font-size: 15px;
          font-weight: 700;
        }
        .about h1{
          font-size:20px;
        }
        .hero p{
          font-size: 10px;
        }
        .nav-item{
          padding:10px 0px;
        }
        .hero .card {
          width:100%;
          border:0;
          border-radius:0px;
          padding:20px;
          height:fit-content;
          margin-top:30%;
        }
        .btn-about, .btn-about:hover{
          margin-top: 20px !important;
          padding:5px 10px;
        }
        .contant-section h2{
          font-size:13px;
        }
        .about-list .about-list-column ul{
          margin-top:0;
          margin-bottom:0;
        }
      }
    </style>
    
    <link href="<?=base_url('assets_web_profile/');?>lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>KEPS Consult | <?=$judul?></title>
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets_web_profile/img/icon.ico')?>">
  </head>
  <body>
    
    