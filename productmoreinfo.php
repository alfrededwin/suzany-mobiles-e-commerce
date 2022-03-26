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
  <title>More Information | Suzany Mobiles</title>

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
  <link href="css/style.css" rel="stylesheet" type="text/css">
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
                    <a class="text-white">
                      <?php echo $loggedInPerson;?>
                    </a>
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
                <li class="active">
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
    <!-- Start Main Content -->
    <div class="main-content">
      <section>
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="product">
                <div class="col-md-12">
                  <!-- <p id="item_make_heading"></p> -->
                  <!-- <p id="item_model_heading"></p> -->
                  <h3 style="text-align: center;color:steelblue">Phone Details - <span id="item_make_heading" style="color:rgb(122, 83, 211)"></span> <span id="item_model_heading" style="color:rgb(122, 83, 211)"></span></h3>
                  <br>
                </div>
                
                <!-- <div class="col-md-5">
                  <div class="product-image">
                    <ul class="owl-carousel-1col" data-nav="true">
                      <li data-thumb="https://placehold.it/750x750">
                        <a data-lightbox="single-product">
                          <img id="txtFrontImage" alt="test">
                        </a>
                      </li>
                      <li data-thumb="https://placehold.it/750x750">
                        <a data-lightbox="single-product">
                          <img id="txtBackImage" alt="test">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div> -->

                <!-- <div class="col-md-6">
                  <div class="product-image">
                    <img id="txtFrontImage" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="product-image">
                    <img id="txtBackImage" />
                  </div>
                </div> -->
                <div class="productmoreinfo-row">
                  <div class="productmoreinfo-column">
                    <img id="txtFrontImage">
                  </div>
                  <div class="productmoreinfo-column">
                    <img id="txtBackImage">
                  </div>
                </div>

                <div>
                  <br>
                </div>
                <div class="col-md-6">
                  <div class="product-summary">
                    <h2 id="item_model" class="product-title"></h2>
                    <div class="product_review">
                      <ul class="review_text list-inline">
                        <li>
                          <div title="Rated 4.50 out of 5" class="star-rating">
                            <span data-width="90%">4.50</span>
                          </div>
                        </li>
                        <li>
                          <a id="item_make"></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price">
                      <ins>
                        <span id="item_unitcost" class="amount"></span>
                      </ins>
                    </div>
                    <div id="item_description" class="short-description">
                      <p>Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Ut posuere mollis nulla ut consectetur.</p>
                    </div>
                    <div class="tags">
                      <strong>Color:</strong>
                      <span id="item_color"></span>
                    </div>
                    <div class="tags">
                      <strong>Warranty Period:</strong>
                      <span id="item_warrantyperiod"></span>
                    </div>
                    <div class="cart-form-wrapper mt-30">
                      <table class="table variations no-border">
                        <tbody>
                          <tr>
                            <td class="name">Amount</td>
                            <td class="value">
                              <div class="quantity buttons_added">
                                <input type="button" class="minus" value="-">
                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" id="line_qty" name="line_qty" min="1" step="1">
                                <input type="button" class="plus" value="+">
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="single_add_to_cart_button btn btn-default" id="btnAddToCart" name="btnAddToCart">Add to cart</button>
                      <a href="viewcart.php" class="single_add_to_cart_button btn btn-default" type="button"> View cart </a>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="horizontal-tab product-tab">
                    <ul class="nav nav-tabs">
                      <li class="active">
                        <a href="#tab1" data-toggle="tab">Description</a>
                      </li>
                      <li>
                        <a href="#tab2" data-toggle="tab">Additional Information</a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="tab1">
                        <h3>Product Description</h3>
                        <p id="item_FullDescription"></p>
                      </div>
                      <div class="tab-pane fade" id="tab2">
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <th>Make</th>
                              <td id="item_make1"></td>
                            </tr>
                            <tr>
                              <th>Model</th>
                              <td id="item_model1"></td>
                            </tr>
                            <tr>
                              <th>Cost</th>
                              <td id="item_unitcost1"></td>
                            </tr>
                            <tr>
                              <th>Color</th>
                              <td id="item_color1"></td>
                            </tr>
                            <tr>
                              <th>Warranty Period</th>
                              <td id="item_warrantyperiod1"></td>
                            </tr>
                            <tr>
                              <th>Units Available</th>
                              <td id="item_nostock1"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
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

    getProductDetailID();
    getCartCount();

