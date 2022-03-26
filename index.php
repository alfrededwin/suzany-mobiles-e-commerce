<!-- Code for Latest -->
<?php 
  //connection for the database
  require_once("backend/connection.php");


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

        //to filter the products by latest arrival
$filter = "Latest";

        //creating the SELECT sql query
$sql_selectImagesLatest = "SELECT * FROM `table_item` WHERE `item_filter`='" . $filter . "'";

        //result is stored
$rs = mysqli_query($con, $sql_selectImagesLatest);

        //declaring and initialising it to null
$titleList = "";
$imageviewer = "";
$rating = "";
$price = "";
$model = "";
$itemidLatest="";

//if the sql query produces results the the data of each item is extracted
if (mysqli_num_rows($rs) > 0) {
  while ($row_item = mysqli_fetch_array($rs)) {
    $itemidLatest .=$row_item["item_id"]."+";
    $imageviewer .= $row_item["item_imgpath"] . "+";
    $titleList .= $row_item["item_make"] . "+";
    $model .= $row_item["item_model"] . "+";
            // $rating=$row_item["item_"];
    $price .= $row_item["item_unitcost"] . "+";
  }
}
$setpath = "images/PhoneImages/";
$pathListL = explode("+", $imageviewer);
$titleListL = explode("+", $titleList);
$priceL = explode("+", $price);
$modelL = explode("+", $model);
$itemidLatestP=explode("+",$itemidLatest);
?>


<!-- Code for Most Rated -->
<?php 

require_once("backend/connection.php");
$filter = "MostRated";
       

        //creating the sql query
$sql_selectImagesLatest = "SELECT * FROM `table_item` WHERE `item_filter`='" . $filter . "'";

        //result is stored
$rs = mysqli_query($con, $sql_selectImagesLatest);

        //declaring and initialising it to null
$titleList = "";
$imageviewer = "";
$rating = "";
$price = "";
$model = "";
$itemidMostRated="";

