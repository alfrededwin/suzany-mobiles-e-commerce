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

$query="select * from table_item";
$result=mysqli_query($con,$query);

//query to import values from db to drop down list
$query1="select * from table_supplier";
$result1=mysqli_query($con,$query1);

//query to import values from db to drop down list
$query2="select * from table_supplier";
$result2=mysqli_query($con,$query2);

//Query to insert data into DB

if(isset($_POST['btnSubmit'])){
//$item_id = $_POST["txtItemId"];
$item_make =$_POST["txtItemMake"];
$item_model = $_POST["txtItemModel"];
$item_unitcost = $_POST["txtItemUnitcost"];
$item_color = $_POST["txtItemColor"];
$item_warrantyperiod = $_POST["txtItemWarrantyPeriod"];
$supplier_id = $_POST["txtSupplierId"];
$item_nostock = $_POST["txtItemNostock"];

$item_filter = $_POST["txtItemFilter"];
$item_imgpath = $_POST["txtItemMainImgPath"];
$item_description = $_POST["txtItemDescription"];
$item_fulldescription = $_POST["txtItemFullDescription"];
$item_imgFront = $_POST["txtItemFrontImgPath"];
$item_imgBack = $_POST["txtItemBackImgPath"];




$sql = "INSERT INTO table_item (`item_id` ,`item_make` ,`item_model` ,`item_unitcost` ,`item_color`,`item_warrantyperiod`,`supplier_id`,`item_nostock`,`item_filter`,`item_imgpath`,`item_description`,`item_FullDescription`,`item_imgFront`,`item_imgBack`)
VALUES (
NULL,  '".$item_make."',  '".$item_model."',  '".$item_unitcost."',  '".$item_color."','".$item_warrantyperiod ."','".$supplier_id."','".$item_nostock ."','".$item_filter."','".$item_imgpath."','".$item_description."','".$item_fulldescription."','".$item_imgFront."','".$item_imgBack."');";


if(mysqli_query($con,$sql)){
  echo "New Record Created Succesfully";
  header('Location:item.php');
}
else{
echo "Error" .$sql. "<br>". mysqli_error($con);
}
mysqli_close($con);
}



//Query for Update to DB

