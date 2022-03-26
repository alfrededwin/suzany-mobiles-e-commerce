
<?php

    //includes the database connection 
    require_once('connection.php'); 



    //step1
    //item count
    $sql_selectItemCount= "SELECT COUNT(item_id) FROM table_item";
    $rs_selectItemCount = mysqli_query($connect, $sql_selectItemCount);
    $options_itemCount = "";
    while($row_itemCount = mysqli_fetch_array($rs_selectItemCount))
    {
        $options_itemCount=$row_itemCount[0];
       
    }

    //step2
    $data["itemcount"] = $options_itemCount;

     //item count
     $sqlModelStock="SELECT `item_model`,item_nostock*100/(select SUM(item_nostock) from `table_item`) as itemstock FROM `table_item`";
     $rs_selectModelStock = mysqli_query($connect, $sqlModelStock);
     $options_ModelStock = array();
     while($row_ModelStock = mysqli_fetch_array($rs_selectModelStock))
     {
         $a=array('item'=>$row_ModelStock[0],'stock'=>$row_ModelStock[1]);
         array_push($options_ModelStock,$a);
       
     }
 
     //step2
     $data["ModelStock"] = $options_ModelStock;

    //item count
    $sqlNeededStock="SELECT `item_model`,`item_nostock` as current, IF(`item_nostock`<20,20-item_nostock,0) as needed FROM `table_item` where item_nostock<20 limit 8";
    $rs_selectNeededStock = mysqli_query($connect, $sqlNeededStock);
    $options_NeededStock = array();
    while($row_NeededStock = mysqli_fetch_array($rs_selectNeededStock))
    {
        $a=array('item'=>$row_NeededStock[0],'current'=>$row_NeededStock[1],'needed'=>$row_NeededStock[2]);
        array_push($options_NeededStock,$a);
      
    }

    //step2
    $data["neededStock"] = $options_NeededStock;

    //item count
    $sqlSalesPerMonth="SELECT COUNT(*) as count, CONCAT(YEAR(`sale_date`),'-',MONTH(`sale_date`)) as date FROM `table_sale` GROUP BY MONTH(`sale_date`), YEAR(`sale_date`) ORDER BY YEAR(`sale_date`), MONTH(`sale_date`) ASC limit 8";
    $rs_selectSalesPerMonth = mysqli_query($connect, $sqlSalesPerMonth);
    $options_SalesPerMonth = array();
    while($row_SalesPerMonth = mysqli_fetch_array($rs_selectSalesPerMonth))
    {
        $a=array('count'=>$row_SalesPerMonth[0],'month'=>$row_SalesPerMonth[1]);
        array_push($options_SalesPerMonth,$a);
      
    }

    //step2
    $data["SalesPerMonth"] = $options_SalesPerMonth;


    //supplier Count
    $sql_selectSupplierCount= "SELECT COUNT(supplier_id) FROM table_supplier";
    $rs_selectSupplierCount = mysqli_query($connect, $sql_selectSupplierCount);
    $options_supplierCount = "";
    while($row_supplierCount = mysqli_fetch_array($rs_selectSupplierCount))
    {
        $options_supplierCount=$row_supplierCount[0];
      
    }

    $data["suppliercount"] = $options_supplierCount;


    //Employee Count
    $sql_selectEmployeeCount= "SELECT COUNT(employee_id) FROM table_employee";
    $rs_selectEmployeeCount = mysqli_query($connect, $sql_selectEmployeeCount);
    $options_employeeCount = "";
    while($row_employeeCount = mysqli_fetch_array($rs_selectEmployeeCount))
    {
        $options_employeeCount=$row_employeeCount[0];
      
    }

    $data["employeecount"] = $options_employeeCount;



    
    //Customer Count
    $sql_selectCustomerCount= "SELECT COUNT(customer_id) FROM table_customer";
    $rs_selectCustomerCount = mysqli_query($connect, $sql_selectCustomerCount);
    $options_customerCount = "";
    while($row_customerCount = mysqli_fetch_array($rs_selectCustomerCount))
    {
        $options_customerCount=$row_customerCount[0];
      
    }

    $data["customercount"] = $options_customerCount;




    
    //Sales Count
    $sql_selectSaleCount= "SELECT COUNT(sale_id) FROM table_sale";
    $rs_selectSaleCount = mysqli_query($connect, $sql_selectSaleCount);
    $options_saleCount = "";
    while($row_saleCount = mysqli_fetch_array($rs_selectSaleCount))
    {
        $options_saleCount=$row_saleCount[0];
      
    }

    $data["salecount"] = $options_saleCount;




     
    //In Stock Count
    $sql_selectStockCount= "SELECT SUM(item_nostock) FROM table_item";
    $rs_selectStockCount = mysqli_query($connect, $sql_selectStockCount);
    $options_stockCount = "";
    while($row_stockCount = mysqli_fetch_array($rs_selectStockCount))
    {
        $options_stockCount=$row_stockCount[0];
      
    }

    $data["stockcount"] = $options_stockCount;




    //Warranty Count
    $sql_selectWarrantyCount= "SELECT COUNT(item_warrantyperiod) FROM table_item";
    $rs_selectWarrantyCount = mysqli_query($connect, $sql_selectWarrantyCount);
    $options_warrantyCount = "";
    while($row_warrantyCount = mysqli_fetch_array($rs_selectWarrantyCount))
    {
        $options_warrantyCount=$row_warrantyCount[0];
      
    }

    $data["warrantycount"] = $options_warrantyCount;


?>









