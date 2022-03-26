 
 <?php
 //handled by Sakith and Edwin
  $con = mysqli_connect('localhost','root','','suzanydb');
  if(!$con)
  {	
    die("Cannot connect to DB server");		
  }

   //handled by Adam and Afridi
   $connect = mysqli_connect('localhost','root','','suzanydb');
   if(!$connect)
   {	
     die("Cannot connect to DB server");		
   }


   date_default_timezone_set('Asia/Colombo');
  ?>