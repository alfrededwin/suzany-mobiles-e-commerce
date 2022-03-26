<?php    

//Code for display from DB to Webpage
require_once("backend/connection.php");

$query="select * from table_customer";
$result=mysqli_query($con,$query);


if(isset($_POST['btnSubmit'])){
$customer_id = $_POST["txtCustomerId"];
$customer_name =$_POST["txtCustomerName"];
$customer_password = $_POST["txtCustomerPassword"];
$customer_gender = $_POST["txtCustomerGender"];
$customer_address = $_POST["txtCustomerAddress"];
$customer_email = $_POST["txtCustomerEmail"];
$customer_contact = $_POST["txtCustomerContact"];






$sql = "INSERT INTO table_customer (`customer_name`,`customer_password`, `customer_gender`,`customer_address` ,`customer_email` ,`customer_contact`)
VALUES ('".$customer_name."',  '".$customer_password."','".$customer_gender."' , '".$customer_address."',  '".$customer_email."',  '".$customer_contact."');";


if(mysqli_query($con,$sql)){
    //echo "New Record Created Succesfully";
  header('Location:signinCustomer.php');
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
      <section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/login/5736d2c89e9cc7cad503fcd640c0f4c78df08a6f.jpg">
        <div class="display-table">
          <div class="display-table-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-push-3">
                  <div class="text-center mb-60">
                    <a href="#" class="">
                      <img alt="" src="images/logo-wide-white.png">
                    </a>
                  </div>
                  <div class="bg-lightest border-1px p-30 mb-0">
                    <h3 class="text-theme-colored mt-0 pt-5"> Sign Up</h3>
                    <hr>
                    <br>
                    <form action="signup.php" method="post">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Name
                              <small>*</small>
                            </label>
                            <input type="text" placeholder="Enter Name" class="form-control" id="txtCustomerName" name="txtCustomerName" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Email
                              <small>*</small>
                            </label>
                            <input class="form-control" type="email" placeholder="Enter Email" id="txtCustomerEmail" name="txtCustomerEmail" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Password</label>
                            <small>*</small>
                            </label>
                            <input type="password" placeholder="Enter Password" class="form-control" id="txtCustomerPassword" name="txtCustomerPassword" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Re-Type Password</label>
                            <small>*</small>
                            </label>
                            <input type="password" placeholder="Re-Type Password" class="form-control" id="txtCustomerReTypePassword" name="txtCustomerReTypePassword" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Gender
                              <small>*</small>
                            </label>
                            <select class="form-control" id="txtCustomerGender" name="txtCustomerGender" required>
                      <option >Choose Below</option>
                      <option >Male</option>
                      <option >Female</option>
                    </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Contact</label>
                            <small>*</small>
                            </label>
                            <input type="text" placeholder="Enter Contact" class="form-control" id="txtCustomerContact" name="txtCustomerContact" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Address
                          <small>*</small>
                        </label>
                        <textarea class="form-control" rows="5" placeholder="Enter Address" id="txtCustomerAddress" name="txtCustomerAddress" required></textarea>
                      </div>

                      <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn text-white btn-block btn-sm mt-20 pt-10 pb-10" data-bg-color="#1592B4" data-loading-text="Please wait..."
                          id="btnSubmit" name="btnSubmit" onclick="Validate()">Apply Now</button>
                      </div>
                      <p>Already have an account?
                        <a class="text-theme-colored2" href="signinCustomer.php"> Sign In!</a>
                      </p>
                    </form>
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

</body>

</html>
<script>
  function userPassword() {
				var password1 = document.getElementById("txtCustomerPassword").value;
				var password2 = document.getElementById("txtCustomerReTypePassword").value;
				if ((password1 != password2) || (password1 == null) || (password2 == null)) {
					alert("Please enter valid password! Passwords do not match");
					return false;
				}
				return true;
			}
      function Validate() {
				if (!userPassword()) {
					event.preventDefault();
				}
			}
  </script>