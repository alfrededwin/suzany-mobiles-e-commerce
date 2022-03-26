<?php 

  session_start();

  /*  below codes are used to check if user logged in 
      if so -> the user name of the user is displayed
      if not -> the name GUEST appears on all pages
  */
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

<?php    

//Code for display from DB to Webpage
require_once("backend/connection.php");

$query="select * from table_contactus";
$result=mysqli_query($con,$query);


if(isset($_POST['btnSubmit'])){
$contactus_name = $_POST["txtcontactusname"];
$contactus_email = $_POST["txtcontactusemail"];
$contactus_subject = $_POST["txtcontactussubject"];
$contactus_number = $_POST["txtcontactusnumber"];
$contactus_message = $_POST["txtcontactusmessage"];



$sql = "INSERT INTO table_contactus (`contactus_name`,`contactus_email`, `contactus_subject`,`contactus_number`,`contactus_message`)VALUES ('".$contactus_name."',  '".$contactus_email."','".$contactus_subject."' , '".$contactus_number."',  '".$contactus_message."');";


if(mysqli_query($con,$sql)){
    //echo "New Record Created Succesfully";
  header('Location:contactus.php');
}
else{
echo "Error" .$sql. "<br>". mysqli_error($con);
}
mysqli_close($con);
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
  <title>Contact Us | Suzany Mobiles</title>

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
                <li>
                  <a href="aboutus.php">About Us</a>
                </li>
                <li>
                  <a href="products.php">Products
                    <span class="label label-primary">New</span>
                  </a>
                </li>
                <li class="active">
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
      <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/contactus/contactus.jpg">
        <div class="container pt-120 pb-60">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <ol class="breadcrumb text-left mt-10 white">
                  <h2 class="text-theme-colored2 font-36">Contact Us</h2>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Section: inner-header -->
      <!-- Section: Have Any Question -->
      <section class="divider">
        <div class="container pt-60 pb-60">
          <div class="section-title mb-60">
            <div class="row">
              <div class="col-md-12">
                <div class="esc-heading small-border text-center">
                  <h3>Have any Questions?</h3>
                </div>
                <div class="row mt-60">
                  <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                      <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
                      <h4>Call Us</h4>
                      <h6 class="text-gray">Phone: 0774353004</h6>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                      <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
                      <h4>Email</h4>
                      <h6 class="text-gray">suzanymobiles@gmail.com</h6>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                      <i class="fa fa-fax font-36 mb-10 text-theme-colored2"></i>
                      <h4>Fax</h4>
                      <h6 class="text-gray">(020) 123 4567</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Enf of Section: Have Any Question -->

      <!-- Section: Contact -->
      <section data-bg-img="images/pattern/p4.png">
        <div class="container">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="text-uppercase font-28 mt-0">
                  <span class="text-theme-colored">Contact</span> Us</h2>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">

                <!-- Contact Form -->

                <!-- action="includes/sendmail.php" -->
                <form id="contact_form" name="contact_form" class="contact-form-transparent" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name
                          <small>*</small>
                        </label>
                        <input name="txtcontactusname" class="form-control" type="text" id="txtcontactusname" placeholder="Enter Name" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email
                          <small>*</small>
                        </label>
                        <input name="txtcontactusemail" class="form-control required email" type="email" id="txtcontactusemail" placeholder="Enter Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Subject
                          <small>*</small>
                        </label>
                        <input name="txtcontactussubject" class="form-control required" type="text" id="txtcontactussubject" placeholder="Enter Subject">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Phone</label>
                        <input name="txtcontactusnumber" class="form-control" type="text" id="txtcontactusnumber" placeholder="Enter Phone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Message</label>
                    <textarea name="txtcontactusmessage" class="form-control required" id="txtcontactusmessage" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                  <div class="modal-footer">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <input type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block" data-loading-text="Please wait..." id="btnSubmit" name="btnSubmit" value="Send your message"/>
                  </div>
                </form>

                <!-- Contact Form Validation-->
                <script type="text/javascript">
                  RS ("#contact_form").validate({
                    submitHandler: function (form) {
                      var form_btn = RS (form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      RS (form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      RS (form).ajaxSubmit({
                        dataType: 'json',
                        success: function (data) {
                          if (data.status == 'true') {
                            RS (form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          RS (form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function () { RS (form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Divider: Google Map -->
      <section>
        <div class="container-fluid pt-0 pb-0">
          <div class="row">

            <!-- Google Map HTML Codes -->
            <div data-address="111, Mayfield Road, Kotahena, Colombo 01300, Western Province, Sri Lanka" data-popupstring-id="#popupstring1" class="map-canvas autoload-map"
              data-mapstyle="style2" data-height="400" data-latlng="6.949837,79.865014" data-title="Suzany Mobiles" data-zoom="12"
              data-marker="images/map-marker.png">
            </div>
            <div class="map-popupstring hidden" id="popupstring1">
              <div class="text-center">
                <h3>Suzany Mobiles</h3>
                <p>111, Mayfield Road, Kotahena, Colombo 01300, Western Province, Sri Lanka</p>
              </div>
            </div>
            <!-- Google Map Javascript Codes -->
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAh6VjA5IqdYdqqQ5ky4jTwKT3k8cCbPXQ"></script>
            <script src="js/google-map-init.js"></script>

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

/*
  this function gets the total number of products that has been added to the cart and displays the count/amount 
  in the navigation bar next to the cart

*/
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


/*
  this function checks if user is logged in prior to adding items to the cart
*/

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