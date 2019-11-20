<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>FoodSoft</title>

  <link rel="icon" href="{{ asset('themes/delicious/img/core-img/favicon.ico') }}">

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/aplication.js') }}"></script>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('themes/delicious/style.css') }}">
</head>

<body>
  <div id="preloader">
    <i class="circle-preloader"></i>
    <img src="{{ asset('themes/delicious/img/core-img/salad.png') }}" alt="">
  </div>

  <div class="search-wrapper">
      <!-- Close Btn -->
      <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

      <div class="container">
          <div class="row">
              <div class="col-12">
                  <form action="#" method="post">
                      <input type="search" name="search" placeholder="Type any keywords...">
                      <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <header class="header-area">

      <!-- Top Header Area -->
      <div class="top-header-area">
          <div class="container h-100">
              <div class="row h-100 align-items-center justify-content-between">
                  <!-- Breaking News -->
                  <div class="col-12 col-sm-6">
                      <div class="breaking-news">
                          <div id="breakingNewsTicker" class="ticker">
                              <ul>
                                  <li><a href="#">Hello World!</a></li>
                                  <li><a href="#">Welcome to Colorlib Family.</a></li>
                                  <li><a href="#">Hello Delicious!</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <!-- Top Social Info -->
                  <div class="col-12 col-sm-6">
                      <div class="top-social-info text-right">
                          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Navbar Area -->
      <div class="delicious-main-menu">
          <div class="classy-nav-container breakpoint-off">
              <div class="container">
                  <!-- Menu -->
                  <nav class="classy-navbar justify-content-between" id="deliciousNav">

                      <!-- Logo -->
                      <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                      <!-- Navbar Toggler -->
                      <div class="classy-navbar-toggler">
                          <span class="navbarToggler"><span></span><span></span><span></span></span>
                      </div>

                      <!-- Menu -->
                      <div class="classy-menu">

                          <!-- close btn -->
                          <div class="classycloseIcon">
                              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                          </div>

                          <!-- Nav Start -->
                          <div class="classynav">
                              <ul>
                                  <li class="active"><a href="index.html">Home</a></li>
                                  <li><a href="#">Pages</a>
                                      <ul class="dropdown">
                                          <li><a href="index.html">Home</a></li>
                                          <li><a href="about.html">About Us</a></li>
                                          <li><a href="blog-post.html">Blog Post</a></li>
                                          <li><a href="receipe-post.html">Receipe Post</a></li>
                                          <li><a href="contact.html">Contact</a></li>
                                          <li><a href="elements.html">Elements</a></li>
                                          <li><a href="#">Dropdown</a>
                                              <ul class="dropdown">
                                                  <li><a href="index.html">Home</a></li>
                                                  <li><a href="about.html">About Us</a></li>
                                                  <li><a href="blog-post.html">Blog Post</a></li>
                                                  <li><a href="receipe-post.html">Receipe Post</a></li>
                                                  <li><a href="contact.html">Contact</a></li>
                                                  <li><a href="elements.html">Elements</a></li>
                                                  <li><a href="#">Dropdown</a>
                                                      <ul class="dropdown">
                                                          <li><a href="index.html">Home</a></li>
                                                          <li><a href="about.html">About Us</a></li>
                                                          <li><a href="blog-post.html">Blog Post</a></li>
                                                          <li><a href="receipe-post.html">Receipe Post</a></li>
                                                          <li><a href="contact.html">Contact</a></li>
                                                          <li><a href="elements.html">Elements</a></li>
                                                      </ul>
                                                  </li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </li>
                                  <li><a href="#">Mega Menu</a>
                                      <div class="megamenu">
                                          <ul class="single-mega cn-col-4">
                                              <li class="title">Catagory</li>
                                              <li><a href="index.html">Home</a></li>
                                              <li><a href="about.html">About Us</a></li>
                                              <li><a href="blog-post.html">Blog Post</a></li>
                                              <li><a href="receipe-post.html">Receipe Post</a></li>
                                              <li><a href="contact.html">Contact</a></li>
                                              <li><a href="elements.html">Elements</a></li>
                                          </ul>
                                          <ul class="single-mega cn-col-4">
                                              <li class="title">Catagory</li>
                                              <li><a href="index.html">Home</a></li>
                                              <li><a href="about.html">About Us</a></li>
                                              <li><a href="blog-post.html">Blog Post</a></li>
                                              <li><a href="receipe-post.html">Receipe Post</a></li>
                                              <li><a href="contact.html">Contact</a></li>
                                              <li><a href="elements.html">Elements</a></li>
                                          </ul>
                                          <ul class="single-mega cn-col-4">
                                              <li class="title">Catagory</li>
                                              <li><a href="index.html">Home</a></li>
                                              <li><a href="about.html">About Us</a></li>
                                              <li><a href="blog-post.html">Blog Post</a></li>
                                              <li><a href="receipe-post.html">Receipe Post</a></li>
                                              <li><a href="contact.html">Contact</a></li>
                                              <li><a href="elements.html">Elements</a></li>
                                          </ul>
                                          <div class="single-mega cn-col-4">
                                              <div class="receipe-slider owl-carousel">
                                                  <a href="#"><img src="img/bg-img/bg1.jpg" alt=""></a>
                                                  <a href="#"><img src="img/bg-img/bg6.jpg" alt=""></a>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li><a href="receipe-post.html">Receipies</a></li>
                                  <li><a href="receipe-post.html">4 Vegans</a></li>
                                  <li><a href="contact.html">Contact</a></li>
                              </ul>

                              <!-- Newsletter Form -->
                              <div class="search-btn">
                                  <i class="fa fa-search" aria-hidden="true"></i>
                              </div>

                          </div>
                          <!-- Nav End -->
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  @yield('contenido')
  <div class="follow-us-instagram">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <h5>Follow Us Instragram</h5>
              </div>
          </div>
      </div>
      {{-- <!-- Instagram Feeds -->
      <div class="insta-feeds d-flex flex-wrap">
          <!-- Single Insta Feeds -->
          <div class="single-insta-feeds">
              <img src="img/bg-img/insta1.jpg" alt="">
              <!-- Icon -->
              <div class="insta-icon">
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>

          <!-- Single Insta Feeds -->
          <div class="single-insta-feeds">
              <img src="img/bg-img/insta2.jpg" alt="">
              <!-- Icon -->
              <div class="insta-icon">
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>

          <!-- Single Insta Feeds -->
          <div class="single-insta-feeds">
              <img src="img/bg-img/insta3.jpg" alt="">
              <!-- Icon -->
              <div class="insta-icon">
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>

          <!-- Single Insta Feeds -->
          <div class="single-insta-feeds">
              <img src="img/bg-img/insta4.jpg" alt="">
              <!-- Icon -->
              <div class="insta-icon">
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>

          <!-- Single Insta Feeds -->
          <div class="single-insta-feeds">
              <img src="img/bg-img/insta5.jpg" alt="">
              <!-- Icon -->
              <div class="insta-icon">
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>

          <!-- Single Insta Feeds -->
          <div class="single-insta-feeds">
              <img src="img/bg-img/insta6.jpg" alt="">
              <!-- Icon -->
              <div class="insta-icon">
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>

          <!-- Single Insta Feeds -->
          <div class="single-insta-feeds">
              <img src="img/bg-img/insta7.jpg" alt="">
              <!-- Icon -->
              <div class="insta-icon">
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>
      </div> --}}
  </div>
  <footer class="footer-area">
      <div class="container h-100">
          <div class="row h-100">
              <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                  <!-- Footer Social Info -->
                  <div class="footer-social-info text-right">
                      <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </div>
                  <!-- Footer Logo -->
                  <div class="footer-logo">
                      <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                  </div>
                  <!-- Copywrite -->
                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
          </div>
      </div>
  </footer>
  <script src="{{ asset('themes/delicious/js/jquery/jquery-2.2.4.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('themes/delicious/js/plugins/plugins.js') }}"></script>
  <script src="{{ asset('themes/delicious/js/active.js') }}"></script>
</body>
</html>