/*
  this function gets the product id from the products page or index page and uses it to fetch the entire item details from the
  database to display it in this page
*/
    function getProductDetailID() {
      var pageFrom = sessionStorage.getItem("session_pageFrom");
      if ((pageFrom != "products") && (pageFrom != "index")) {
        location.replace("products.php");
      } else {
        fetchItemDetails();
      }
    }

/*
  this function fetches all the relevant information about the product and displays it in this page
*/

    function fetchItemDetails() {
      //AJAX_itemID_get storing the item_list
      var AJAX_itemID_get = sessionStorage.getItem("session_productID");

      //if AJAX_itemID_get is not nul;
      if (AJAX_itemID_get != '') {

        $.ajax({

          //if it was a form the action="example.php"
          url: "frontendServer.php",
          //method
          method: "POST",
          //passing data
          data: {
            //left - server side variable and then right - UI variable
            AJAX_itemID_send: AJAX_itemID_get,
          },
          //data type
          dataType: "JSON",

          //fetch data
          success: function (data) {

            document.getElementById("txtFrontImage").src = "frontimages/" + data.item_imgFront;
            document.getElementById("txtBackImage").src = "backimages/" + data.item_imgBack;
            document.getElementById("item_make_heading").innerHTML = data.item_make;
            document.getElementById("item_model_heading").innerHTML = data.item_model;
            document.getElementById("item_model").innerHTML = data.item_model;
            document.getElementById("item_make").innerHTML = data.item_make;
            document.getElementById("item_unitcost").innerHTML = "LKR " + data.item_unitcost;
            document.getElementById("item_description").innerHTML = data.item_description;
            document.getElementById("item_color").innerHTML = " " + data.item_color;
            document.getElementById("item_warrantyperiod").innerHTML = " " + data.item_warrantyperiod;
            
            document.getElementById("item_FullDescription").innerHTML = data.item_FullDescription;
            document.getElementById("txtFrontImage").src = "frontimages/" + data.item_imgFront;
            
            document.getElementById("txtBackImage").src = "backimages/" + data.item_imgBack;
           
            // alert("frontimages/"+data.item_imgFront);




            //for addittional details displayed in the table
            document.getElementById("item_model1").innerHTML = data.item_model;
            document.getElementById("item_make1").innerHTML = data.item_make;
            document.getElementById("item_unitcost1").innerHTML = "LKR " + data.item_unitcost;
            document.getElementById("item_color1").innerHTML = data.item_color;
            document.getElementById("item_warrantyperiod1").innerHTML = data.item_warrantyperiod;
            document.getElementById("item_nostock1").innerHTML = data.item_nostock;
          }
        });
      } else {
        alert("Id is empty");
      }
    }


    $("#btnAddToCart").click(function () {
      checkUserLogin();


    });

    /*
  this function creates a cart if the user has not yet selected any product provided the user is logged in
*/
    function createCart() {
      //AJAX_itemID_get storing the item_list

      var cost = document.getElementById("item_unitcost").innerText;
      var res = cost.split(" ");
      var line_qty = document.getElementById("line_qty").value;
      var actual_unitcost = res[1] * line_qty;
      var item_id = sessionStorage.getItem("session_productID");

      $.ajax({
        //if it was a form the action="example.php"
        url: "frontendServer.php",
        //method
        method: "POST",
        //passing data
        data: {
          //left - server side variable and then right - UI variable
          btnCreateCart: 1,
          actual_unitcost: actual_unitcost,
          line_qty: line_qty,
          item_id: item_id
        },
        //data type
        dataType: "JSON",

        //fetch data
        success: function (data) {
          alert(data.message);
        }
      });
    }

/*
  this function adds item to the cart provided the user is logged in and the cart is created
*/
    function addItemToCart() {
      //AJAX_itemID_get storing the item_list

      var cost = document.getElementById("item_unitcost").innerText;
      var res = cost.split(" ");
      var line_qty = document.getElementById("line_qty").value;
      var actual_unitcost = res[1] * line_qty;
      var item_id = sessionStorage.getItem("session_productID");

      $.ajax({
        //if it was a form the action="example.php"
        url: "frontendServer.php",
        //method
        method: "POST",
        //passing data
        data: {
          //left - server side variable and then right - UI variable
          btnAddItemToCart: 1,
          actual_unitcost: actual_unitcost,
          line_qty: line_qty,
          item_id: item_id
        },
        //data type
        dataType: "JSON",

        //fetch data
        success: function (data) {
          alert(data.message);
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
            createCart();
            addItemToCart();
            getCartCount();
          } else {
            alert("Sign In Required!");
            location.replace("signinCustomer.php");
          }
        }
      });
    }

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



  });
</script>

