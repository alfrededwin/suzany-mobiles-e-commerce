
<?php

/*
  this file is used as the main source of data fetching from database according to the relevant
  actions performed by the user. It mainly consists of SQL statements and passing parameters
*/
session_start();

require_once("backend/connection.php");
//check whether AJAX_itemID_send is set
if (isset($_POST["AJAX_itemID_send"])) {
  $query = "SELECT * FROM table_item WHERE item_id = '" . $_POST["AJAX_itemID_send"] . "'";
  $result = mysqli_query($connect, $query);


  while ($row = mysqli_fetch_array($result)) {

    $data["item_id"] = $row["item_id"];
    $data["item_make"] = $row["item_make"];
    $data["item_model"] = $row["item_model"];
    $data["item_unitcost"] = $row["item_unitcost"];
    $data["item_color"] = $row["item_color"];
    $data["item_warrantyperiod"] = $row["item_warrantyperiod"];
    $data["supplier_id"] = $row["supplier_id"];
    $data["item_nostock"] = $row["item_nostock"];
    $data["item_filter"] = $row["item_filter"];
    $data["item_imgpath"] = $row["item_imgpath"];
    $data["item_description"] = $row["item_description"];
    $data["item_FullDescription"] = $row["item_FullDescription"];
    $data["item_imgFront"] = $row["item_imgFront"];
    $data["item_imgBack"] = $row["item_imgBack"];
  }

  
  echo json_encode($data);
}

  //check whether AJAX_itemID_send is set
if (isset($_POST["btnCreateCart"])) {

  $sql_selectSale = "SELECT COUNT(*) FROM `table_sale` WHERE `customer_id` = '" . $_SESSION['customer_id'] . "' AND `status_id` = '10'";
  $rs_selectSale = mysqli_query($connect, $sql_selectSale);
  $options_sale = "";

  while ($row_sale = mysqli_fetch_array($rs_selectSale)) {
    $options_sale = $row_sale[0];
  }

  if ($options_sale == 0) {
      //executes if no pending carts are open
    $sale_id = null;
    $sale_date = date("Y-m-d");
    $sale_time = date("h:i:s");
    $sale_totalcost = "0";
    $sale_qty = "5";
    $customer_id = $_SESSION['customer_id'];
    $employee_id = "7";
    $status_id = "10";

    $sql_createSale = "INSERT INTO `table_sale` (
      `sale_id`, 
      `sale_date`, 
      `sale_time`, 
      `sale_totalcost`, 
      `sale_qty`, 
      `customer_id`, 
      `employee_id`, 
      `status_id`) 
      VALUES (
      NULL, 
      '" . $sale_date . "',
      '" . $sale_time . "',
      '" . $sale_totalcost . "', 
      '" . $sale_qty . "', 
      '" . $customer_id . "', 
      '" . $employee_id . "', 
      '" . $status_id . "')";

    if ($connect->query($sql_createSale) === true) {
      $data["message"] = "Cart created!";
    } else {
      $data["message"] = "Cart not created!";
    }
  }

  echo json_encode($data);
}




  //check whether AJAX_itemID_send is set
  if (isset($_POST["btnAddItemToCart"])) {

    $sql_selectSale = "SELECT MAX(sale_id) FROM `table_sale` WHERE `status_id` = '10'";
    $rs_selectSale = mysqli_query($connect, $sql_selectSale);
    $options_sale = "";
  
    while ($row_sale = mysqli_fetch_array($rs_selectSale)) {
      $options_sale = $row_sale[0];
    }
  
        //excecutes if a cart open
  
      $line_id = null;
      $line_qty = $_POST["line_qty"];
      $line_cost = $_POST["actual_unitcost"];
      $customer_id = $_SESSION['customer_id'];
      $sale_id = $options_sale;
      $item_id = $_POST["item_id"];
  
      $sql_addItemToCart = "INSERT INTO `table_line`(
        `line_id`, 
        `line_qty`, 
        `line_cost`,
        `customer_id`, 
        `sale_id`, 
        `item_id`) 
        VALUES (
        '" . $line_id . "',
        '" . $line_qty . "',
        '" . $line_cost . "',
        '" . $customer_id . "',
        '" . $sale_id . "',
        '" . $item_id . "')";
  
      if ($connect->query($sql_addItemToCart) === true) {
        $data["message"] = "Item added to cart!";
      } else {
        $data["message"] = $connect->error;
      }
  
  
      $sql_selectSaleDetails = "SELECT `sale_id`,`sale_totalcost`,`sale_qty` FROM `table_sale` WHERE `customer_id`='" . $_SESSION['customer_id'] . "' AND `status_id`='10'";
      $rs_selectSaleDetails = mysqli_query($connect, $sql_selectSaleDetails);
      $options_saleID = "";
      $options_saleCost = "";
      $options_saleQty = "";
    
      while ($row_saleDetails = mysqli_fetch_array($rs_selectSaleDetails)) {
        $options_saleID = $row_saleDetails[0];
        $options_saleCost = $row_saleDetails[1];
        $options_saleQty = $row_saleDetails[2];
      }

      $options_saleCost=$options_saleCost+$line_cost;
      $options_saleQty=$options_saleQty+$line_qty;


      $sql_updateSale = "UPDATE `table_sale` SET 
      `sale_totalcost`='".$options_saleCost."',
      `sale_qty`='".$options_saleQty."'
      WHERE `sale_id`='".$options_saleID."'";
  
      if ($connect->query($sql_updateSale) === true) {
        $data["message"] = "Item added to cart!";
      } else {
        $data["message"] = $connect->error;
      }
    echo json_encode($data);
  }
  





