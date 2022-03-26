<?php
    //includes the database connection 
    require_once("backend/connection.php");
    //starts the session
    session_start();
    //declare and initialise variable

    $error =null;
    //execute if a POST method is triggered
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        $myusername = mysqli_real_escape_string($con,$_POST['txtUsername']);
        $mypassword = mysqli_real_escape_string($con,$_POST['txtPassword']); 

        //sql query to fetch username and password from database
        $sql = "SELECT * FROM table_customer WHERE customer_email = '$myusername' and customer_password = '$mypassword'";
        //the sql query is executed
        $result = mysqli_query($con,$sql);
        //returns a boolean
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        //stores the row count
        $count = mysqli_num_rows($result);
        //checks if the row count is equal to 1
        if($count == 1) {

            //find details relevant to email
            //populate id
            $sql_selectCustomer = "SELECT * FROM `table_customer` WHERE `customer_email` = '$myusername'";
            $rs_selectCustomer = mysqli_query($con, $sql_selectCustomer);
            $options_customer_id = "";
            $options_customer_name = "";
            $options_customer_email = "";
            while($row_customer = mysqli_fetch_array($rs_selectCustomer))
            {
                $options_customer_id = $row_customer[0];
                $options_customer_name = $row_customer[1];
                $options_customer_email = $row_customer[5];
            }
            $_SESSION['customer_id'] = $options_customer_id;
            $_SESSION['customer_name'] = $options_customer_name;
            $_SESSION['customer_email'] = $options_customer_email;

            //page is redirected to the index.php
            header("location: index.php");
        }else {
            //if count is 0 then the error will prompt in the from "echo"
            $error = "Username and password do not match.";
        }
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
		<title>Login | Suzany Mobiles</title>

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

		<!-- CSS | Theme Color -->
		<link href="css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

		<!-- external javascripts -->
		<script src="js/jquery-2.2.4.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- JS | jquery plugin collection for this theme -->
		<script src="js/jquery-plugin-collection.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	</head>

	<body class="">

		<div id="wrapper" class="clearfix">
			<!-- preloader -->
			<div id="preloader">
				<div id="spinner">
					<img alt="" src="images/preloaders/10.gif">
				</div>
			</div>

			<!-- Start main-content -->
			<div class="main-content">
				<!-- Section: home -->
				<section id="home" class=" pb-120 divider parallax fullscreen layer-overlay overlay-dark-9" data-bg-img="images/login/5736d2c89e9cc7cad503fcd640c0f4c78df08a6f.jpg">
					<div class="display-table">
						<div class="display-table-cell">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-push-3">
										<div class="text-center mb-60">
											<a href="index.php" class="">
                      <img alt="" src="images/logo-wide-white.png">
                    </a>
										</div>
										<h4 class="text-theme-colored2 mt-0 pt-5"> Customer Portal</h4>

										<form name="login-form" class="form-transparent clearfix" action="signinCustomer.php" method="post">
											<div class="row">
												<div class="clear text-center pt-10">

												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-12">
													<label style="color: red">
                          <?php echo $error?>
                        </label>

												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-12">

													<label for="form_username_email">Username/Email</label>
													<input class="form-control" type="text" id="txtUsername" name="txtUsername">
												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-12">
													<label for="form_password">Password</label>
													<input class="form-control" type="password" id="txtPassword" name="txtPassword">
												</div>
											</div>
											<div class="checkbox">
												<label for="form_checkbox">
                        <input id="form_checkbox" name="form_checkbox" type="checkbox"> Remember me </label>
											</div>
											<!-- href="index.html" -->
											<div class="clear text-center pt-10">
												<button class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" data-bg-color="#1592B4" name="btnSubmit" id="btnSubmit">Login</button>
											</div>
											<br>
											<p>Don't have an account yet?
												<a class="text-theme-colored2" href="signup.php">Create an account!</a>
											</p>

											<p>Switch to
												<a class="text-theme-colored2" href="signinEmployee.php">Super User?</a>
											</p>
										</form>
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
				<div class="container p-20">
					<div class="row">
						<div class="col-md-12 text-center">
							<p class="mb-0">Copyright &copy;2018
								<span class="text-theme-colored2">ProjectX</span>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</footer>
			<a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
		</div>
		<!-- end wrapper -->

		<!-- Footer Scripts -->
		<!-- JS | Custom script for all pages -->
		<script src="js/custom.js"></script>
		<script type="text/javascript">
			function userName() {
				var name = document.getElementById("txtUsername").value;
				if ((name == "") || (name == null)) {
					alert("Please enter valid user name");
					return false;
				}
				return true;
			}

			function validateSupplierAddress() {
				var name = document.getElementById("txtSupplierAddress").value;
				if ((name == "") || (name == null)) {
					alert("Please enter a nick name");
					return false;
				}
				return true;
			}

			function validateSupplierEmail() {
				var email = document.getElementById("txtSupplierEmail").value;
				var at = email.indexOf("@");
				var dt = email.lastIndexOf(".");
				var len = email.length;

				if ((at < 2) || (dt - at < 2) || (len - dt < 2)) {
					alert("Please enter a valid email address");
					return false;
				}
				return true;
			}

			function validateSupplierContact() {
				var cno = document.getElementById("txtSupplierContact").value;
				if ((isNaN(cno)) || (cno.length != 10)) {
					alert("Please enter a valid contact number");
					return false;
				}
				return true;
			}

			function Validate() {
				if (!validateSupplierName() || !validateSupplierAddress() || !validateSupplierEmail() || !validateSupplierContact()) {
					event.preventDefault();
				}
			}

		</script>

	</body>

	</html>
