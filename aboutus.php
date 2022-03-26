<?php 
 
  session_start();
  $loggedInPerson="Guest";
  $loggedInStatus="<a class='text-white' href='signinCustomer.php'>Sign In
                          <i class='fa fa-sign-in' aria-hidden='true'></i>
                        </a>";
  if(isset($_SESSION['customer_id'])){
    $loggedInPerson=$_SESSION['customer_name'];
    $loggedInStatus="<a class='text-white' href='logout.php'>Sign Out
                            <i class='fa fa-sign-out' aria-hidden='true'></i>
                          </a>";
  }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Imfundo - Education University School Kindergarten Learning HTML Template" />
  <meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
  <meta name="author" content="ProjectX" />

  <!-- Page Title -->
  <title>About Us | Suzany Mobiles</title>

  <!-- Favicon and Touch Icons -->
  <link href="images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/css-plugin-collections.css" rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link href="css/menuzord-megamenu.css" rel="stylesheet" />
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
  <!-- CSS | Main style file -->
  <link href="css/style-main.css" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
<!-- CSS | Font Awesome 4.7.0 -->
<link href="vendors/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Revolution Slider 5.x CSS settings -->
  <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
  <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
  <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

  <!-- CSS | Theme Color -->
  <link href="css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="has-side-panel side-panel-right fullwidth-page">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        <img alt="" src="images/preloaders/10.gif">
      </div>
    </div>

    <!-- Header -->
    <header id="header" class="header">
      <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="widget">
                <ul class="styled-icons icon-sm icon-white">
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <!--<div id="side-panel-trigger" class="side-panel-trigger ml-15 mt-8 pull-right sm-pull-none"><a href="#"><i class="fa fa-bars font-24"></i></a>
            </div>-->
              <div class="widget">
                <ul class="list-inline text-right flip sm-text-center">
                  <li>
                    <a class="text-white" href="#">FAQ</a>
                  </li>
                  <li class="text-white">|</li>
                  <li>
                    <a class="text-white" href="#">Help Desk</a>
                  </li>
                  <li class="text-white">|</li>
                  <li>
                  <a class="text-white" href="#">Support</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white"><?php echo $loggedInPerson;?></a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <?php echo $loggedInStatus?>
                </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
          <div class="container">
            <nav id="menuzord-right" class="menuzord default theme-colored">
              <a class="menuzord-brand pull-left flip mt-20 mt-sm-10 mb-sm-20 pt-5" href="index.php">
                <img src="images/logo-wide.png" alt="">
              </a>
              <ul class="menuzord-menu">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="active">
                  <a href="aboutus.php">About Us</a>
                </li>
                <li>
                  <a href="products.php">Products
                    <span class="label label-primary">New</span>
                  </a>
                </li>
                <li>
                  <a href="contactus.php">Contact Us</a>
                </li>
                <li>
              <a href="viewcart.php">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="label label-warning" id="lblCartCount" name="lblCartCount">0</span>
              </a>
            </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- End of Header -->

    <!--Start Main Content  -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/aboutus/aboutus.jpg">
        <div class="container pt-120 pb-60">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <ol class="breadcrumb text-left mt-10 white">
                  <h2 class="text-theme-colored2 font-36">About Us</h2>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section About -->
      <section>
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30">Welcome to
                  <span class="text-theme-colored2">Suzany Mobiles</span>
                </h2>
                <h4 class="mt-5 mb-15">Providing services since 2008</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio
                  voluptates perspiciatis omnisrepell endus ipsa aperiam, laudantium voluptatum nulla.</p>
                <p class="hidden-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta assumenda voluptatum ibero eligendi molestias
                  iure error animi totam laudantium aspern similique id eos at consectetur illo culpa, quisquam Quas voluptatem
                  maiores eaque similique</p>
              </div>
              <div class="col-md-6">
                <img class="img-fullwidth" src="images/aboutus/welcome.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section mission -->
      <section>
        <div class="container pt-20">
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <img class="img-fullwidth hidden-md" src="images/aboutus/ourmission.jpg" alt="">
                <img class="img-fullwidth hidden-xs hidden-sm hidden-lg" src="http://placehold.it/420x345" alt="">
              </div>
              <div class="col-md-6">
                <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Our
                  <span class="text-theme-colored2">Misson</span>
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio
                  voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ipsum voluptate numquam, iure odio commodi
                  rerum quasi distinctio qui eligendi similique eius consequatur modi! Voluptas quam consequatur, debitis
                  recusandae facilis, autem in! Enim laudantium rem, placeat odit esse numquam facere ut. Quae, minus dolorum
                  corrupti!</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Divider: Funfact -->
      <section class="layer-overlay overlay-dark-7 parallax" data-bg-color="#000000">
        <div class="container pt-80 pb-90 pt-md-70 pb-md-50 pb-sm-50">
          <div class="row mt-30 text-center">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact">
                <i class="pe-7s-smile mb-20 text-white"></i>
                <h2 data-animation-duration="2000" data-value="754" class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                <h5 class="text-white text-uppercase">Happy Clients</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact">
                <i class="pe-7s-notebook mb-20 text-white"></i>
                <h2 data-animation-duration="2000" data-value="12" class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                <h5 class="text-white text-uppercase">Years of Experience</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact">
                <i class="pe-7s-users mb-20 text-white"></i>
                <h2 data-animation-duration="2000" data-value="450" class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                <h5 class="text-white text-uppercase">Cases completed</h5>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Fun Facts -->

      <!-- Section: team -->
      <section id="team">
        <div class="container">
          <div class="section-title mb-40">
            <div class="row">
              <div class="col-md-12">
                <h2 class="title text-uppercase mb-5">Our
                  <span class="text-theme-colored2">Team</span>
                </h2>
                <h5 class="font-16 mt-5">Meet Our Skilled Staffs</h5>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="team-members mb-40">
                  <div class="team-thumb pull-left team-pull-none flip mr-sm-0 t-mr-0">
                    <img src="http://placehold.it/270x225" alt="" class="img-fullwidth">
                  </div>
                  <div class="team-bottom-part border-1px p-15">
                    <h4 class="text-uppercase font-weight-600 m-0 pb-5">N. Subakaran</h4>
                    <h6 class="font-13 text-gray mt-0">Director</h6>
                    <ul class="list-inline mt-15">
                      <li class="m-0 pr-10">
                        <i class="fa fa-phone text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">123-456-789</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">contact@yourdomain.com</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-globe text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">www.yourdomain.com</a>
                      </li>
                    </ul>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-vk"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="team-members mb-40">
                  <div class="team-thumb pull-left team-pull-none flip mr-sm-0 t-mr-0">
                    <img src="http://placehold.it/270x225" alt="" class="img-fullwidth">
                  </div>
                  <div class="team-bottom-part border-1px p-15">
                    <h4 class="text-uppercase font-weight-600 m-0 pb-5">W.A.De Silva</h4>
                    <h6 class="font-13 text-gray mt-0">Manager</h6>
                    <ul class="list-inline mt-15">
                      <li class="m-0 pr-10">
                        <i class="fa fa-phone text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">123-456-789</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">contact@yourdomain.com</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-globe text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">www.yourdomain.com</a>
                      </li>
                    </ul>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-vk"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="team-members mb-40">
                  <div class="team-thumb pull-left team-pull-none flip mr-sm-0 t-mr-0">
                    <img src="http://placehold.it/270x225" alt="" class="img-fullwidth">
                  </div>
                  <div class="team-bottom-part border-1px p-15">
                    <h4 class="text-uppercase font-weight-600 m-0 pb-5">Sameera Hashan</h4>
                    <h6 class="font-13 text-gray mt-0">Staff</h6>
                    <ul class="list-inline mt-15">
                      <li class="m-0 pr-10">
                        <i class="fa fa-phone text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">123-456-789</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">contact@yourdomain.com</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-globe text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">www.yourdomain.com</a>
                      </li>
                    </ul>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-vk"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="team-members mb-40">
                  <div class="team-thumb pull-left team-pull-none flip mr-sm-0 t-mr-0">
                    <img src="http://placehold.it/270x225" alt="" class="img-fullwidth">
                  </div>
                  <div class="team-bottom-part border-1px p-15">
                    <h4 class="text-uppercase font-weight-600 m-0 pb-5">A.M.M.Sadiq</h4>
                    <h6 class="font-13 text-gray mt-0">Staff</h6>
                    <ul class="list-inline mt-15">
                      <li class="m-0 pr-10">
                        <i class="fa fa-phone text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">123-456-789</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">contact@yourdomain.com</a>
                      </li>
                      <li class="m-0 pr-10">
                        <i class="fa fa-globe text-theme-colored2 mr-5"></i>
                        <a class="text-gray" href="#">www.yourdomain.com</a>
                      </li>
                    </ul>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-vk"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- End Main Content -->

    <!-- Footer -->
    <footer id="footer" class="footer bg-black-111">
      <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
              <p>111, Mayfield Road, Kotahena, Colombo 01300, Western Province, Sri Lanka</p>
              <ul class="mt-5">
                <li class="m-0 pl-0 pr-10">
                  <i class="fa fa-phone text-theme-colored2 mr-5"></i>
                  <a class="text-gray" href="#">0774353004</a>
                </li>
                <li class="m-0 pl-0 pr-10">
                  <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                  <a class="text-gray" href="#">suzanymobiles@gmail.com</a>
                </li>
                <li class="m-0 pl-0 pr-10">
                  <i class="fa fa-globe text-theme-colored2 mr-5"></i>
                  <a class="text-gray" href="#">www.suzanymobiles.lk</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom-theme-colored2">Useful Links</h5>
              <ul class="list-border">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="aboutus.php">About us</a>
                </li>
                <li>
                  <a href="products.php">Products</a>
                </li>
                <li>
                  <a href="contactus.php">Contact Us</a>
                </li>
                <li>
                  <a href="signinCustomer.php">Sign Up</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark mb-20">
              <h5 class="widget-title line-bottom-theme-colored2">More</h5>
              <ul class="list-border">
                <li>
                  <a href="">Sitemap</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom-theme-colored2">Opening Hours</h5>
              <div class="opening-hours">
                <ul class="list-border">
                  <li class="clearfix">
                    <span> Mon - Fri : </span>
                    <div class="value pull-right flip"> 9.00 am - 9.00 pm </div>
                  </li>
                  <li class="clearfix text-white">
                    <span> Sat :</span>
                    <div class="value pull-right flip"> 9.00 am - 2.00 pm </div>
                  </li>
                  <li class="clearfix">
                    <span> Sun : </span>
                    <div class="value pull-right flip"> Closed </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom bg-black-222">
        <div class="container pt-10 pb-0">
          <div class="row">
            <div class="col-md-6 sm-text-center">
              <p class="font-13 text-black-777 m-0">Copyright &copy;2018
                <span class="text-theme-colored2">ProjectX</span>. All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-right flip sm-text-center">
              <div class="widget no-border m-0">
                <ul class="styled-icons icon-dark icon-circled icon-sm">
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-skype"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End of footer -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Chart-->
  <script src="js/chart.js"></script>
  <!-- JS | Custom script for all pages -->
  <script src="js/custom.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
  <script src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>
<script type="text/javascript">
  $(document).ready(function () {

    checkUserLogin();


    function getCartCount() {
      $.ajax({
        //if it was a form the action="example.php"
        url: "frontendServer.php",
        //method
        method: "POST",
        //passing data
        data: {
          //left - server side variable and then right - UI variable
          getCartCount: 1
        },
        //data type
        dataType: "JSON",

        //fetch data
        success: function (data) {
          //alert(data.cartItemCount);
          document.getElementById("lblCartCount").innerHTML = data.cartItemCount;
        }
      });
    }

    function checkUserLogin() {
      $.ajax({
        //if it was a form the action="example.php"
        url: "frontendServer.php",
        //method
        method: "POST",
        //passing data
        data: {
          //left - server side variable and then right - UI variable
          checkUserLoginSession: 1
        },
        //data type
        dataType: "JSON",

        //fetch data
        success: function (data) {
          if (data.response == "true") {
            //alert("this is true");
            getCartCount();
          }
        }
      });
    }
  });
</script>