if (isset($_POST['btnViewCart'])) {

  $output = '';
  $subtotal = '';
  $sql = "SELECT * 
    FROM table_line AS line INNER JOIN table_sale AS sale ON line.sale_id =sale.sale_id 
    WHERE line.customer_id = '" . $_SESSION['customer_id'] . "' AND sale.status_id='10'
    ORDER BY line_id DESC";
  $result = mysqli_query($connect, $sql);
  $output .= '  
            <thead>
              <tr class="cart_item">  
                  <th></th>
                  <th>Photo</th>
                  <th>Item Name</th>
                  <th>Unit Cost</th>    
                  <th>Quantity</th>  
                  <th>Line Cost</th>  
                  
              </tr>
            </thead>';
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      $sql_itemDet = "SELECT `item_imgFront`,`item_make`,`item_model` FROM `table_item` WHERE `item_id` = '".$row["item_id"]."'";
      $rs_itemDet = mysqli_query($connect, $sql_itemDet);
      $options_itemImage = "";
      $options_make = "";
      $options_model = "";
  
      while ($row_itemDet = mysqli_fetch_array($rs_itemDet)) {
        $options_itemImage = $row_itemDet[0];
        $options_make = $row_itemDet[1];
        $options_model = $row_itemDet[2];
      }

      $output .= '  
                        <tr>  
                            <td><button type="button" name="btnLineDelete" data-id1="' . $row["line_id"] . '" class="btn btn-xs btn-danger btnLineDelete"><i class="fa fa-minus"></i></button></td>
                            <td><img width="100"  src="frontimages/'.$options_itemImage.'"></td>
                            <td>' .$options_make.' '. $options_model. '</td>
                            <td>' . 'LKR ' . $row["line_cost"] / $row["line_qty"] . '</td>  
                            <td>' . $row["line_qty"] . '</td>  
                            <td>' . 'LKR ' . $row["line_cost"] . '</td>   
                        </tr>  
                    ';
    }
  } else {
    $output .= '<tr>  
                                <td colspan="7" align="center">Data Not Found</td>  
                            </tr>';
  }
  $data["output"] = $output;

  echo json_encode($data);
}


if (isset($_POST['lineNo_get'])) {

  $lineNo_get = mysqli_escape_string($connect, $_POST["lineNo_get"]);

  $sql_delete = "DELETE FROM `table_line` WHERE `line_id` = '" . $lineNo_get . "'";

  if ($connect->query($sql_delete) === true) {
    header("location:viewcart.php");
  } else {
    echo "Error: " . $sql_delete . "<br>" . $connect->error;
  }

}

if (isset($_POST['checkUserLoginSession'])) {
  if (isset($_SESSION['customer_id'])) {
    $data["response"] = "true";
  } else {
    $data["response"] = "false";
  }
  echo json_encode($data);
}

if (isset($_POST['getCartCount'])) {

  $sql_selectSale = "SELECT COUNT(*)
  FROM table_line AS line INNER JOIN table_sale AS sale ON line.sale_id =sale.sale_id
  WHERE line.customer_id = '".$_SESSION['customer_id']."' AND sale.status_id='10'";
  
  $rs_selectSale = mysqli_query($connect, $sql_selectSale);
  $options_sale = "";

  while ($row_sale = mysqli_fetch_array($rs_selectSale)) {
    $options_sale = $row_sale[0];
  }

  $data["cartItemCount"] = $options_sale;;

  echo json_encode($data);
}


