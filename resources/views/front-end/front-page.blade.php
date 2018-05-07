<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <title>PT BLST</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    {{-- Slider --}}
    <div class="row">
      <div style="text-align:center" id="slider-navigation">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      <div class="slider-wrapper slider-desktop">
        <div class="mySlides" style="background:url({{asset('images/slider/hero2.jpg')}});background-size: auto 100%; background-position: center;">
          {{-- <img class="img img-responsive" src="{{asset('images/slider/hero2.jpg')}}" style="width:100%"> --}}
          <div class="container-fluid">
            <div class="text">
              <div class="">
                <span class="mean_cap">Menuju Sciencepark No 1</span>
                <span class="sub_cap">di Indonesia</span>
                <!-- <a href="#" class="btn_details"><span>More Details</span> <img src="img/btn_arrow.png" alt="" class="arrow"></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    {{-- Bagian Atas --}}
<div class="container-fluid" id="slider-wrapper" style="">
      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12 header">
              <div class="row">
                {{-- Logo --}}
                <div class="col-md-4 col-xs-6">
                  <div id="logo-perusahaan-warper">
                    <img id="logo"class="img img-responsive" src="{{asset('images/logo-company-white.png')}}" alt="">
                  </div>
                </div>

                {{-- Menu Atas --}}
                <div class="col-md-4 hide-tablet" style="display:none">
                  <div class="nav navbar" id="navbarNav">
                    <ul class="">
                      <li>
                        <a href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li>
                        <a href="#">Features</a>
                      </li>
                      <li>
                        <a href="#">Pricing</a>
                      </li>
                      <li>
                        <a href="#">Disabled</a>
                      </li>
                    </ul>
                  </div>
                </div>

                {{-- Search --}}
                <div class="col-md-4 col-xs-6" id="menu-kanan">
                  {{-- <div class="right-header-panel"> --}}
                  <div class="row">
                    <div class="col-md-6 push-right">

                    </div>
                    <div class="col-md-6">
                      <div id="language-switcher-warper">
                        <select class="select-lg-transparent" name="">
                          <option value="">ID</option>
                          <option value="">EN</option>
                        </select>
                      </div>
                      <div class="search-warper">
                        <span style="cursor:pointer" class="fa fa-search"></span>
                      </div>
                    </div>
                  </div>
                  {{-- </div> --}}
                    <div class="">
                      <div class="tombol-menu">
                        <span class="menuspan">Menu</span>
                        <a href="#menu"
                        {{-- onclick="openNav()"  --}}
                        class="icMenu">
                          <span></span>
                          <span></span>
                          <span></span>
                        </a>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>

    {{-- Menu Slider Samping --}}
    <div id="mySidenav" class="sidenav">
        <div class="sidenav-header" id="header-menu-title">
          <span class="nav-title">Menu</span>
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>

        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>

        <div class="sidenav-footer">
          <div class="logo-menu-button">
            <img class="img" src="{{asset('images/logo-company.png')}}" alt="">
          </div>
          <div class="logo-medsos">

            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-twitter-square"></i>
            <i class="fa fa-instagram"></i>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        function openNav() {
          $('#mySidenav').css('width', "300px");
        }

        function closeNav() {
          $('#mySidenav').css('width', "0px");
        }
      </script>
</div>