if(isset($_POST['btnUpdate'])){
  //$item_id = $_POST["txtItemIdEdit"];
  $item_make =$_POST["txtItemMakeEdit"];
  $item_model = $_POST["txtItemModelEdit"];
  $item_unitcost = $_POST["txtItemUnitcostEdit"];
  $item_color = $_POST["txtItemColorEdit"];
  $item_warrantyperiod = $_POST["txtItemWarrantyPeriodEdit"];
  $supplier_id = $_POST["txtSupplierIdEdit"];
  $item_nostock = $_POST["txtItemNostockEdit"];
  $item_filter = $_POST["txtItemFilterEdit"];
  $item_imgpath = $_POST["txtItemMainImagePathEdit"];
  $item_description = $_POST["txtItemDescriptionEdit"];
  $item_fulldescription = $_POST["txtItemFullDescriptionEdit"];
  $item_id_hidden=$_POST["txtItemIdEditHidden"];
  $item_imgFront = $_POST["txtItemFrontImagePathEdit"];
  $item_imgBack = $_POST["txtItemBackImagePathEdit"];
  
  



  $sql = "UPDATE table_item SET item_make='".$item_make."',item_model='".$item_model."',item_unitcost='".$item_unitcost."',item_color='".$item_color."',
  item_warrantyperiod='".$item_warrantyperiod."', supplier_id='".$supplier_id."', item_nostock='".$item_nostock."', item_filter='".$item_filter."', item_imgFront='".$item_imgFront."',item_imgBack='".$item_imgBack."'
  item_imgpath='".$item_imgpath."', item_description='".$item_description."', item_FullDescription='".$item_fulldescription."'
  WHERE item_id='".$item_id_hidden."'";


    if(mysqli_query($con,$sql)){
      echo "Record Updated Succesfully";
      header('Location:item.php');
  }
  else{
    echo "Error" .$sql. "<br>". mysqli_error($con);
   }
  mysqli_close($con);
   
  }



   //Query to Delete from DB

   if(isset($_POST['btnDelete'])){

    $item_id = $_POST["txtItemIdEdit"];

   $sql="DELETE FROM table_item WHERE item_id='".$item_id."' ";

   if (mysqli_query($con,$sql))
   {
     header('Location:item.php');
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
                <li class="active">
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
                      <th>item_id</th>
                      <th>item_make</th>
                      <th>item_model</th>
                      <th>item_unitcost</th>
                      <th>item_color</th>
                      <th>item_warrantyperiod</th>
                      <th>supplier_id</th>
                      <th>item_nostock</th>
                      <th>item_filter</th>
                      <th>item_imgpath</th>
                      <th>item_description</th>
                      <th>item_fulldescription</th>      
                    </tr>
                    <tbody>
                    <?php
                        while($rows=mysqli_fetch_array($result))
                        {
                        ?>
                      <tr>
                      <td>
                          <input class="btn btn-primary" data-toggle="modal" data-target="#myModalEdit" type="button" id="getItemID"
                            value="Edit">
                        </td>
                        <td><?php echo $rows['item_id']; ?></td>
                        <td><?php echo $rows['item_make']; ?></td>
                        <td><?php echo $rows['item_model']; ?></td>
                        <td><?php echo $rows['item_unitcost']; ?></td>
                        <td><?php echo $rows['item_color']; ?></td>
                        <td><?php echo $rows['item_warrantyperiod']; ?></td>
                        <td><?php echo $rows['supplier_id']; ?></td>
                        <td><?php echo $rows['item_nostock']; ?></td>
                        <td><?php echo $rows['item_filter']; ?></td>
                        <td><?php echo $rows['item_imgpath']; ?></td>
                        <td><?php echo $rows['item_description']; ?></td>
                        <td><?php echo $rows['item_FullDescription']; ?></td>
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
              <h4 class="modal-title" id="myModalLabel">Item</h4>
            </div>
            <div class="modal-body">
              <form action="item.php" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>ID</label>
                    <input type="text" class="form-control" id="txtItemIdEdit" name="txtItemIdEdit" disabled>
                  </div>
                  <div>
                    <input type="hidden" class="form-control" id="txtItemIdEditHidden" name="txtItemIdEditHidden">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Make</label>
                    <input type="text" class="form-control" id="txtItemMakeEdit" name="txtItemMakeEdit">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Model</label>
                    <input type="text" class="form-control" id="txtItemModelEdit" name="txtItemModelEdit">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Unit Cost</label>
                    <input type="text" class="form-control" id="txtItemUnitcostEdit" name="txtItemUnitcostEdit">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Item Color</label>
                    <input type="text" class="form-control" id="txtItemColorEdit" name="txtItemColorEdit">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Warranty Period</label>
                    <select class="form-control" name="txtItemWarrantyPeriodEdit" id="txtItemWarrantyPeriodEdit">
                      <option value="none">Choose Below</option>
                      <option>3 Month</option>
                      <option>6 Month</option>
                      <option>12 Months </option>
                      <option>24 Months</option>
                    </select>
                     
                  </div>
                  <div class="form-group col-md-6">
                    <label>Supplier ID</label>
                    <select class="form-control" name="txtSupplierIdEdit" id="txtSupplierIdEdit">
                    <?php while($row1=mysqli_fetch_array($result1)):;?>
                    <option><?php echo $row1[0];?></option>
                      <?php endwhile;?>
                  </select>
                      </div>
                  <div class="form-group col-md-6">
                    <label>No. Stock</label>
                    <input type="text" class="form-control" id="txtItemNostockEdit" name="txtItemNostockEdit" >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Item Filter</label>
                    <select class="form-control" name="txtItemFilterEdit" id="txtItemFilterEdit">
                      <option value="none">Choose Below</option>
                      <option>Most Rated</option>
                      <option>Latest</option>
                    </select>
                    </div>
                  <div class="form-group col-md-6">
                    <label>Description</label>
                    <input type="text" class="form-control" id="txtItemDescriptionEdit" name="txtItemDescriptionEdit" >
                  </div>
                  <div class="form-group col-md-12">
                    <label>Item Full Description</label>
                    <input type="text" class="form-control" id="txtItemFullDescriptionEdit" name="txtItemFullDescriptionEdit" >
                  </div>
                  <div class="form-group col-md-12">
                    <label>Main Image</label>
                    <input type="file" id="txtItemMainImagePathEdit" name="txtItemMainImagePathEdit">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Front Image</label>
                    <input type="file" id="txtItemFrontImagePathEdit" name="txtItemFrontImagePathEdit">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Back Image</label>
                    <input type="file" id="txtItemBackImagePathEdit" name="txtItemBackImagePathEdit">
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <input id="btnUpdate" type="submit" name="btnUpdate" class="btn btn-dark btn-flat" value="Update" onclick="ValidateEditForm()">

                    <!-- <input id="btnDelete" type="submit" name="btnDelete" class="btn btn-dark btn-flat" value="Delete"> -->
                    
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
              <h4 class="modal-title" id="myModalLabel">Item</h4>
            </div>
            <div class="modal-body">
              <form action="item.php" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>ID</label>
                    <input type="text" class="form-control" id="txtItemId" name="txtItemId" placeholder="Auto Generated" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Make</label>
                    <input type="text" class="form-control" id="txtItemMake" name="txtItemMake">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Model</label>
                    <input type="text" class="form-control" id="txtItemModel" name="txtItemModel">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Unit Cost</label>
                    <input type="text" class="form-control" id="txtItemUnitcost" name="txtItemUnitcost">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Item Color</label>
                    <input type="text" class="form-control" id="txtItemColor" name="txtItemColor">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Warranty Period</label>
                    <select class="form-control" name="txtItemWarrantyPeriod" id="txtItemWarrantyPeriod">
                      <option value="none">Choose Below</option>
                      <option>3 Month</option>
                      <option>6 Month</option>
                      <option>12 Months </option>
                      <option>24 Months</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Supplier ID</label>
                    <select class="form-control" name="txtSupplierId" id="txtSupplierId">
                    <?php while($row1=mysqli_fetch_array($result2)):;?>
                    <option><?php echo $row1[0];?></option>
                      <?php endwhile;?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>No. Stock</label>
                    <input type="text" class="form-control" id="txtItemNostock" name="txtItemNostock" >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Item Filter</label>
                    <select class="form-control" name="txtItemFilter" id="txtItemFilter">
                      <option value="none">Choose Below</option>
                      <option>Most Rated</option>
                      <option>Latest</option>
                    </select>
                    </div>
                  <div class="form-group col-md-6">
                    <label>Item Description</label>
                    <input type="text" class="form-control" id="txtItemDescription" name="txtItemDescription" >
                  </div>
                  <div class="form-group col-md-12">
                    <label>Item Full Description</label>
                    <input type="text" class="form-control" id="txtItemFullDescription" name="txtItemFullDescription" >
                  </div>
                  <div class="form-group col-md-12">
                    <label>Main Image</label>
                    <input type="file" id="txtItemMainImgPath" name="txtItemMainImgPath" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Front Image</label>
                    <input type="file" id="txtItemFrontImgPath" name="txtItemFrontImgPath" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Back Image</label>
                    <input type="file" id="txtItemBackImgPath" name="txtItemBackImgPath" required>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input id="btnSubmit" type="submit" name="btnSubmit"  class="btn btn-dark btn-flat" value="Insert" onclick="Validate()">
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
    document.getElementById("txtItemIdEdit").value = this.cells[1].innerHTML;
    document.getElementById("txtItemIdEditHidden").value = this.cells[1].innerHTML;
    document.getElementById("txtItemMakeEdit").value = this.cells[2].innerHTML;
    document.getElementById("txtItemModelEdit").value = this.cells[3].innerHTML;
    document.getElementById("txtItemUnitcostEdit").value = this.cells[4].innerHTML;
    document.getElementById("txtItemColorEdit").value = this.cells[5].innerHTML;
    //document.getElementById("txtItemWarrantyPeriodEdit").value = this.cells[6].innerHTML;
    document.getElementById("txtSupplierIdEdit").value = this.cells[7].innerHTML;
    document.getElementById("txtItemNostockEdit").value = this.cells[8].innerHTML;
    //document.getElementById("txtItemFilterEdit").value = this.cells[9].innerHTML;
    //document.getElementById("txtItemImgPathEdit").value = this.cells[10].innerHTML;
    document.getElementById("txtItemDescriptionEdit").value = this.cells[11].innerHTML;
    
  }
}
</script>

<script type="text/javascript">

  function validateItemMake() {
      var name = document.getElementById("txtItemMake").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Make");
        return false;
      }
      return true;
    }
    function validateItemModel() {
      var name = document.getElementById("txtItemModel").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Model");
        return false;
      }
      return true;
    }
    function validateItemUnitCost() {
      var name = document.getElementById("txtItemUnitcost").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Unit Cost");
        return false;
      }
      return true;
    }
    function validateItemColor() {
      var name = document.getElementById("txtItemColor").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Color");
        return false;
      }
      return true;
    }
  function validateItemWarrantyPeriod()
  {
    var war=document.getElementById("txtItemWarrantyPeriod").value;
    if(war=="none")
    {
      alert("Please select an Item Warranty Period");
      return false;
    }
    return true;
  }
  function validateItemNoStock() {
      var name = document.getElementById("txtItemNostock").value;
      if ((name == "") || (name == null)){
        alert("Please check Item No. of stock");
        return false;
      }
      return true;
    }
    function validateItemFilter()
    {
      var war=document.getElementById("txtItemFilter").value;
      if(war=="none")
     {
       alert("Please select an Item filter");
       return false;
     }
      return true;
    }
    function validateItemDescription() {
      var name = document.getElementById("txtItemDescription").value;
      if ((name == "") || (name == null)){
        alert("Please check Item description");
        return false;
      }
      return true;
    }
    function validateItemFullDescription() {
      var name = document.getElementById("txtItemFullDescriptionDescription").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Full description");
        return false;
      }
      return true;
    }
    function Validate() {
      if (!validateItemMake() ||!validateItemModel()|| !validateItemUnitCost() || !validateItemColor() || !validateItemWarrantyPeriod()||!validateItemNoStock()|| !validateItemFilter() || !validateItemDescription()|| !validateItemFullDescription()) {
        event.preventDefault();
      }
    }