if (isset($_POST['getSubTotal'])) {

  $sql_selectSale = "SELECT SUM(line_cost)
  FROM table_line AS line INNER JOIN table_sale AS sale ON line.sale_id =sale.sale_id
  WHERE line.customer_id = '" . $_SESSION['customer_id'] . "' AND sale.status_id='10'";
  
  $rs_selectSale = mysqli_query($connect, $sql_selectSale);
  $options_sale = "";

  while ($row_sale = mysqli_fetch_array($rs_selectSale)) {
    $options_sale = $row_sale[0];
    if($options_sale==null){
      $options_sale=0;
    }
  }

  $data["subTotal"] = $options_sale;;

  echo json_encode($data);
}




//code for search
if (isset($_POST['liveSearch'])) {

$searchoutput='';
$searchquery = "SELECT * FROM table_item WHERE item_make LIKE '%".$_POST["search"]."%'";
$searchresult = mysqli_query($connect, $searchquery);
if(mysqli_num_rows($searchresult)>0)
{
  $searchoutput.='<h4 align="center">Search Result</h4>';
  while($row=mysqli_fetch_array($searchresult)){
    $searchoutput.='.$row["item_make"].';
  }
  echo $searchoutput;
}
else{
  echo 'data not found';
}
}   



if (isset($_POST['btnViewCheckout'])) {

  $output = '';
  $subtotal = '';
  $sql = "SELECT * 
    FROM table_line AS line INNER JOIN table_sale AS sale ON line.sale_id =sale.sale_id 
    WHERE line.customer_id = '" . $_SESSION['customer_id'] . "' AND sale.status_id='10'
    ORDER BY line_id DESC";
  $result = mysqli_query($connect, $sql);


  $sql_selectSale = "SELECT SUM(line_cost)
  FROM table_line AS line INNER JOIN table_sale AS sale ON line.sale_id =sale.sale_id 
  WHERE line.customer_id = '" . $_SESSION['customer_id'] . "' AND sale.status_id='10'";
  
  $rs_selectSale = mysqli_query($connect, $sql_selectSale);
  $options_sale = "";

  while ($row_sale = mysqli_fetch_array($rs_selectSale)) {
    $options_sale = $row_sale[0];
    //$options_tot = $options_sale+1000;
  }

  if($options_sale!=0){
    $options_tot = $options_sale+1000;
  }else{
    $options_tot=0;
  }

  $output .= '  
            <thead>
              <tr class="cart_item">  
                  <th>Photo</th>
                  <th>Item Name</th>
                  <th>Line Cost</th>  
              </tr>
            </thead>';
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      $sql_itemDet = "SELECT `item_imgFront`,`item_make`,`item_model` FROM `table_item` WHERE `item_id` = '".$row["item_id"]."'";
      $rs_itemDet = mysqli_query($connect, $sql_itemDet);
      $options_itemImage = "";
      $options_make = "";
      $options_model = "";
  
      while ($row_itemDet = mysqli_fetch_array($rs_itemDet)) {
        $options_itemImage = $row_itemDet[0];
        $options_make = $row_itemDet[1];
        $options_model = $row_itemDet[2];
      }


    

      $output .= '  
                        <tr>  
                            <td><img width="100"  src="frontimages/'.$options_itemImage.'"></td>
                            <td>' .$options_make.' '.$options_model. '</td>
                            <td>' . 'LKR ' . $row["line_cost"] . '</td>   
                        </tr>  
                    ';
    }
  } else {
    $output .= '<tr>  
                                <td colspan="7" align="center">Data Not Found</td>  
                            </tr>';
  }

  $output .= '<tr>  
                                <td>Cart Subtotal</td>  
                                <td>&nbsp;</td>
                                <td>LKR '.$options_sale.'</td>
                            </tr>
                            <tr>  
                                <td>Delivery Charges</td>  
                                <td>&nbsp;</td>
                                <td>LKR 1000</td>
                            </tr>
                            <tr>  
                                <td>Order Total</td>  
                                <td>&nbsp;</td>
                                <td id="lblOrderTotal">LKR '.$options_tot.'</td>
                            </tr>';
  $data["output"] = $output;

  echo json_encode($data);
}

if (isset($_POST['updateSale'])) {
  $data["message"] = "";
  $sql_update = "UPDATE `table_sale` SET `status_id`='20' WHERE `status_id`='10' AND `customer_id`='".$_SESSION['customer_id']."'";

  if ($connect->query($sql_update) === true) {
    $data["message"]="Order has been placed successfully!";
  } else {
    $data["message"]=$connect->error;
  }

  /*

  when the website is hosted the site can send emails using this
  block of code given bellow

  $to = "customer@gmail.com";
  $subject = "Order Confirmation";

  $message = "Test";

  // More headers
  $headers .= 'From: afridi.meedin@outlook.com' . "\r\n";
  $headers .= 'Cc: alfred.edwin@hotmail.co.uk' . "\r\n";

  mail($to,$subject,$message,$headers);
  */

  echo json_encode($data);

}

$connect->close();
?>