<div class="container" style="display:none">
  <div class="row">
    <div class="col-md-2">
      <h2 class="up-head-bold">Seputar</h2>
      <h2 class="down-head-bold">BLST</h2>
    </div>

      <div class="col-md-10 column berita-terakhir-content no-padding">
          <!-- Content Slider -->
          <div class="flex-viewport">
            <ul class="slides-berita" id="slide-beritanya">
              <li class="li-slide-berita" >
                <div class="berita-list" style="position:relative">
                  <div class="category-company-wrapper">
                    <span class="tag-company">BLST</span>
                    <span class="date-berita">18 Maret 2018</span>
                  </div>
                  <a href="#">
                    BLST MENGGANDENG ADARO SEBAGAI SPONSOR UTAMA
                  </a>
                </div>
              </li>
              <li class="li-slide-berita" >
                <div class="berita-list" style="position:relative">
                  <div class="category-company-wrapper">
                    <span class="tag-company">BLST</span>
                    <span class="date-berita">18 Maret 2018</span>
                  </div>
                  <a href="#">
                    BLST MENGGANDENG ADARO SEBAGAI SPONSOR UTAMA
                  </a>
                </div>
              </li>
              <li class="li-slide-berita" >
                <div class="berita-list" style="position:relative">
                  <div class="category-company-wrapper">
                    <span class="tag-company">BLST</span>
                    <span class="date-berita">18 Maret 2018</span>
                  </div>
                  <a href="#">
                    BLST MENGGANDENG ADARO SEBAGAI SPONSOR UTAMA
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- navigasi -->
          <ul class="flex-direction-nav">
            <li class="flex-nav-next">
              <span style="cursor:pointer" id="geserkanan" onclick="geserKanan()" class="flex-prev " href=""></span>
            </li>
            <li class="flex-nav-prev">
              <span style="cursor:pointer; display:none" id="geserkiri" class="flex-next" onclick="geserKiri()" ></span>
            </li>
          </ul>
          <script type="text/javascript">
            function geserKanan() {
              $('#slide-beritanya').css('transform','translate3d(-633px,0px,0px)');
              $('#geserkanan').hide();
              $('#geserkiri').show();
            }
            function geserKiri() {
              $('#slide-beritanya').css('transform','translate3d(0px,0px,0px)');
              $('#geserkanan').show();
              $('#geserkiri').hide();
            }
          </script>
        </div>
  </div>
</div>