if (mysqli_num_rows($rs) > 0) {
  while ($row_item = mysqli_fetch_array($rs)) {
    $itemidMostRated .=$row_item["item_id"]."+";
    $imageviewer .= $row_item["item_imgpath"] . "+";
    $titleList .= $row_item["item_make"] . "+";
    $model .= $row_item["item_model"] . "+";
           
            // $rating=$row_item["item_"];
    $price .= $row_item["item_unitcost"] . "+";
  }
}
$setpath = "images/PhoneImages/";
$pathListMR = explode("+", $imageviewer);
$titleListMR = explode("+", $titleList);
$priceMR = explode("+", $price);
$modelMR = explode("+", $model);
$itemidMostRatedP=explode("+",$itemidMostRated);


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
  <title>Home | Suzany Mobiles</title>

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
              <!--<div id="side-panel-trigger" class="side-panel-trigger ml-15 mt-8 pull-right sm-pull-none"><a href="#"><i class="fa fa-bars font-24"></i></a>-->
            </div>
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
                  <a class="text-white">
                    <?php echo $loggedInPerson; ?> 
                  </a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <?php echo $loggedInStatus ?>
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
            <li class="active">
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
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default"
                data-masterspeed="default" data-thumb="images/index/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                data-fsslotamount="7" data-saveperformance="off" data-title="Slide One">
                <!-- MAIN IMAGE -->
                <img src="images/index/slide1.jpg" alt="" data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                  class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['215','130','110','120']"
                  data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['700','700','700','700']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Suzany Mobiles
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['250','160','140','150']"
                  data-fontsize="['52','46','40','28']" data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Popular Products
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['325','220','195','195']"
                  data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']" data-fontweight="['400','400','400','400']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provide our best services for our customers and help
                  <br> them pick the best.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4" data-x="['left','left','left','left']"
                  data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['410','290','260','250']"
                  data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                  <a href="products.php" class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">Show More</a>
                  <a href="products.php" class="btn btn-transparent btn-border btn-circled btn-xl pr-30 pl-30">Shop Now</a>
                </div>
              </li>
              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default"
                data-masterspeed="default" data-thumb="images/index/slide2.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                data-fsslotamount="7" data-saveperformance="off" data-title="Slide Two">
                <!-- MAIN IMAGE -->
                <img src="images/index/slide2.jpg" alt="" data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                  class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-1" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['215','130','110','120']"
                  data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['700','700','700','700']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Suzany Mobiles
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['250','160','140','150']"
                  data-fontsize="['52','46','40','28']" data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Genuine Products
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-3" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['325','220','195','195']"
                  data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']" data-fontweight="['400','400','400','400']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provide our customers with genuine products and help
                  <br> them pick the best.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-4" data-x="['left','left','left','left']"
                  data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['410','290','260','250']"
                  data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                  <a href="products.php" class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">Show More</a>
                  <a href="products.php" class="btn btn-transparent btn-border btn-circled btn-xl pr-30 pl-30">Shop Now</a>
                </div>
              </li>
              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default"
                data-masterspeed="default" data-thumb="images/index/slide3.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                data-fsslotamount="7" data-saveperformance="off" data-title="Slide Three">
                <!-- MAIN IMAGE -->
                <img src="images/index/slide3.jpg" alt="" data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                  class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-1" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['215','130','110','120']"
                  data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['700','700','700','700']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Suzany Mobiles
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0" id="slide-3-layer-2" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['250','160','140','150']"
                  data-fontsize="['52','46','40','28']" data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Latest Products
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['left','left','left','left']"
                  data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['325','220','195','195']"
                  data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']" data-fontweight="['400','400','400','400']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provide our customers with the latest products and help
                  <br> them pick the best.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-4" data-x="['left','left','left','left']"
                  data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['410','290','260','250']"
                  data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000"
                  data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                  <a href="products.php" class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">Show</a>
                  <a href="products.php" class="btn btn-transparent btn-border btn-circled btn-xl pr-30 pl-30">Shop Now</a>
                </div>
              </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
          </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <script>
          var tpj = jQuery;
          var revapi34;
          tpj(document).ready(function () {
            if (tpj("#rev_slider_home").revolution == undefined) {
              revslider_showDoubleJqueryError("#rev_slider_home");
            } else {
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/revolution-slider/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                  keyboardNavigation: "on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "on",
                  touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  },
                  arrows: {
                    enable: true,
                    style: 'gyges',
                    left: {
                      h_align: "left",
                      v_align: "center",
                      h_offset: 0,
                      v_offset: 0
                    },
                    right: {
                      h_align: "right",
                      v_align: "center",
                      h_offset: 0,
                      v_offset: 0
                    }
                  },
                  bullets: {
                    enable: true,
                    style: 'hebe',
                    tmp: '<span class="tp-bullet-image"></span>',
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5
                  }
                },
                viewPort: {
                  enable: true,
                  outof: "pause",
                  visible_area: "80%"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [660, 550, 500, 450],
                lazyType: "none",
                parallax: {
                  type: "scroll",
                  origo: "enterpoint",
                  speed: 400,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
                }
              });
            }
          }); /*ready*/
        </script>
        <!-- END REVOLUTION SLIDER -->
      </div>
    </section>
    <!-- Display Latest Products -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="products">
                <h4 class="line-bottom-theme-colored2 mt-0 mb-15 mt-sm-20">Latest <span style="margin-left: 80%;font-family:Arial, Helvetica, sans-serif "><a href="products.php">View All</a></span></h4>
                <div class="row multi-row-clearfix">
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="<?php echo $setpath . $pathListL[0] ?>" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                      <a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidLatestP[0]?>)">
                          <h5 class="product-title">
                            <?php echo $titleListL[0]." ".$modelL[0] ?>
                          </h5>
                        </a>
                        <div class="star-rating" title="Rated 4.50 out of 5">
                          <span data-width="90%">3.50</span>
                        </div>
                        <div class="price">
                          <del>
                            <span class="amount">RS 150000.00</span>
                          </del>
                          <ins>
                            <span class="amount">Rs.
                              <?php echo $priceL[0] ?>
                            </span>
                          </ins>
                        </div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="productmoreinfo.php" id="btnAddToCart" name="btnAddToCart">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="<?php echo $setpath . $pathListL[1] ?>" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                      <a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidLatestP[1]?>)">
                          <h5 class="product-title">
                            <?php echo $titleListL[1]." ".$modelL[1] ?>
                          </h5>
                        </a>
                        <div class="star-rating" title="Rated 4.50 out of 5">
                          <span data-width="90%">3.50</span>
                        </div>
                        <div class="price">
                          <del>
                            <span class="amount">RS 113000.00</span>
                          </del>
                          <ins>
                            <span class="amount">Rs.
                              <?php echo $priceL[1] ?>
                            </span>
                          </ins>
                        </div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="<?php echo $setpath . $pathListL[2] ?>" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                      <a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidLatestP[2]?>)">
                          <h5 class="product-title">
                            <?php echo $titleListL[2]." ".$modelL[2] ?>
                          </h5>
                        </a>
                        <div class="star-rating" title="Rated 4.50 out of 5">
                          <span data-width="90%">3.50</span>
                        </div>
                        <div class="price">
                          <del>
                            <span class="amount">RS 122000.00</span>
                          </del>
                          <ins>
                            <span class="amount">Rs.
                              <?php echo $priceL[2] ?>
                            </span>
                          </ins>
                        </div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
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
    </section>

    <!-- End of Latest products -->
    <!-- In Bit -->
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/index/discount/banner.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">50% 0FF</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li>
                  <a href="#">Grab the phone before it ends!</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End of In Bit -->
    <!-- Most Rated Products -->
    <!-- Display Products -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="products">
                <h4 class="line-bottom-theme-colored2 mt-0 mb-15 mt-sm-20">Most Rated<span style="margin-left: 80%;font-family:Arial, Helvetica, sans-serif"><a href="products.php">View All</a></span></h4>
                <div class="row multi-row-clearfix">
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="<?php echo $setpath . $pathListMR[0] ?>" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                      <a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidMostRatedP[0]?>)">
                          <h5 class="product-title">
                            <?php echo $titleListMR[0]." ".$modelMR[0] ?>
                          </h5>
                        </a>
                        <div class="star-rating" title="Rated 4.50 out of 5">
                          <span data-width="90%">3.50</span>
                        </div>
                        <div class="price">
                          <del>
                            <span class="amount">RS 70000.00</span>
                          </del>
                          <ins>
                            <span class="amount">Rs.
                              <?php echo $priceMR[0] ?>
                            </span>
                          </ins>
                        </div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <div class="product-thumb">
                        <img alt="" src="<?php echo $setpath . $pathListMR[1] ?>" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                      <a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidMostRatedP[1]?>)">
                          <h5 class="product-title">
                            <?php echo $titleListMR[1]." ".$modelMR[1] ?>
                          </h5>
                        </a>
                        <div class="star-rating" title="Rated 5.00 out of 5">
                          <span data-width="100%">5.00</span>
                        </div>
                        <div class="price">
                          <del>
                            <span class="amount">RS 98000.00</span>
                          </del>
                          <ins>
                            <span class="amount">Rs.
                              <?php echo $priceMR[1] ?>
                            </span>
                          </ins>
                        </div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Hot!</span>
                      <div class="product-thumb">
                        <img alt="" src="<?php echo $setpath . $pathListMR[2] ?>" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                      <a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidMostRatedP[2]?>)">
                          <h5 class="product-title">
                            <?php echo $titleListMR[2]." ".$modelMR[2] ?>
                          </h5>
                        </a>
                        <div class="star-rating" title="Rated 5.00 out of 5">
                          <span data-width="100%">3.90</span>
                        </div>
                        <div class="price">
                          <del>
                            <span class="amount">RS 58000.00</span>
                          </del>
                          <ins>
                            <span class="amount">Rs.
                              <?php echo $priceMR[2] ?>
                            </span>
                          </ins>
                        </div>
                        
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
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
    </section>
    <!-- End of Most Rated Products -->

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
              <h2 data-animation-duration="2000" data-value="20" class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Suppliers Islandwide</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Fun Facts -->


    <!-- Divider: Testimonials -->
    <section class="bg-silver-light">
      <div class="container pt-70 pb-30">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title mb-0">Our
                <span class="text-theme-colored2">Customer's </span>Say</h2>
              <h5 class="font-16 text-gray-darkgray mt-5 mb-0">Customer's Opinion</h5>
              <div class="line-bottom-theme-colored2 pt-10 mb-0"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="testimonial-content">
                    <p class="mt-0 font-16">I got a samsung galaxy s3 as soon as it came to the market. Suzany mobiles was able to provide me with that wonderful phone at the best price in the island. I like their service alot and the shop keeper is a very kind-hearted person.</p>
                  </div>
                  <div class="testimonial-details mb-0 mr-0">
                    <img alt="" src="images/index/people1.jpg" class="img-thumbnail img-circle pull-left mr-15 mt-15" width="42">
                    <div class="author-info pt-15">
                      <h5 class="mt-10 font-16 mb-0">James Peiris</h5>
                      <h6 class="mt-5">Moratuwa</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="testimonial-content">
                    <p class="mt-0 font-16">Suzany mobiles had always been my favourite shop and the most desirable i would say in terms of money and location. The shop has almost all the leading phone brands in the world! I have been a consistent customer for Suzany's since I started my high school.</p>
                  </div>
                  <div class="testimonial-details mb-0 mr-0">
                    <img alt="" src="images/index/people2.jpg" class="img-thumbnail img-circle pull-left mr-15 mt-15" width="42">
                    <div class="author-info pt-15">
                      <h5 class="mt-10 font-16 mb-0">Lakshani Kellapola</h5>
                      <h6 class="mt-5">Dehiwela</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="testimonial-content">
                    <p class="mt-0 font-16">I am very satisifed with the service provided by Suzanys. Not to forget the products they have are really what we expect to see when you go to a mobile store. The price is also really affordable.</p>
                  </div>
                  <div class="testimonial-details mb-0 mr-0">
                    <img alt="" src="images/index/people3.jpg" class="img-thumbnail img-circle pull-left mr-15 mt-15" width="42">
                    <div class="author-info pt-15">
                      <h5 class="mt-10 font-16 mb-0">Ranjan Hewage</h5>
                      <h6 class="mt-5">Rajagirirya</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="testimonial-content">
                    <p class="mt-0 font-16">I always like to use the latest phone which has arrived in the market. So Suzany Mobiles makes sure that I always satisfy my likes providing I am comfortable with the cost of the phone as well.</p>
                  </div>
                  <div class="testimonial-details mb-0 mr-0">
                    <img alt="" src="images/index/people5.jpg" class="img-thumbnail img-circle pull-left mr-15 mt-15" width="42">
                    <div class="author-info pt-15">
                      <h5 class="mt-10 font-16 mb-0">Maithrisiripala Sirisena</h5>
                      <h6 class="mt-5">Mattakkuliya</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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

<script>
/*
  The below function gets the product ID of the product that the user selects and passes it to the products more info page
  where the product full details will be displayed
*/
  function setProductDetailID(input) {
    
    //sets the current page and operation requested by the user
    sessionStorage.setItem("session_pageFrom","index");
    sessionStorage.setItem("session_productID",input);
    location.replace("productmoreinfo.php");
  }
</script>


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