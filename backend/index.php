<?php
    //includes the database connection 
    require_once('connection.php'); 

    require_once('dashboard.php'); 
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

  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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

<!-- stylesheet for graphs -->
<link href="css/nv.d3.min.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js" charset="utf-8"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/stream_layers.js"></script>
<style>
            text {
                font: 12px sans-serif;
            }
            svg {
                display:inline;
            }
            html{
                height: 100%;
                width: 100%;
            }
            body, #chart1, svg {
                /* margin: 0px;
                padding: 0px; */
                height: 100%;
                width: 100%;
            }
            
        </style>
</head>

<body class="has-side-panel side-panel-right fullwidth-page">
  <div id="wrapper" class="clearfix" style="min-height: 93%;">
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
                <li class="active">
                  <a href="index.php">Dashboard</a>
                </li>
                <li>
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
      <section class="bg-silver-light">
        <div class="container">
          <div class="section-content">
            <div class="row">
          <div class="col-md-12" style="height: 400px;padding:30px; padding-bottom:50px;">
            <div id="chart2" style="height:100%; text-align:center;">
            <h4>Current & Needed Stock</h2>
              <svg></svg>
              <br>
              <br>
              <br>
            </div> 
          </div>
          
          <div class="col-md-12" style="height: 400px;padding-bottom:50px;">
            <div id="chart3" style="height:100%; text-align:center;">
            <h4>Total Sales per Month</h2>
            <br>
              <br>
              <svg></svg>
              
            </div> 
            
          </div>
          <br>
              <br>
          <div class="col-md-6" style="height: 350px;padding:30px">
            <div id="chart4" style="height:100%; text-align:center;">
              
              <h4>Highest Stock Details</h2>
              <br>
              <br>
              <svg></svg>
              <br>
              <br>
            </div> 
            
          </div>
          
          <div class="col-md-6" style="height: 350px;padding:30px">
          
            <div id="chart5" style="height:100%; text-align:center;">
           
            <h4>Total Number of Customers</h2>
            <br>
              <br>
              <svg></svg>
              <br>
            <br>
            </div> 
          </div>
          <div class="col-md-6" style="height: 300px;padding:30px">
            <div id="chart6" style="height:100%; text-align:center;">
              
              <h4>Total Number of Employees</h2>
              <br>
              <br>
              <svg></svg>
              <br>
              <br>
              
            </div> 
          </div>
          <div class="col-md-6" style="height: 300px;padding:30px">
            <div id="chart7" style="height:100%; text-align:center;">
            <h4>Total Number of Suppliers</h2>
              <br>
              <br>
              
              <svg></svg>
             
            </div> 
          </div>
          </div>
          </div>
          </section>
          </div>
        
    
    <!-- end main-content -->
    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#20232E"> 
      <div class="footer-bottom" data-bg-color="#1B1D26" style="position: fixed;width: 100%;bottom: 0;">
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

  <!-- srcipts for graphs -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/nvd3/1.8.2/nv.d3.min.js"></script>
  <script>
     
        NeededStock =[
        {
            "key": "Current",
            "values": [<?php foreach($data["neededStock"] as $k=>$v){ ?>
            {
                'x':<?php echo $k ?>,
                'y':<?php echo $v['current'] ?>,
                'label':'<?php echo $v['item'] ?>'
            },
            <?php }?>
            ]
        },
        {
            "key": "Needed",
            "values": [<?php foreach($data["neededStock"] as $k=>$v){ ?>
            {
                'x':<?php echo $k ?>,
                'y':<?php echo $v['needed'] ?>,
                'label':'<?php echo $v['item'] ?>'
            },
            <?php }?>
            ]
        }
        ];
        salesPerMonth=[
            {
                "key":"Sales Per Month",
                "values": [<?php foreach($data["SalesPerMonth"] as $k=>$v){ ?>

                    {
                        'x':<?php echo $k ?>,
                        'y':<?php echo $v['count'] ?>,
                        'label':'<?php echo $v['month'] ?>'
                    },
                <?php }?>
                ]
            }
        ];
       

        nv.addGraph(function() {
            var chart = nv.models.multiBarChart();

            chart.xAxis
                .tickFormat(function(d) {
                console.log( NeededStock[0]['values'][d].label);
                return NeededStock[0]['values'][d].label;
            });

            chart.yAxis
                .tickFormat(d3.format(',f'));

            d3.select('#chart2 svg')
                .datum(NeededStock)
                .transition().duration(500)
                .call(chart)
                ;

            nv.utils.windowResize(chart.update);

            return chart;
        });
        
        nv.addGraph(function() {
        var chart = nv.models.lineChart()
            .useInteractiveGuideline(true)
            ;

        chart.xAxis
            .axisLabel('Month')
            .tickFormat(function(d) {
                console.log( salesPerMonth[0]['values'][d].label);
                return salesPerMonth[0]['values'][d].label;
            });
            ;

        chart.yAxis
            .axisLabel('Total Sales')
            .tickFormat(d3.format(',f'))
            ;

        d3.select('#chart3 svg')
            .datum(salesPerMonth)
            .transition().duration(500)
            .call(chart)
            ;

        nv.utils.windowResize(chart.update);

        return chart;
        });
        nv.addGraph(function() {
        data= [
            <?php foreach($data["ModelStock"] as $k=>$v){ ?>
                {
                    "value" : <?php echo $v['stock'] ?>,
                    'label':'<?php echo $v['item'] ?>'
                },
                <?php }?>               
            ]
    
        var chart = nv.models.pieChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .showLabels(false);

            d3.select("#chart4 svg")
                .datum(data)
            .transition().duration(1200)
                .call(chart);

        return chart;
        });
       
            nv.addGraph(function() {
                dataGraph={
                    "title": "Customer Count",
                    "subtitle": "in Number",
                    "ranges": [<?php echo $data["customercount"].','.($data["customercount"]+10)?>],
                    "measures": [<?php echo $data["customercount"]?>],
                    "markers": [<?php echo $data["customercount"]?>]
                    } 
                var chart = nv.models.bulletChart();

                d3.select('#chart5 svg')
                    .datum(dataGraph)
                    .transition().duration(1000)
                    .call(chart)
                    ;

                return chart;
                });

         nv.addGraph(function() {
          data={
                "title": "Employee Count",
                "subtitle": "in Number",
                "ranges": [<?php echo $data["employeecount"].','.($data["employeecount"]+10)?>],
                "measures": [<?php echo $data["employeecount"]?>],
                "markers": [<?php echo $data["employeecount"]?>]
            } 
        var chart = nv.models.bulletChart();

        d3.select('#chart6 svg')
            .datum(data)
            .transition().duration(1000)
            .call(chart)
            ;

        return chart;
         });

         nv.addGraph(function() {
          data={
            "title": "Supplier Count",
            "subtitle": "in Number",
            "ranges": [<?php echo $data["suppliercount"].','.($data["suppliercount"]+10)?>],
            "measures": [<?php echo $data["suppliercount"]?>],
            "markers": [<?php echo $data["suppliercount"]?>]
        } 
        var chart = nv.models.bulletChart();

        d3.select('#chart7 svg')
            .datum(data)
            .transition().duration(1000)
            .call(chart)
            ;

        return chart;
         });

        function data() {
            var sin = [],
                cos = [];

            for (var i = 0; i < 100; i++) {
                sin.push({x: i, y: Math.sin(i/10)});
                cos.push({x: i, y: .5 * Math.cos(i/10)});
            }

            return [
                {
                values: sin,
                key: 'Sine Wave',
                color: '#ff7f0e'
                },
                {
                values: cos,
                key: 'Cosine Wave',
                color: '#2ca02c'
                }
            ];
            }
    </script>



</body>

</html>



