<?php
    //includes the database connection 
    require_once('connection.php'); 
    //starts the session
    session_start();
    $login_session="";
    if(isset($_SESSION['employee_id'])){
      $login_session=$_SESSION['employee_name'];
    }
    else{
      header("location: backend/signinEmployee.php");
    }
?>

<!-- //Database Connection Query for PHP -->
<?php    

//Code for display from DB to Webpage
require_once("connection.php");

$query="select * from table_customer";
$result=mysqli_query($con,$query);


if(isset($_POST['btnSubmit'])){
$customer_id = $_POST["txtCustomerId"];
$customer_name =$_POST["txtCustomerName"];
$customer_gender =$_POST["gender"];
$customer_address = $_POST["txtCustomerAddress"];
$customer_email = $_POST["txtCustomerEmail"];
$customer_contact = $_POST["txtCustomerContact"];
$customer_password=$_POST["txtCustomerPassword"];



$sql = "INSERT INTO table_customer (`customer_id` ,`customer_name`,`customer_gender`,`customer_address` ,`customer_email` ,`customer_contact`,`customer_password`)
VALUES (
'".$customer_id."',  '".$customer_name."','".$customer_gender."',  '".$customer_address."',  '".$customer_email."',  '".$customer_contact."','".$customer_password."');";


if(mysqli_query($con,$sql)){
    //echo "New Record Created Succesfully";
  header('Location:customer.php');
}
else{
echo "Error" .$sql. "<br>". mysqli_error($con);
}
mysqli_close($con);
}



//Query for Update to DB

