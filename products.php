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
        
        //connection for the database
        require_once("backend/connection.php");
        

        //creating the sql query
        $sql_selectImagesLatest = "SELECT * FROM `table_item`";

        //result is stored
        $rs = mysqli_query($con, $sql_selectImagesLatest);

        //declaring and initialising it to null
        $titleList="";
        $imageviewer= "";
        $rating="";
        $price="";
        $model="";
        $itemid="";
        
        if(mysqli_num_rows($rs)>0){
          while($row_item = mysqli_fetch_array($rs))
        {
          $itemid .=$row_item["item_id"]."+";
          $imageviewer .=$row_item["item_imgpath"]."+";  
          $titleList .=$row_item["item_make"]."+";
           $model .=$row_item["item_model"]. "+";
            // $rating=$row_item["item_"];
          $price .=$row_item["item_unitcost"]."+";
        }
        }
        $setpath = "images/PhoneImages/";
        $pathListP = explode("+",$imageviewer);
        $titleListP = explode("+",$titleList);
        $priceP = explode("+",$price);
        $modelP =explode("+",$model);
        $itemidP=explode("+",$itemid);

      
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
	<title>Products | Suzany Mobiles</title>

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

		<!-- Start main-content -->
		<div class="main-content">
			<!-- Section: inner-header -->
			<section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/products/products.jpg">
				<div class="container pt-120 pb-60">
					<!-- Section Content -->
					<div class="section-content">
						<div class="row">
							<div class="col-md-6">
								<ol class="breadcrumb text-left mt-10 white">
									<h2 class="text-theme-colored2 font-36">Products</h2>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="">
				<div class="container">
					<div class="section-content">
						<div class="row">
							<div class="col-md-9">
								<div class="products">
									<div class="row multi-row-clearfix">
										<div class="col-sm-6 col-md-4 col-lg-4 mb-30">
											<div class="product">
												<span class="tag-sale">Sale!</span>
												<div class="product-thumb">
													<img alt="" src="<?php echo $setpath.$pathListP[0]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[0]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[0]." ".$modelP[0]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 4.50 out of 5">
														<span data-width="90%">3.50</span>
													</div>
													<div class="price">
														<del>
                              <span class="amount">RS 520.00</span>
                            </del>
														<ins>
                              <span class="amount">Rs.
                                <?php echo $priceP[0]?>
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
													<img alt="" src="<?php echo $setpath.$pathListP[1]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[1]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[1]." ".$modelP[1]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 5.00 out of 5">
														<span data-width="100%">5.00</span>
													</div>
													<div class="price">
														<del>
                              <span class="amount">RS 364.00</span>
                            </del>
														<ins>
                              <span class="amount">Rs.
                                <?php echo $priceP[1]?>
                              </span>
                            </ins>
													</div>
													<div class="btn-add-to-cart-wrapper">
														<a class="btn btn-default btn-xs btn-add-to-cart" href="#" id="btnAddToCart" name="btnAddToCart">Add To Cart</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-md-4 col-lg-4 mb-30">
											<div class="product">
												<span class="tag-sale">Hot!</span>
												<div class="product-thumb">
													<img alt="" src="<?php echo $setpath.$pathListP[2]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[2]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[2]." ".$modelP[2]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 5.00 out of 5">
														<span data-width="100%">3.90</span>
													</div>
													<div class="price">
														<span class="amount">Rs.
                              <?php echo $priceP[2]?>
                            </span>
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
													<img alt="" src="<?php echo $setpath.$pathListP[3]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[3]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[3]." ".$modelP[3]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 4.90 out of 5">
														<span data-width="95%">4.60</span>
													</div>
													<div class="price">
														<del>
                              <span class="amount">RS 100000.00</span>
                            </del>
														<ins>
                              <span class="amount">Rs.
                                <?php echo $priceP[3]?>
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
													<img alt="" src="<?php echo $setpath.$pathListP[4]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[4]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[4]." ".$modelP[4]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 4.00 out of 5">
														<span data-width="80%">4.00</span>
													</div>
													<div class="price">
														<span class="amount">Rs.
                              <?php echo $priceP[4]?>
                            </span>
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
													<img alt="" src="<?php echo $setpath.$pathListP[5]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[5]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[5]." ".$modelP[5]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 2.50 out of 5">
														<span data-width="50%">2.50</span>
													</div>
													<div class="price">
														<span class="amount">Rs.
                              <?php echo $priceP[5]?>
                            </span>
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
													<img alt="" src="<?php echo $setpath.$pathListP[6]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[6]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[6]." ".$modelP[6]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 4.50 out of 5">
														<span data-width="95%">4.50</span>
													</div>
													<div class="price">
														<del>
                              <span class="amount">
                                <?php echo $itemidP[6]?>
                              </span>
                            </del>
														<ins>
                              <span class="amount">Rs.
                                <?php echo $priceP[6]?>
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
													<img alt="" src="<?php echo $setpath.$pathListP[7]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a style="cursor: pointer" onclick="setProductDetailID(<?php echo $itemidP[7]?>)">
														<h5 class="product-title">
															<?php echo $titleListP[7]." ".$modelP[7]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 4.00 out of 5">
														<span data-width="80%">4.00</span>
													</div>
													<div class="price">
														<span class="amount">Rs.
                              <?php echo $priceP[7]?>
                            </span>
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
													<img alt="" src="<?php echo $setpath.$pathListP[8]?>" class="img-responsive img-fullwidth">
													<div class="overlay"></div>
												</div>
												<div class="product-details text-center">
													<a href="#">
														<h5 class="product-title">
															<?php echo $titleListP[8]." ".$modelP[8]?>
														</h5>
													</a>
													<div class="star-rating" title="Rated 4.50 out of 5">
														<span data-width="94%">4.80</span>
													</div>
													<div class="price">
														<span class="amount">Rs.
                              <?php echo $priceP[8]?>
                            </span>
													</div>
													<div class="btn-add-to-cart-wrapper">
														<a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<nav>
												<ul class="pagination theme-colored">
													<li>
														<a href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
													</li>
													<li class="active">
														<a href="#">1</a>
													</li>
													<li>
														<a href="#">2</a>
													</li>
													<li>
														<a href="#">3</a>
													</li>
													<li>
														<a href="#">4</a>
													</li>
													<li>
														<a href="#">5</a>
													</li>
													<li>
														<a href="#">...</a>
													</li>
													<li>
														<a href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="sidebar sidebar-right mt-sm-30">
									<div class="widget">
										<!--
