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
    <div style="text-align:center" id="slider-navigation">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="slider-wrapper">
      <div class="mySlides">
        <img src="{{asset('images/slider/hero2.jpg')}}" style="width:100%">
        <div class="container">
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




    {{-- Bagian Atas --}}
<div class="container-fluid" style="background:grey">
      <div class="row">
        <div class="container">
          <div class="col-md-12 header">
              <div class="row">
                {{-- Logo --}}
                <div class="col-md-4">
                  <div id="logo-perusahaan-warper">
                    <img id="logo"class="img img-responsive" src="{{asset('images/logo-company-white.png')}}" alt="">
                  </div>
                </div>

                {{-- Menu Atas --}}
                <div class="col-md-4">
                  <div class="nav navbar hide-tablet" id="navbarNav">
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
                <div class="col-md-4">
                  {{-- <div class="right-header-panel"> --}}
                  <div class="row">
                    <div class="col-md-6 push-right">

                    </div>
                    <div class="col-md-6">
                      <div id="language-switcher-warper">
                        <select class="select-lg-transparent" name="">
                          <option value="">EN</option>
                          <option value="">ID</option>
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
                        <a href="#menu" onclick="openNav()" class="icMenu">
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
