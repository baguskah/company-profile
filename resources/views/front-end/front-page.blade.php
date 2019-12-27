<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <title>PT BLST | HOLDING COMPANY IPB</title>

    {{-- <!-- Bootstrap --> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> --}}
    {{-- <!-- Global site tag (gtag.js) - Google Analytics --> --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118960049-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118960049-1');
    </script>
    {{-- <!-- Google Tag Manager --> --}}
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WJL7VPQ');</script>
  <!-- End Google Tag Manager -->

  </head>
  <body>
        {{-- <!-- Google Tag Manager (noscript) --> --}}
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJL7VPQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    {{-- <!-- End Google Tag Manager (noscript) --> --}}
    {{-- Slider --}}
    <div class="row">
      <div style="text-align:center" id="slider-navigation">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      <div class="slider-wrapper slider-desktop">
        <div class="mySlides" style="background:url({{asset('images/slider/hero3.jpg')}});background-size: auto 100%; background-position: center;">
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
                      {{-- <div id="language-switcher-warper">
                        <select class="select-lg-transparent" name="">
                          <option value="">ID</option>
                          <option value="">EN</option>
                        </select>
                      </div> --}}
                      <div class="search-warper">
                        {{-- <span style="cursor:pointer" class="fa fa-search"></span> --}}
                      </div>
                    </div>
                  </div>
                  {{-- </div> --}}
                    {{-- <div class="">
                      <div class="tombol-menu">
                        <span class="menuspan">Menu</span>
                        <a href="#menu"
                        onclick="openNav()"
                        class="icMenu">
                          <span></span>
                          <span></span>
                          <span></span>
                        </a>
                      </div>
                    </div> --}}
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
        {{-- <li><a id="portfolio-bisnis-tab" data-toggle="pill" href="#portfolio-bisnis" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas" href="#">Portfolio Bisnis</a></li> --}}
        <li><a id="kepemilikan-saham-tab" data-toggle="pill" href="#kepemilikan-saham" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas" href="#">Kepemilikan Saham</a></li>
        <li><a id="visi-misi-tab" data-toggle="pill" href="#visi-misi" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas" href="#">Visi & Misi</a></li>
        <li><a id="manajemen-blst-tab" data-toggle="pill" href="#manajemen-blst" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas" href="#">Manajemen</a></li>
        <li><a id="struktur-blst-tab" data-toggle="pill" href="#struktur-blst" role="tab" aria-controls="home" aria-selected="true" class="nav-link tab-atas" href="#">Struktur Organisasi</a></li>

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
                          <a href="http://ipbtraining.com" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          PT Global Scholarship Services Indonesia (GSSI),
                          berdiri pada tanggal 12 Maret 2009 dengan maksud dan
                          tujuan menjalankan kegiatan usaha dalam bidang jasa Pendidikan.
                          pada akhir Desember 2014, sebanyak 70% kepemilikan
                          saham dihibahkan kepada PT BLST disertai perubahan pengurusan
                          <br><br>
                          Saat ini GSSI memiliki aktivitas utama yakni menyalurkan
                          kepakaran IPB kepada masyarakat luas melalui penyelenggaraan
                          training-training berbasis applied llife sciene dengan
                          merek dagang IPB International Certified training
                          "
                          >
                            Global Scholarship Services Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>certified training</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Berdirinya PT. IPB Shigeta pada tahun 2004 merupakan
                          inisiasi dan upaya nyata dari FKH IPB untuk menciptakan Satuan Usaha Komersial (SUK)
                          sebagai revenue generating unit bagi FKH IPB khususnya dan IPB pada umumnya.
                          <br><br>
                          Tujuan pendirian PT IPB Shigeta antara lain untuk
                          membantu pemerintah Indonesia dalam upaya penanggulangan penyakit
                          Avian Influenza (AI) pada unggas melalui produksi vaksin inaktif AI H5N1
                          menggunakan teknologi Reverse Genetic (RG).

                          ">
                            IPB Shigeta
                          </a>
                        </div>
                        <div class="">
                          <i>produksi vaksin flu burung</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="https://www.tokopedia.com/fitsmandir" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Bermula dari sebuah program bernama Food Industrial Teaching System (FITS)
                          yang dibentuk oleh Jurusan Teknologi Pangan IPB untuk
                          membantu para mahasiswanya memahami lebih dalam tentang dunia industri pangan di lingkungan kampus.
                          <br><br>
                          PT FITS Mandiri pun kemudian didirikan secara resmi
                          pada 19 Mei 2000 demi mendukung kegiatan pengembangan dan
                          produksi prpoduk pangan secara komersial pada skala yang lebih besar.
                          Kemudian pada tahun 2015 aktivitas produksi dan manajemen
                          diserahkan ke PT BLST dan menjadikannya perusahaan yang
                          memiliki visi menjadi perusahaan pusat pengembangan produk pangan fungsional
                          ">
                            FITS Mandiri
                          </a>
                        </div>
                        <div class="">
                          <i>functional food</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Merupakan sub unit yang memproduksi material biologis dari Fetus Macacca Fascicularis (Monyet Ekor Panjang)
                          Untuk vaksin polio yang di absorb oleh Biofarma.
                          Selain Vaksin Polio, Juga diproduksi antibodi untuk
                          Avian Influenza (AI)/Flu Burung. Aktivitas penelitian dan pengembangan produk sepenuhnya dilaksanakan oleh pusat studi satwa Primata.
                          <br><br>
                          Sedangkan penelitian dan pengembangan antibodi yg dilaksanakan di laboratorium IPB Bioscience Industry BLS dan Bagian mikrobiologi Medik Fakultas Kedokteran Hewan, IPB

                          ">
                            Biomedical Technology Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>material biologis vaksin polio</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="http://www.serambibotani.com/" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Serambi Botani sebagai gerai pelopor yang menyediakan
                          produk-produk lokal berkonsep alami dan sehat bagi masyarakat.
                          Didirikan sebagai salah satu unit bisnis PT BLST pada
                          tanggal 7 agustus 2009 ditandai dengan pembukaan gerai
                          pertamanya di mall Botani Square. Seiring dengan perkembangan bisnis
                          Serambi Botani sudah membuka lebih dari 12 gerai yang tersebar di jabodetabek, Jawa Tengah, Jawa Timur, dan Sumatera Selatan

                          ">
                            Serambi Botani Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>ritel produk sehat alami</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Botani Seed Indonesia (BOSI) adalah perusahaan yang bergerak dalam sektor perbenihan.
                          Kami berkomitmen menjadi perusahaan yang turut serta mendukung komersialisasi hasil inovasi IPB dalam bidang pertanian.
                          <br><br>
                          BOSI berdiri sejak tahun 2016, dengan fokus kegiataan saat ini adalah produksi dan penjualan benih.
                          ">
                            Botani Seed Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>produksi benih</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          PT Agri Lestari Indoneia (ALIN) adalah perusahaan yang bergerak dalam bidang perdagangan
                          hasil pertanian dan kesehatan hewan. ALIN berkomitmen
                          menjadi perusahaan yang turut serta mendukung komersialisasi
                          hasil Inovasi IPB dalam bidang peternakan, kesehatan hewan dan perdagangan
                          <br><br>
                          ALIN beridiri sejak tahun 2016, dengan fokus kegiatan
                          saat ini adalah produksi dan penjalan feed additive ternak perah
                          berbahan dasar alami untuk membantu meningkatkan produktivitas pada ternak ruminansia
                          ">
                            Agri Lestari Indonesia
                          </a>
                        </div>
                        <div class="">
                          <i>feed additives</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Pada tahun 2015, PT Primakelola Agribisnis Agroindustri
                          berganti nama menjadi PT Prima Kelola IPB yang memiliki
                          program kegiatan seperti pelatihan, konsultasi, penelitian terapan,
                          pembinaan, monitoring dan evaluasi, ontrak manajemen, serta kerja sama investasi.
                          ">
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
                          <a href="http://www.ipbsciencepark.com/" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          IPB Science Park merupakan kawasan untuk mendukung
                          pengembangan dan komersialisasi hasil inovasi produk
                          dan jasa bidang pertanian tropis, pangan, dan biosains
                          dengan dukungan infrastruktur, bisnis, dan teknologi
                          untuk tiga kelompok bisnis inti BLST yaitu certified
                          training, consulting services, dan innovation products
                          ">
                            IPB Science Park
                          </a>
                        </div>
                        <div class="">
                          <i>kawasan bisnis komersial berbasis sains</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="https://www.ipbconventionhotel.com/" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Salah satu unit bisnis yang dimiliki oleh BLST adalah
                          IPB IICC dan IPB Convention Hotel yang memiliki 34 kamar
                          sebagai pendukung IPB IICC. Kedua unit ini kemudian digabungkan pada tahun 2014
                           dan mulai bersinergi di tahun 2015 untuk fullboard meeting residential
                          ">
                            IPB Convention Center and Hotel
                          </a>
                        </div>
                        <div class="">
                          <i>meeting, conference, exibition</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="https://ipbpress.com" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          PT IPB Press hadir sejak tahun 2009 sebagai perusahaan
                          penerbitan yang memiliki fokus menyalurkan ilmu dan hasil
                          riset penelitian kepada masyarakat luas agar tercipta
                          kemajuan industri pertanian, kelautan, dan biosains
                          tropika yang berdaya saing dan berkelanjutan.
                          ">
                            Penerbit IPB Press
                          </a>
                        </div>
                        <div class="">
                          <i>penerbitan dan percetakan</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Pada tahun 1996 ICMI Bogor memprakarsai berdirinya Bank Pembiayaan Rakyat Syariah (BPRS)
                          Bina Rahmah untuk menumbuhkan ekonomi masyarakat atas
                          dasar syariah islam dan membantu pengeloolaan dana
                          secara syariah Islam yang kaffaah. Kemudian pada tahun
                          2013 BPRS Bina Rahmah diakuisisi oleh BLST sehingga
                          terhitung dari tanggal tersebut resmi di bawah naungan holding company IPB ini.
                          ">
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
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Botani Square atau Bogor Botanical Square merupakan
                          salah satu pusat perbelanjaan terbesar dan terlengkap
                          di Kota Bogor. Oleh karena itu, tidak mengherankan jika
                          banyak kalangan dari berbagai usia memenuhi sudut mal,
                          baik untuk berbelanja, wisata kuliner, maupun hanya sekedar window shopping
                          <br><br>
                          BLST memgang peran sebagai pemilik saham dnegan proporsi
                          sebesar 20 % Mall yang diresmikan pada tahun 2006 in
                          dikelola oleh PT Bogor Anggana Cendekia yang didirikan sebagai persoroan terbatas
                          ">
                            Bogor Anggana Cendekia
                          </a>
                        </div>
                        <div class="">
                          <i>mal botani square</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Hotel Santika Bogor Merupakan salah satu hunian terbaik di Kota Bogor karena terletak di lokasi yang sangat strategis.
                          Masyarakat dapat menikmati fasiitas hunian kamar dalam lima unit kelas.
                          Diantara Hunian kamar tersebut yaitu 109 unit superior, 26 unit Deluxe, 10 unit Executive, 7 unit suite, dan 1 unit Presidential Suite

                          ">
                            Grahawita Cendekia
                          </a>
                        </div>
                        <div class="">
                          <i>hotel santika bogor</i>
                        </div>
                      </li>
                      <li>
                        <div style="margin:0px">
                          <a href="#" target="_blank" data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
                          data-original-title="
                          Plaza Botanical terletak melayani jasa perparkiran di kompleks
                          Baranang Siang Bogor baik untuk penggunaan fasilitas shuttle Damri Bandara Soekarno Hatta IPB Convention Hotel, maupun mau Botani Square
                          ">
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
        <div class="tab-pane fade" id="visi-misi" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4" style="padding-top: 97px; padding-left:50px">
                <div class="tagline-company " >
                  VISI
                </div>
                <p style="font-size: 15pt; text-align: center;" >Menjadi perusahaan induk IPB berbasis inovasi dan kepakaran
                  terbaik dan terdepan untuk kemajuan industri pertanian kelautan,
                  dan biosains tropika Indonesia yang berdaya saing dan berkelanjutan
                </p>

              </div>
              <div class="col-md-8 deskripsi-features" style="padding-top: 97px;">
                <div class="tagline-company ">
                  Misi
                </div>


                  <p class="column-3" style="line-height: 18px;">

                      Menghadirkan dan mengomersialkan inovasi dan kepakaran
                      terbaik IPB guna menciptakan masa depan industri pertanian,
                      kelautan, dan biosains tropika Indonesia yang lebih berdaya
                      saing dan berkelanjutan
                    <br><br>

                      Bekerja sama erat dan bersinergi dengan seluruh institusi
                      IPB dan lembaga lain dalam dan luar negeri dan proses
                      menghadirkan dan mengomersialkan inovasi dan kepakaran terbaik IPB.
                    <br><br>

                      Menumbuhkembangkan kewirausahaan generasi muda civitas
                      akademika dan alumni IPB serta masyarakat Indonesia,
                    <br><br><br>

                      Memberikan manfaat finansial bagi IPB untuk membangun institusi pendidikan yang berkelas dunia.
                    <br><br>

                      Memberikan nilai penghargaan dan apresiasi komersial bagi
                      inovasi dan kepakaran IPB untuk peningkatan kesejahteraan
                    <br><br>
                  </p>


              </div>

            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="manajemen-blst" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6" style="padding-top: 97px; padding-left:50px">
                <div class="tagline-company " >
                  DEWAN KOMISARIS
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="direksi-wrapper">
                      <div class="img-direksi">
                        <img src="{{asset('images/blstdir/prof-dr-erica-budiarti-laconi.jpg')}}" alt="">
                      </div>
                      <div class="title-direksi">
                        <h6>Komisaris Utama</h6>
                        <p>Prof Dr Erica Budiarti Laconi</p>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-md-4">
                    <div class="direksi-wrapper">
                      <div class="img-direksi">
                        <img src="{{asset('images/blstdir/prof-dr-ir-abdul-aziz-darwis.jpg')}}" alt="">
                      </div>
                      <div class="title-direksi">
                        <h6>Komisaris</h6>
                        <p>Prof Dr Ir Abdul Aziz Darwis, MSc (almarhum)</p>
                      </div>
                    </div>
                  </div> --}}
                  <div class="col-md-4">
                    <div class="direksi-wrapper">
                      <div class="img-direksi">
                        <img src="{{asset('images/blstdir/prof-dr-ir-Dudung Darusman.jpg')}}" alt="">
                      </div>
                      <div class="title-direksi">
                        <h6>Komisaris</h6>
                        <p>Prof Dr Ir Dudung Darusman</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="direksi-wrapper">
                      <div class="img-direksi">
                        <img src="{{asset('images/blstdir/Dr-Zulhamsyah-Imran.jpg')}}" alt="">
                      </div>
                      <div class="title-direksi">
                        <h6>Komisaris</h6>
                        <p>Dr Zulhamsyah Imran, M.Si</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 deskripsi-features" style="padding-top: 97px;">
                <div class="tagline-company " >
                  DIREKSI
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="direksi-wrapper">
                      <div class="img-direksi">
                        <img src="{{asset('images/blstdir/dr-meika-syahbana-rusli.jpg')}}" alt="">
                      </div>
                      <div class="title-direksi">
                        <h6>Direktur Utama</h6>
                        <p>Dr Meika Syahbana Rusli</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="direksi-wrapper">
                      <div class="img-direksi">
                        <img src="{{asset('images/blstdir/prof-drh-dondin-sajuthi-phd.jpg')}}" alt="">
                      </div>
                      <div class="title-direksi">
                        <h6>Direktur</h6>
                        <p>Prof drh Dondin Sajuthi, PhD</p>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="struktur-blst" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center" style="margin:40px">
                <div class="tagline-company" >
                  Struktur Organisasi
                </div>

                <img width="700px" src="{{asset('images/blstdir/blst-organization-structure.png')}}" class="img img-responsive" alt="">

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
        {{-- <div class="col-md-4 nopadding">
          <div class="content-box corporate-video" style="background:url({{asset('images/background/corporate-video-background.jpg')}}); color:white">
            <h2 class="content-box-head">Corporate <br>Video</h2>
            <div class="button-wraper">
              <span href="" data-toggle="modal" data-target="#corporate-video" class="btn">Play Video</span>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-md-4 nopadding">
          <div class="content-box dirut-section" style="background:url({{asset('images/background/direktur-utama-background.jpg')}}); color:white; background-size: cover;">
            <div class="dirut-quote">
              "BLST sebagai holding company Institut Pertanian Bogor (IPB) mengangkat konsep Science Park sebagai inkubator bisnis perusahaan"
            </div>
            <div class="dirut-name">
              <div class="name">
                Dr Meika Syahbana Rusli
                <div class="title">Direktur Utama</div>
              </div>

            </div>
          </div>
        </div> --}}
        <div class="col-md-12 nopadding">
          <div class="content-box download-front-section" style="color:white;">
            <h2 class="content-box-head" style="text-align: right;  width: 313px;float: right;position: absolute;right: 30px;">
              DOWNLOAD<br>BOOKLET<br>BLST</h2>
              <div class="download-annual" style="margin-top: 56px;">
                <img style="max-width: 98px; padding-bottom: 12px;" src="{{asset('images/background/booklet-blst.jpg')}}" class="" alt="">
              </div>
            <div class="button-wraper-black">
              <a href="http://ipbsciencetechnopark.com/blst/asset/booklet-blst.pdf" target="_blank">
                <span class="btn">Download</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid content-portfolio-business">
  <div class="row">
    <div class="col-sm-12">
      <div class="title-section">
        <h3>PORTFOLIO BISNIS</h3>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-md-6">
      <div class="tagline-company" style="font-size:27px">
        SCIENCE BASE
      </div>

      <div class="list-perusahaan column-2">
        <ol>
          {{-- @for ($i = 0; $i < 8; $i++) --}}
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/agri-lestari-indonesia.jpg')}}' alt='' width='510px'><br><br>
            PT Agri Lestari Indoneia (ALIN) adalah perusahaan yang bergerak dalam bidang perdagangan
            hasil pertanian dan kesehatan hewan. ALIN berkomitmen
            menjadi perusahaan yang turut serta mendukung komersialisasi
            hasil Inovasi IPB dalam bidang peternakan, kesehatan hewan dan perdagangan
            <br><br>
            ALIN beridiri sejak tahun 2016, dengan fokus kegiatan
            saat ini adalah produksi dan penjalan feed additive ternak perah
            berbahan dasar alami untuk membantu meningkatkan produktivitas pada ternak ruminansia
            ">
              <div style="margin:0px">
                <a href="#" target="_blank" >
                  Agri Lestari Indonesia
                </a>
              </div>
              <div class="">
                <i>feed additives</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/biomedical-technology.jpg')}}' alt='' width='510px'><br><br>

            Merupakan sub unit yang memproduksi material biologis dari Fetus Macacca Fascicularis (Monyet Ekor Panjang)
            Untuk vaksin polio yang di absorb oleh Biofarma.
            Selain Vaksin Polio, Juga diproduksi antibodi untuk
            Avian Influenza (AI)/Flu Burung. Aktivitas penelitian dan pengembangan produk sepenuhnya dilaksanakan oleh pusat studi satwa Primata.
            <br><br>
            Sedangkan penelitian dan pengembangan antibodi yg dilaksanakan di laboratorium IPB Bioscience Industry BLS dan Bagian mikrobiologi Medik Fakultas Kedokteran Hewan, IPB

            ">
              <div style="margin:0px">
                <a href="https://www.youtube.com/watch?v=KJS4tj-dzxU" target="_blank" >
                  Biomedical Technology Indonesia
                </a>
              </div>
              <div class="">
                <i>material biologis vaksin polio</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/botani-seed.jpg')}}' alt='' width='510px'><br><br>

            Botani Seed Indonesia (BOSI) adalah perusahaan yang bergerak dalam sektor perbenihan.
            Kami berkomitmen menjadi perusahaan yang turut serta mendukung komersialisasi hasil inovasi IPB dalam bidang pertanian.
            <br><br>
            BOSI berdiri sejak tahun 2016, dengan fokus kegiataan saat ini adalah produksi dan penjualan benih.
            ">
              <div style="margin:0px">
                <a href="https://web.facebook.com/Botaniseed/" target="_blank" >
                  Botani Seed Indonesia
                </a>
              </div>
              <div class="">
                <i>produksi benih</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/fits-mandiri.jpg')}}' alt='' width='510px'><br><br>


            Bermula dari sebuah program bernama Food Industrial Teaching System (FITS)
            yang dibentuk oleh Jurusan Teknologi Pangan IPB untuk
            membantu para mahasiswanya memahami lebih dalam tentang dunia industri pangan di lingkungan kampus.
            <br><br>
            PT FITS Mandiri pun kemudian didirikan secara resmi
            pada 19 Mei 2000 demi mendukung kegiatan pengembangan dan
            produksi prpoduk pangan secara komersial pada skala yang lebih besar.
            Kemudian pada tahun 2015 aktivitas produksi dan manajemen
            diserahkan ke PT BLST dan menjadikannya perusahaan yang
            memiliki visi menjadi perusahaan pusat pengembangan produk pangan fungsional
            ">
              <div style="margin:0px">
                <a href="https://web.facebook.com/fitsyourlifebetter.1/" target="_blank" >
                  FITS Mandiri
                </a>
              </div>
              <div class="">
                <i>functional food</i>
              </div>
            </li>

            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/ipb-training.jpg')}}' alt='' width='510px'><br><br>


            PT Global Scholarship Services Indonesia (GSSI),
            berdiri pada tanggal 12 Maret 2009 dengan maksud dan
            tujuan menjalankan kegiatan usaha dalam bidang jasa Pendidikan.
            pada akhir Desember 2014, sebanyak 70% kepemilikan
            saham dihibahkan kepada PT BLST disertai perubahan pengurusan
            <br><br>
            Saat ini GSSI memiliki aktivitas utama yakni menyalurkan
            kepakaran IPB kepada masyarakat luas melalui penyelenggaraan
            training-training berbasis applied llife sciene dengan
            merek dagang IPB International Certified training
            ">
              <div style="margin:0px">
                <a href="http://ipbtraining.com" target="_blank">
                  Global Scholarship Services Indonesia
                </a>
              </div>
              <div class="">
                <i>certified training</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/ipb-shigeta.jpg')}}' alt='' width='510px'><br><br>


            Berdirinya PT. IPB Shigeta pada tahun 2004 merupakan
            inisiasi dan upaya nyata dari FKH IPB untuk menciptakan Satuan Usaha Komersial (SUK)
            sebagai revenue generating unit bagi FKH IPB khususnya dan IPB pada umumnya.
            <br><br>
            Tujuan pendirian PT IPB Shigeta antara lain untuk
            membantu pemerintah Indonesia dalam upaya penanggulangan penyakit
            Avian Influenza (AI) pada unggas melalui produksi vaksin inaktif AI H5N1
            menggunakan teknologi Reverse Genetic (RG).

            ">
              <div style="margin:0px">
                <a href="#" target="_blank" >
                  IPB Shigeta
                </a>
              </div>
              <div class="">
                <i>produksi vaksin flu burung</i>
              </div>
            </li>

            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/prima-kelola.jpg')}}' alt='' width='510px'><br><br>


            Pada tahun 2015, PT Primakelola Agribisnis Agroindustri
            berganti nama menjadi PT Prima Kelola IPB yang memiliki
            program kegiatan seperti pelatihan, konsultasi, penelitian terapan,
            pembinaan, monitoring dan evaluasi, ontrak manajemen, serta kerja sama investasi.
            ">
              <div style="margin:0px">
                <a href="#" target="_blank" >
                  Prima Kelola IPB
                </a>
              </div>
              <div class="">
                <i>konsultan</i>
              </div>
            </li>

            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/serambi-botani.jpg')}}' alt='' width='510px'><br><br>


            Serambi Botani sebagai gerai pelopor yang menyediakan
            produk-produk lokal berkonsep alami dan sehat bagi masyarakat.
            Didirikan sebagai salah satu unit bisnis PT BLST pada
            tanggal 7 agustus 2009 ditandai dengan pembukaan gerai
            pertamanya di mall Botani Square. Seiring dengan perkembangan bisnis
            Serambi Botani sudah membuka lebih dari 12 gerai yang tersebar di jabodetabek, Jawa Tengah, Jawa Timur, dan Sumatera Selatan

            ">
              <div style="margin:0px">
                <a href="http://www.serambibotani.com/" target="_blank" >
                  Serambi Botani Indonesia
                </a>
              </div>
              <div class="">
                <i>ritel produk sehat alami</i>
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
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/bprs-binarahmah.jpg')}}' alt='' width='510px'><br><br>


            Pada tahun 1996 ICMI Bogor memprakarsai berdirinya Bank Pembiayaan Rakyat Syariah (BPRS)
            Bina Rahmah untuk menumbuhkan ekonomi masyarakat atas
            dasar syariah islam dan membantu pengeloolaan dana
            secara syariah Islam yang kaffaah. Kemudian pada tahun
            2013 BPRS Bina Rahmah diakuisisi oleh BLST sehingga
            terhitung dari tanggal tersebut resmi di bawah naungan holding company IPB ini.
            ">
              <div style="margin:0px">
                <a href="https://binarahmah.com/" target="_blank" >
                  BPRS Bina Rahmah
                </a>
              </div>
              <div class="">
                <i>pembiayaan syariah</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/ipb-sprk.jpg')}}' alt='' width='510px'><br><br>


            IPB Science Park merupakan kawasan untuk mendukung
            pengembangan dan komersialisasi hasil inovasi produk
            dan jasa bidang pertanian tropis, pangan, dan biosains
            dengan dukungan infrastruktur, bisnis, dan teknologi
            untuk tiga kelompok bisnis inti BLST yaitu certified
            training, consulting services, dan innovation products
            ">
              <div style="margin:0px">
                <a href="http://www.sciencepark-ipb.com/" target="_blank" >
                  IPB Science Park
                </a>
              </div>
              <div class="">
                <i>kawasan bisnis komersial berbasis sains</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/ipb-hotel-iicc.jpg')}}' alt='' width='510px'><br><br>

            Salah satu unit bisnis yang dimiliki oleh BLST adalah
            IPB IICC dan IPB Convention Hotel yang memiliki 34 kamar
            sebagai pendukung IPB IICC. Kedua unit ini kemudian digabungkan pada tahun 2014
             dan mulai bersinergi di tahun 2015 untuk fullboard meeting residential
            ">
              <div style="margin:0px">
                <a href="https://www.ipbconventionhotel.com/" target="_blank" >
                  IPB Convention Center and Hotel
                </a>
              </div>
              <div class="">
                <i>meeting, conference, exibition</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/ipb-press.jpg')}}' alt='' width='510px'><br><br>


            PT IPB Press hadir sejak tahun 2009 sebagai perusahaan
            penerbitan yang memiliki fokus menyalurkan ilmu dan hasil
            riset penelitian kepada masyarakat luas agar tercipta
            kemajuan industri pertanian, kelautan, dan biosains
            tropika yang berdaya saing dan berkelanjutan.
            ">
              <div style="margin:0px">
                <a href="#" target="_blank" >
                  Penerbit IPB Press
                </a>
              </div>
              <div class="">
                <i>penerbitan dan percetakan</i>
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
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/bac-ipb.jpg')}}' alt='' width='510px'><br><br>

            Botani Square atau Bogor Botanical Square merupakan
            salah satu pusat perbelanjaan terbesar dan terlengkap
            di Kota Bogor. Oleh karena itu, tidak mengherankan jika
            banyak kalangan dari berbagai usia memenuhi sudut mal,
            baik untuk berbelanja, wisata kuliner, maupun hanya sekedar window shopping
            <br><br>
            BLST memgang peran sebagai pemilik saham dnegan proporsi
            sebesar 20 % Mall yang diresmikan pada tahun 2006 in
            dikelola oleh PT Bogor Anggana Cendekia yang didirikan sebagai persoroan terbatas
            ">
              <div style="margin:0px">
                <a href="https://web.facebook.com/botanisquaremall/" target="_blank" >
                  Bogor Anggana Cendekia
                </a>
              </div>
              <div class="">
                <i>mal botani square</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/gwc-ipb.jpg')}}' alt='' width='510px'><br><br>


            Hotel Santika Bogor Merupakan salah satu hunian terbaik di Kota Bogor karena terletak di lokasi yang sangat strategis.
            Masyarakat dapat menikmati fasiitas hunian kamar dalam lima unit kelas.
            Diantara Hunian kamar tersebut yaitu 109 unit superior, 26 unit Deluxe, 10 unit Executive, 7 unit suite, dan 1 unit Presidential Suite

            ">
              <div style="margin:0px">
                <a href="#" target="_blank">
                  Grahawita Cendekia
                </a>
              </div>
              <div class="">
                <i>hotel santika bogor</i>
              </div>
            </li>
            <li data-toggle="tooltip" class="red-tooltip"  data-html="true" title=""
            data-original-title="
            <img src='{{asset('images/hoverimage/plaza-botani.jpg')}}' alt='' width='510px'><br><br>


            Plaza Botanical terletak melayani jasa perparkiran di kompleks
            Baranang Siang Bogor baik untuk penggunaan fasilitas shuttle Damri Bandara Soekarno Hatta IPB Convention Hotel, maupun mau Botani Square
            ">
              <div style="margin:0px">
                <a href="#" target="_blank" >
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

<div class="container-fluid content-portfolio-business">
  <div class="row">
    <div class="col-sm-12 no-padding footer-company">
      <div class="row">
        <div class="col-sm-3">
          <div class="logo-footer">
            <img src="{{asset('images/logo-company.png')}}" alt="">
          </div>
          <p>Holding Company of IPB</p>
        </div>
        <div class="col-sm-9">
          <h5>PT Bogor Life Science and Technology</h5>
          <p>Jl. Taman Kencana No.3, Babakan, Bogor Tengah, Kota Bogor, Jawa Barat 16128 <br> (0251) 8384422</p>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="corporate-video" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color !important:none;border:none !important">

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe id="video-company" class="embed-responsive-item" src="https://www.youtube.com/embed/wu9C6MFTRg4?rel=0&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


{{-- Stop Video --}}

<script type="text/javascript">
$("#corporate-video").on('hidden.bs.modal', function (e) {
       $("#corporate-video iframe").attr("src", $("#corporate-video iframe").attr("src"));
   });
</script>

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

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({animation: false,html: true});
});
</script>


  </body>
</html>