if(isset($_POST['btnUpdate'])){
  $customer_id = $_POST["txtCustomerIdEdit"];
  $customer_name =$_POST["txtCustomerNameEdit"];
  $customer_gender =$_POST["genderEdit"];
  $customer_address = $_POST["txtCustomerAddressEdit"];
  $customer_email = $_POST["txtCustomerEmailEdit"];
  $customer_contact = $_POST["txtCustomerContactEdit"];
  $customer_password=$_POST["txtCustomerPasswordEdit"];



  $sql = "UPDATE table_customer SET customer_name='".$customer_name."', customer_gender='".$customer_gender."', customer_address='".$customer_address."',customer_email='".$customer_email."',customer_contact='".$customer_contact."',customer_password='".$customer_password."' WHERE customer_id='".$customer_id."'";


    if(mysqli_query($con,$sql)){
        //echo "New Record Created Succesfully";
      header('Location:customer.php');
  }
  else{
    echo "Error" .$sql. "<br>". mysqli_error($con);
   }
  mysqli_close($con);
  
  }


   //Query to Delete from DB

   if(isset($_POST['btnDelete'])){

     $customer_id = $_POST["txtCustomerIdEdit"];

    $sql="DELETE FROM table_customer WHERE customer_id='".$customer_id."' ";

    if (mysqli_query($con,$sql))
    {
      header('Location:customer.php');
     // echo "1 record deleted go back to delete another!";
    
    }
    die('Error: ' . mysqli_error($con));
    
    }
    mysqli_close($con);

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
  <title>Admin | Suzany Mobiles</title>

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
    <div>
    
    </div>

    <!-- Header -->
    <header id="header" class="header">
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
          <div class="container">
            <nav id="menuzord-right" class="menuzord default theme-colored">
              <a class="menuzord-brand pull-left flip mt-20 mt-sm-10 mb-sm-20 pt-5" href="index.html">
                <img src="images/logo-wide.png" alt="">
              </a>
              <ul class="menuzord-menu">
                <li>
                  <a href="index.php">Dashboard</a>
                </li>
                <li  class="active">
                  <a> Master </a>
                  <ul class="dropdown">
                    <li>
                      <a href="item.php">Item</a>
                    </li>
                    <li>
                      <a href="supplier.php">Supplier</a>
                    </li>
                    <li>
                      <a href="customer.php">Customer</a>
                    </li>
                    <li>
                      <a href="employee.php">Employee</a>
                    </li>
                    <li>
                      <a href="sale.php">Sale</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="contactusbackend.php">Enquires</a>
                </li>
                <li>
                  <a href="backup.php">Backup</a>
                </li>
                <li>
                  <a>
                    <?php echo $login_session ?>
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a href="../logout.php">Sign Out</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: Courses -->
      <section class="bg-silver-light">
        <div class="container">
        <div class="col-md-12 mt-10 mb-10">
                <a href="#" data-width="100%" class="btn btn-dark" data-toggle="modal" data-target="#myModal">Create New Record</a>
              </div>

          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="myTable">
                    <tr>
                     <th>Operation</th>
                      <th>customer_id</th>
                      <th>customer_name</th>
                      <th>customer_gender</th>
                      <th>customer_address</th>
                      <th>customer_email</th>
                      <th>customer_contact</th>
                      <th>customer_password</th>
                    </tr>
                    <tbody>
                    <?php
                        while($rows=mysqli_fetch_array($result))
                        {
                        ?>
                      <tr>
                     

                         <td>
                          <input class="btn btn-primary" data-toggle="modal" data-target="#myModalEdit" type="button" id="getCustomerID"
                            value="Edit">
                        </td>
                        <td><?php echo $rows['customer_id']; ?></td>
                        <td><?php echo $rows['customer_name']; ?></td>
                        <td><?php echo $rows['customer_gender']; ?></td>
                        <td><?php echo $rows['customer_address']; ?></td>
                        <td><?php echo $rows['customer_email']; ?></td>
                        <td><?php echo $rows['customer_contact']; ?></td>
                        <td><?php echo $rows['customer_password']; ?></td> 
                      </tr>
                      <?php
                        }
                     ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Modal Edit -->
      <div class="modal" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Customer</h4>
            </div>
            <div class="modal-body">
              <form action="customer.php" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>ID</label>
                    <input type="text" class="form-control" id="txtCustomerIdEdit" name="txtCustomerIdEdit">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Fullname</label>
                    <input type="text" class="form-control" id="txtCustomerNameEdit" name="txtCustomerNameEdit">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Gender</label><br>
                    <input type="radio" name="genderEdit" value="Male" id="Male" style="margin: 0 5px 0 10px"/> Male
                    <input type="radio" name="genderEdit" value="Female" id="Female" style="margin: 0 5px 0 10px"/> Female
                   </div>
                  <div class="form-group col-md-12">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" id="txtCustomerAddressEdit" name="txtCustomerAddressEdit"></textarea>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" id="txtCustomerEmailEdit" name="txtCustomerEmailEdit">
                  </div>
                  <div class="form-group col-md-6 mb-20">
                    <label>Contact</label>
                    <input type="text" class="form-control" id="txtCustomerContactEdit" name="txtCustomerContactEdit">
                  </div>
                  <div class="form-group col-md-6 mb-20">
                    <label>Customer Password</label>
                    <input type="text" class="form-control" id="txtCustomerPasswordEdit" name="txtCustomerPasswordEdit">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-dark btn-flat">Save changes</button> -->

                      <!-- <input id="btnSubmit" type="submit" name="btnSubmit"  class="btn btn-dark btn-flat" value="Save"> -->
                      <input id="btnUpdate" type="submit" name="btnUpdate" class="btn btn-dark btn-flat" value="Update" onclick="ValidateEditForm()">
                      <input id="btnDelete" type="submit" name="btnDelete" class="btn btn-dark btn-flat" value="Delete">
                  </div>

                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>


        <!-- Modal Create -->

       <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Customer</h4>
            </div>
            <div class="modal-body">
              <form action="customer.php" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>ID</label>
                    <input type="text" class="form-control" id="txtCustomerId" name="txtCustomerId" placeholder="Auto Generated" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Fullname</label>
                    <input type="text" class="form-control" id="txtCustomerName" name="txtCustomerName">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male1" id="Male1" style="margin: 0 5px 0 10px"/> Male
                    <input type="radio" name="gender" value="Female1" id="Female1" style="margin: 0 5px 0 10px"/> Female
                   </div>
                  <div class="form-group col-md-12">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" id="txtCustomerAddress" name="txtCustomerAddress"></textarea>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" id="txtCustomerEmail" name="txtCustomerEmail">
                  </div>
                  <div class="form-group col-md-6 mb-20">
                    <label>Contact</label>
                    <input type="text" class="form-control" id="txtCustomerContact" name="txtCustomerContact">
                  </div>
                  <div class="form-group col-md-6 mb-20">
                    <label>Customer Password</label>
                    <input type="text" class="form-control" id="txtCustomerPassword" name="txtCustomerPassword">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-dark btn-flat">Save changes</button> -->

                      <input id="btnSubmit" type="submit" name="btnSubmit"  class="btn btn-dark btn-flat" value="Insert" onclick="Validate();">
                  </div>
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>


    </div>
    <!-- end main-content -->
    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#20232E">
      <div class="footer-bottom" data-bg-color="#1B1D26">
        <div class="container pt-20 pb-20">
          <div class="row">
            <div class="col-md-6">
              <p class="font-14 sm-text-center m-0">Copyright &copy;2018
                <span class="text-theme-colored2">ProjectX</span>. All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-right">
              <div class="widget no-border m-0">
                <ul class="list-inline sm-text-center mt-5 font-14">
                  <li>
                    <a href="#">FAQ</a>
                  </li>
                  <li>|</li>
                  <li>
                    <a href="#">Help Desk</a>
                  </li>
                  <li>|</li>
                  <li>
                    <a href="#">Support</a>
                  </li>
                </ul>
              </div>
            </div>
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
  <!-- JS | Chart-->
  <script src="js/chart.js"></script>
  <!-- JS | Custom script for all pages -->
  <script src="js/custom.js"></script>


 <!-- JAVASCRIPT VALIDATION -->

  <script type="text/javascript">
    function validateCustomerName() {
      var name = document.getElementById("txtCustomerName").value;
      if ((name == "") || (name == null)) {
        alert("Please enter a valid name");
        return false;
      }
      return true;
    }

    function validateGender(){
    var radio1=document.getElementById('Male1').checked;
    var radio2=document.getElementById('Female1').checked;

    if((radio1=="")&&(radio2==""))
     {
          alert("No Gender selected");
          return false;
     }
       return true;
    }

    function validateCustomerAddress() {
      var name = document.getElementById("txtCustomerAddress").value;
      var len=name.length;
      if ((name == "") || (name == null)||(len<10)) {
        alert("Please enter a Valid Address");
        return false;
      }
      return true;
    }
    function validateCustomerEmail() {
      var email = document.getElementById("txtCustomerEmail").value;
      var at = email.indexOf("@");
      var dt = email.lastIndexOf(".");
      var len = email.length;

      if ((at < 2) || (dt - at < 2) || (len - dt < 2)) {
        alert("Please enter a valid email address");
        return false;
      }
      return true;
    }
    function validateCustomerContact() {
      var cno = document.getElementById("txtCustomerContact").value;
      if ((isNaN(cno)) || (cno.length != 10)) {
        alert("Please enter a valid contact number");
        return false;
      }
      return true;
    }
    function validateCustomerPassword() {
      var cno = document.getElementById("txtCustomerPassword").value;
      if (cno.length<=3) {
        alert("Invalid Password, password should be atleast three digits long");
        return false;
      }
      return true;
    }
    
    function Validate() {
      if (!validateCustomerName() ||!validateGender()|| !validateCustomerAddress() || !validateCustomerEmail() || !validateCustomerContact()||!validateCustomerPassword()) {
        event.preventDefault();
      }
    }
  </script>

  <script type="text/javascript">
    function validateCustomerNameEdit() {
      var name = document.getElementById("txtCustomerNameEdit").value;
      if ((name == "") || (name == null)) {
        alert("Please enter a valid name");
        return false;
      }
      return true;
    }

    function validateGenderEdit(){
    var radio1=document.getElementById('Male').checked;
    var radio2=document.getElementById('Female').checked;

    if((radio1=="")&&(radio2==""))
     {
          alert("No Gender selected");
          return false;
     }
       return true;
    }

    function validateCustomerAddressEdit() {
      var name = document.getElementById("txtCustomerAddressEdit").value;
      var len=name.length;
      if ((name == "") || (name == null)||(len<10)) {
        alert("Please enter a Valid Address");
        return false;
      }
      return true;
    }
    function validateCustomerEmailEdit() {
      var email = document.getElementById("txtCustomerEmailEdit").value;
      var at = email.indexOf("@");
      var dt = email.lastIndexOf(".");
      var len = email.length;

      if ((at < 2) || (dt - at < 2) || (len - dt < 2)) {
        alert("Please enter a valid email address");
        return false;
      }
      return true;
    }
    function validateCustomerContactEdit() {
      var cno = document.getElementById("txtCustomerContactEdit").value;
      if ((isNaN(cno)) || (cno.length <9)) {
        alert("Please enter a valid contact number");
        return false;
      }
      return true;
    }
    function validateCustomerPasswordEdit() {
      var cno = document.getElementById("txtCustomerPasswordEdit").value;
      if (cno.length<=3) {
        alert("Invalid Password, password should be atleast three digits long");
        return false;
      }
      return true;
    }
    
    function ValidateEditForm() {
      if (!validateCustomerNameEdit() ||!validateGenderEdit()|| !validateCustomerAddressEdit() || !validateCustomerEmailEdit() || !validateCustomerContactEdit()||!validateCustomerPasswordEdit()) {
        event.preventDefault();
    }
    else{
      return confirm("Are you sure you want to make the changes?");
    }
  }
  </script>


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



    <script>

var table = document.getElementById("myTable"),rIndex;

for (var i = 0; i < table.rows.length; i++) {
  table.rows[i].onclick = function () {
    rIndex = this.rowsIndex;
    document.getElementById("txtCustomerIdEdit").value = this.cells[1].innerHTML;
    document.getElementById("txtCustomerNameEdit").value = this.cells[2].innerHTML;
   // document.getElementById("genderEdit").value = this.cells[3].innerHTML;
    document.getElementById("txtCustomerAddressEdit").value = this.cells[4].innerHTML;
    document.getElementById("txtCustomerEmailEdit").value = this.cells[5].innerHTML;
    document.getElementById("txtCustomerContactEdit").value = this.cells[6].innerHTML;
    document.getElementById("txtCustomerPasswordEdit").value = this.cells[7].innerHTML;
  }
}


</script>
</body>

</html>