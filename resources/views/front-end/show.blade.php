<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AmaComSoft</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="front-end-assets/img/favicon.png" rel="icon">
  <link href="front-end-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front-end-assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="front-end-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front-end-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="front-end-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="front-end-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="front-end-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="front-end-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="front-end-assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="{{route('front')}}">
        <img src="front-end-assets/img/amacom.jpg" alt="">
        <!-- AmaComSoft <span style="color: red;">.</span> -->
      </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="front-end-assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach($services as $service)
                    <li><a href="#">{{$service->name}}</a></li>
                @endforeach
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach($products as $product)
                    <li><a href="#">{{$product->name}}</a></li>
                @endforeach
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Digital Marketing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach($marketings as $marketing)
                    <li><a href="#">{{$marketing->name}}</a></li>
                @endforeach
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('price.show')}}" class="get-started-btn scrollto">See Pricing</a>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('front')}}">Home</a></li>
          <li>Price Page</li>
        </ol>
        <h2>Price Page</h2>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img src="{{asset($product->image)}}" height="200px" alt="" class="card-img-top"/>
                    <div class="card-header">{{$product->name}}</div>
                    <div class="card-body">
                        <h5 class="card-text">TK. {{$product->price}}</h5>
                        <p class="card-text">{{$product->details}}</p>
                        <a href="{{route('price.detail', ['id' => $product->id])}}" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
            <h3>AmaComSoft<span>.</span></h3>
            <p>
              House-8A, Road-7A<br>
              Sector-9<br>
              Uttara, Dhaka-1230<br><br>
              <strong>Phone:</strong>+8801793910427<br>
              <strong>Email:</strong><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('blog.all')}}">Blog</a></li>              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>AmaComSoft</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="front-end-assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="front-end-assets/vendor/aos/aos.js"></script>
  <script src="front-end-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front-end-assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="front-end-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="front-end-assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="front-end-assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="front-end-assets/js/main.js"></script>

</body>

</html>