{{-- Start About BLST section --}}
<div class="container-fluid short-desc-wrapper home-content-header">
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills nav-fill tab-atas-short-desc">
        <li class="nav-link title-company">PT BLST</li>
        <li><a id="tentang-kami-tab" data-toggle="pill" href="#tentang-kami" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas active" href="#">Tentang Kami</a></li>
        <li><a id="portfolio-bisnis-tab" data-toggle="pill" href="#portfolio-bisnis" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas" href="#">Portfolio Bisnis</a></li>
        <li><a id="kepemilikan-saham-tab" data-toggle="pill" href="#kepemilikan-saham" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas" href="#">Kepemilikan Saham</a></li>
      </ul>

      <div class="tab-content tab-wrapper-tentang-kami" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tentang-kami" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 featured-profile-image">
                {{-- KOLOM 1 --}}
                <div class="tagline-company">
                  AGGRESSIVE <br>
                  NEW <br>
                  GROWTH
                </div>

                <img class="img img-responsive" src="{{asset('images/slider/ipb-rektorat-background.jpg')}}" alt="">

              </div>
              <div class="col-md-6 deskripsi-features">
                {{-- KOLOM 2 --}}
                <p>PT Bogor Life Science and Technology (BLST) didirikan
                  tahun 2003 merupakan satuan usaha komersial dibawah IPB yang didirikan dengan
                  tujuan untuk mengelola aset IPB
                  (TAP 18/MWA–IPB/2003). BLST melaksanakan usaha
                  berdasarkan kepakaran
                  yang berhubungan dengan
                  Ilmu alam dan teknologi
                  di bidang produksi, jasa, dan konsultan.
                </p>
                {{-- <a href="#" class="btn btn-selengkapnya">Selengkapnya</a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade " id="portfolio-bisnis" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="container-fluid">
            <div class="row">

              <div class="col-md-6">
                <div class="tagline-company" style="font-size:27px">
                  SCIENCE BASE
                </div>
                <div class="list-perusahaan column-2">
                  <ol>
                    {{-- @for ($i = 0; $i < 8; $i++) --}}
                      <li>
                        <div style="margin:0px">
                          <a href="http://ipbtraining.com" target="_blank">
                            Global Scholarship Services Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>certified training</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            IPB Shigeta
                          </a>
                        </div>
                        <div class="">
                          <i>produksi vaksin flu burung</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="https://www.tokopedia.com/fitsmandir" target="_blank">
                            FITS Mandiri
                          </a>
                        </div>
                        <div class="">
                          <i>functional food</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Biomedical Technology Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>material biologis vaksin polio</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="http://www.serambibotani.com/" target="_blank">
                            Serambi Botani Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>ritel produk sehat alami</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Botani Seed Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>produksi benih</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Agri Lestari Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>feed additives</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Prima Kelola IPB
                          </a>
                        </div>
                        <div class="">
                          <i>konsultan</i>
                        </div>
                      </li>
                    {{-- @endfor --}}
                  </ol>
                </div>
              </div>
              <div class="col-md-3">
                <div class="tagline-company" style="font-size:27px">
                  SERVICE BASE
                </div>
                <div class="list-perusahaan">
                  <ol>
                    {{-- @for ($i = 0; $i < 4; $i++) --}}
                      <li>
                        <div style="margin:0px">
                          <a href="http://www.ipbsciencepark.com/" target="_blank">
                            IPB Science Park
                          </a>
                        </div>
                        <div class="">
                          <i>kawasan bisnis komersial berbasis sains</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="https://www.ipbconventionhotel.com/" target="_blank">
                            IPB Convention Center and Hotel
                          </a>
                        </div>
                        <div class="">
                          <i>meeting, conference, exibition</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Penerbit IPB Press
                          </a>
                        </div>
                        <div class="">
                          <i>penerbitan dan percetakan</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            BPRS Bina Rahmah
                          </a>
                        </div>
                        <div class="">
                          <i>pembiayaan syariah</i>
                        </div>
                      </li>
                    {{-- @endfor --}}
                  </ol>
                </div>
              </div>
              <div class="col-md-3">
                <div class="tagline-company" style="font-size:27px">
                  ASSET BASE
                </div>
                <div class="list-perusahaan">
                  <ol>
                    {{-- @for ($i = 0; $i < 4; $i++) --}}
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Bogor Anggana Cendekia
                          </a>
                        </div>
                        <div class="">
                          <i>mal botani square</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Grahawita Cendekia
                          </a>
                        </div>
                        <div class="">
                          <i>hotel santika bogor</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank">
                            Plaza Botani
                          </a>
                        </div>
                        <div class="">
                          <i>pool bus damri</i>
                        </div>
                      </li>
                    {{-- @endfor --}}
                  </ol>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="tab-pane fade" id="kepemilikan-saham" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="container">
            <div class="row">
            <div class="col-sm-3">
              <div class="tagline-company">
                SAHAM <br>
                BLST
              </div>
            </div>
            <div class="col-sm-3">
              <div class="box-shareholder">
                <div class="angka-shareholder">
                  <h4>24.997</h4>
                  <p>Shares</p>
                </div>
                <div class="logo-shareholder">
                  <img src="{{asset('images/logo/logo-ipb.png')}}" alt="">
                </div>
                <div class="title-shareholder">
                  <span>Bogor Agricultural University</span>
                </div>
                <div class="angka-shareholder-wrapper">
                  99.988 %
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="box-shareholder">
                <div class="angka-shareholder">
                  <h4>3</h4>
                  <p>Shares</p>
                </div>
                <div class="logo-shareholder">
                  <img src="{{asset('images/logo/logo-cooperative-ipb.png')}}" alt="">
                </div>
                <div class="title-shareholder">
                  <span>COOPERATIVE OF IPB EMPLOYEES</span>
                </div>
                <div class="angka-shareholder-wrapper">
                  0.012 %
                </div>
              </div>
            </div>

          </div>
          </div>

        </div>
      </div>


    </div>
  </div>
</div>

<div class="container-fluid content-main-home">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-xs-12">
      <div class="row">
        <div class="col-md-4 nopadding">
          <div class="content-box corporate-video" style="background:url({{asset('images/background/corporate-video-background.jpg')}}); color:white">
            <h2>Corporate <br>Video</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

{{-- script slider --}}
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>


  </body>
</html>
