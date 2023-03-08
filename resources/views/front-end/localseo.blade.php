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
        </ol>
        <h2>Digital Marketing Page</h2>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="text-center text-success">SEO Expert in Bangladesh</h2>
                <h3 class="text-center text-success mb-3">Flood Your Website With Organic Traffic Using Search Engine Optimization Services</h3>
                <p class="justify-center">Search Engine Optimization (SEO) is crucial for attracting more traffic to your website. A strong SEO strategy will help you appear at the top of search engines… skyrocketing both leads and customers.</p>
                <p class="justify-center">With 40% of clicks going to the first result, you need an SEO agency that actually delivers on their promises. Our local team of digital marketing specialists have years of experience ranking websites high in the Google search engine. We work hard search engineto provide sustainable results – no ‘smoke and mirrors’, no black hat strategies and no cutting corners.</p>
                <p class="justify-center">Get More Customers To Your Website And More Money To Your Bank Account Want to know why SEO is so powerful? Because traffic from organic search results is the highest-converting traffic online. You’re more likely to convert browsers into buyers by ranking for your chosen keywords than using any other method.</p>
                <p class="justify-center">In other words, effective SEO not only means more people coming to your website – it also means more people buying your products or services.
                A LOT more. You’ll be able to skyrocket revenue and scale your business to dizzying new heights.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-header text-center text-bg-success">BASIC PACKAGE</div>
                    <div class="card-body package-section">
                        <h3 class="text-center text-bold">10000 <br/>TK/Month</h3>
                        <table class="text-center" style="margin: 0px auto;">
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">TOTAL KEYWORD - 3</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">IN-DEPTH SITE ANALYSIS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">COMPETITION ANALYSIS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">KEYWORD RESEARCH</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">TITLE & META TAGS OPTIMIZATION</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">CONTENT OPTIMIZATION</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">GOOGLE MY BUSINESS LISTING</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">SEARCH ENGINE RANK REPORT</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">SEO REPORTS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">ACTIVITY REPORT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-header text-center text-bg-success">BUSINESS PACKAGE</div>
                    <div class="card-body package-section">
                        <h3 class="text-center text-bold">15000 <br/>TK/Month</h3>
                        <table class="text-center" style="margin: 0px auto;">
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">TOTAL KEYWORD - 5</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">IN-DEPTH SITE ANALYSIS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">COMPETITION ANALYSIS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">KEYWORD RESEARCH</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">TITLE & META TAGS OPTIMIZATION</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">CONTENT OPTIMIZATION</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">GOOGLE MY BUSINESS LISTING</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">SEARCH ENGINE RANK REPORT</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">SEO REPORTS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">ACTIVITY REPORT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-header text-center text-bg-success">ENTERPRISE PACKAGE</div>
                    <div class="card-body package-section">
                        <h3 class="text-center text-bold">25000 <br/>TK/Month</h3>
                        <table class="text-center" style="margin: 0px auto;">
                            <tbody>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">TOTAL KEYWORD - 10</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">IN-DEPTH SITE ANALYSIS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">COMPETITION ANALYSIS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">KEYWORD RESEARCH</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">TITLE & META TAGS OPTIMIZATION</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">CONTENT OPTIMIZATION</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">GOOGLE MY BUSINESS LISTING</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">SEARCH ENGINE RANK REPORT</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">SEO REPORTS</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid #ECECEC; padding: 10px 0px;">ACTIVITY REPORT</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
