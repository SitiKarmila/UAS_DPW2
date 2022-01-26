<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{url('public')}}/images/favicon.png" type="image/x-icon">

  <title>Vanilla</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand " href="/"> Vanilla </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="{{url('home')}}">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('about')}}"> About <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('products')}}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">Login</a>
              </li>
              <form class="form-inline justify-content-center">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box pr-md-3">
            <img src="{{url('public')}}/images/about-img2.png" class="box_img" alt="about img">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box pl-md-3">
            <div class="heading_container">
              <h2 class="">
                About Us
              </h2>
            </div>
            <p class="detail_p_mt">
            Vanilla adalah merek makanan asal Indonesia yang mencakup produksi yougurt dan es krim yang dimiliki oleh Karmila Technology. Perusahan ini didirikan di Indonesia pada tahun 2021 oleh Siti Karmila, diakuisisi pada tahun 2022 oleh Ice Cream International, yang menjadi bagian dari Karmila Technology.
            </p>
            <a href="about" class="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->


  <div class="footer_container">
    <div class="footer_bg_box">
      <img src="{{url('public')}}/images/footer_bg.jpg" alt="">
    </div>
    <!-- info section -->

    <section class="info_section ">
      <div class="info_container ">
        <div class="container">
          <div class="info_contact ">
            <a href="#" class="link-box">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Vanilla. Ice Cream Shop
              </span>
            </a>
            <a href="#" class="link-box">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +62 896 3640 9094
              </span>
            </a>
            <a href="#" class="link-box">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                itskrmllas18@gmail.com
              </span>
            </a>
          </div>
          <div class="social_container">
            <div class="heading_container heading_center">
              <h2>
                Follow Us
              </h2>
              <p class="col-md-6 col-lg-5 mx-auto px-0">
              Vanilla persembahkan kampanye #ForFun untuk hadirkan kelezatan es krim yang mampu mencairkan suasana dan melengkapi kebahagiaan di tengah momen kebersamaan.
              </p>
            </div>
            <div class="social-box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Karmila Technology</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </div>

  <!-- jQery -->
  <script src="{{url('public')}}/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="{{url('public')}}/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- custom js -->
  <script src="{{url('public')}}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>