<h5 class="widget-title">Search box</h5>
<div class="search-form">
	<form>
		<div class="input-group">
			<input type="text" placeholder="Click to Search" class="form-control search-input" name="search_text" id="search_text">
			<span class="input-group-btn">
                            <button type="submit" class="btn search-button" id="live_search" name="live_search">
                              <i class="fa fa-search"></i>
                            </button>
                          </span>
		</div>
		<div id="result">
		</div></form>
-->

									</div>
								</div>
								<div class="widget">
									<h5 class="widget-title">Models</h5>
									<div class="categories">
										<ul class="list list-border angle-double-right">
											<li>
												<a href="#">Apple
                            <span>(19)</span>
                          </a>
											</li>
											<li>
												<a href="#">Samsung
                            <span>(21)</span>
                          </a>
											</li>
											<li>
												<a href="#">One Plus
                            <span>(15)</span>
                          </a>
											</li>
											<li>
												<a href="#">Huawei
                            <span>(35)</span>
                          </a>
											</li>
											<li>
												<a href="#">HTC
                            <span>(16)</span>
                          </a>
											</li>
										</ul>
									</div>
								</div>
								<div class="widget">
									<h5 class="widget-title">Latest News</h5>
									<div class="latest-posts">
										<article class="post media-post clearfix pb-0 mb-10">
											<a class="post-thumb" href="#">
                          <img src="https://placehold.it/75x75" alt="">
                        </a>
											<div class="post-right">
												<h5 class="post-title mt-0">
													<a href="#">Sustainable Construction</a>
												</h5>
												<p>Lorem ipsum dolor sit amet adipisicing elit...</p>
											</div>
										</article>
										<article class="post media-post clearfix pb-0 mb-10">
											<a class="post-thumb" href="#">
                          <img src="https://placehold.it/75x75" alt="">
                        </a>
											<div class="post-right">
												<h5 class="post-title mt-0">
													<a href="#">Industrial Coatings</a>
												</h5>
												<p>Lorem ipsum dolor sit amet adipisicing elit...</p>
											</div>
										</article>
										<article class="post media-post clearfix pb-0 mb-10">
											<a class="post-thumb" href="#">
                          <img src="https://placehold.it/75x75" alt="">
                        </a>
											<div class="post-right">
												<h5 class="post-title mt-0">
													<a href="#">Storefront Installations</a>
												</h5>
												<p>Lorem ipsum dolor sit amet adipisicing elit...</p>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		</section>
	</div>
	<!-- end main-content -->


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
		sessionStorage.setItem("session_pageFrom", "products");
		sessionStorage.setItem("session_productID", input);
		location.replace("productmoreinfo.php");
	}

</script>
<script type="text/javascript">
	$(document).ready(function() {

		checkUserLogin();

		function liveSearch() {
			$('#search_text').keyup(function() {
				var txt = $(this).val();
				if (txt != '') {

				} else {
					$('#result').html('');
					$.ajax({
						url: "frontendServer.php",
						method: "post",
						data: {
							search: txt
						},
						dataType: "JSON",
						success: function(data) {
							$('#result').html(data);
						}
					})
				}
			})
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
				success: function(data) {
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
				success: function(data) {
					if (data.response == "true") {
						//alert("this is true");
						getCartCount();
					}
				}
			});
		}
	});

</script>