</script>

<script type="text/javascript">

  function validateItemMakeEdit() {
      var name = document.getElementById("txtItemMakeEdit").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Make");
        return false;
      }
      return true;
    }
    function validateItemModelEdit() {
      var name = document.getElementById("txtItemModelEdit").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Model");
        return false;
      }
      return true;
    }
    function validateItemUnitCostEdit() {
      var name = document.getElementById("txtItemUnitcostEdit").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Unit Cost");
        return false;
      }
      return true;
    }
    function validateItemColorEdit() {
      var name = document.getElementById("txtItemColorEdit").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Color");
        return false;
      }
      return true;
    }
  function validateItemWarrantyPeriodEdit()
  {
    var war=document.getElementById("txtItemWarrantyPeriodEdit").value;
    if(war=="none")
    {
      alert("Please select an Item Warranty Period");
      return false;
    }
    return true;
  }
  
  function validateItemNoStockEdit() {
      var name = document.getElementById("txtItemNostockEdit").value;
      if ((name == "") || (name == null)){
        alert("Please check Item No. of stock");
        return false;
      }
      return true;
    }
    function validateItemFilterEdit() {
      var name = document.getElementById("txtItemFilterEdit").value;
      if(name=="none")
      {
      alert("Please select an Item Filter");
      return false;
    }
    return true;
  }
    function validateItemDescriptionEdit() {
      var name = document.getElementById("txtItemDescriptionEdit").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Full description");
        return false;
      }
      return true;
    }

    function validateItemFullDescriptionEdit() {
      var name = document.getElementById("txtItemFullDescriptionEdit").value;
      if ((name == "") || (name == null)){
        alert("Please check Item Full description");
        return false;
      }
      return true;
    }
    
    function ValidateEditForm() {
      if (!validateItemMakeEdit() ||!validateItemModelEdit()|| !validateItemUnitCostEdit() || !validateItemColorEdit() || !validateItemWarrantyPeriodEdit()||!validateItemNoStockEdit() || !validateItemFilterEdit()||!validateItemDescriptionEdit()|| !validateItemFullDescriptionEdit()) {
        event.preventDefault();
    }
    else{
      return confirm("Are you sure you want to make the changes?");
    }
  }
</script>

</body>

</html>