<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Picked Fresh</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> --}}
</head>
<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">MAIN SHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cartlist">CART @livewireStyles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">LOGIN</a>
            </li>
            @auth
                <li class="nav-item">
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link"  >Logout</button>
                  </form>
                </li>
            @endauth
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>
    </div>
  </div>
  <!--header section end -->
  @yield('content')
  <x-flash-message />

  <!--footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h1 class="address_text">Address</h1>
          <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">No.123 Chalingt Gates,</span></a></div>
          <div class="location_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_15">( +01 9876543210 )</span></a></div>
          <div class="location_text"><a href="#"><img src="images/mail-icon.png"><span class="padding_left_15">Locations</span></a></div>
        </div>
        <div class="col-md-4">
          <h1 class="address_text">Social link</h1>
          <div class="location_text"><a href="#"><img src="images/fb-icon.png"><span class="padding_left_15">Facebook</span></a></div>
          <div class="location_text"><a href="#"><img src="images/twitter-icon.png"><span class="padding_left_15">Twitter</span></a></div>
          <div class="location_text"><a href="#"><img src="images/instagram-icon.png"><span class="padding_left_15">Instagram</span></a></div>
          <div class="location_text"><a href="#"><img src="images/Linkedin-icon.png"><span class="padding_left_15">Linkedin</span></a></div>
        </div>
        <div class="col-md-4">
          <h1 class="address_text">Newsletter</h1>
          <input type="text" class="enter_text" placeholder="Enter Your Email">
          <div class="subscribe_bt"><a href="#">subscribe</a></div>
        </div>
      </div>
    </div>
  </div>
  <!--footer section end -->
  <!--copyright section start -->
  <div class="copyright_section">
    <p class="copyright_text">Copyright 2023 All Right Reserved <a href="https://html.design">Free html  Templates</a></p>
  </div>
  <!--copyright section end -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript --> 
  {{-- <script src="js/owl.carousel.js"></script> --}}
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>