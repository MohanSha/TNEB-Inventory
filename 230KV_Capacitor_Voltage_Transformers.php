<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


error_reporting(E_ERROR | E_PARSE);


$equipment_name = $_POST['equipment_name'];
$make=$_POST['make'];
$makers_no=$_POST['makers_no'];
//$r=$_POST['R'];
//$y=$_POST['Y'];
//$b=$_POST['B'];
//$o=$_POST['makers_no'];
$CVT_ratio_available=$_POST['CVT_ratio_available'];
$CVT_ratio_adopted=$_POST['CVT_ratio_adopted'];
$doc=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$po1=$_POST['purchase_order'];
$loc=$_POST['loc'];

//$year_of_MFG=$_POST['year_of_MFG'];

//$maximum_reached=$_POST['maximum_reached'];

$query = "INSERT INTO capacitor_voltage_transformers_230kv (`sno`, `equipment_name`, `make`, `makers_no`, `CVT_ratio_available`, `CVT_ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`, `location`) VALUES (NULL,'$equipment_name','$make','$makers_no','$CVT_ratio_available','$CVT_ratio_adopted','$doc','$present_status','$po1','$loc')"; 
$data = mysql_query ($query)or die(mysql_error()); 
?>
<html>
    <head>
        <title>230KV Capacitor Voltage Transformers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body {
	background-color: #39F;
}
    </style>
    </head>
    <body>
        <h2><u>230KV Capacitor Voltage Transformers </u></h2>
        <form method="post" action="" onSubmit=window.location='success.php'>
            
<label for="230KV Capacitor Voltage Transformer">Equipment name</label>
&emsp;&emsp;&emsp;&emsp;
  <input type="text" name="equipment_name" required>
          </p>
          <p>            <br>
            <label for="Make12">Make</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="make" required>
          </p>
          <p>            <br>
            
            <label for="makers_no"> Maker's S.No</label>
         &emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="text" name="makers_no" required>          
          <p>            <br>
  <label for="ra9">CVT Ratio Available</label>
  &emsp;&emsp;&ensp;
  <input type="text" name="CVT_ratio_available" required>          
          <p>            <br>
            <label for="rad9">CVT Ratio Adopted</label>
            &emsp;&emsp;&ensp;
          <input type="text" name="CVT_ratio_adopted" required>          
          <p>            <br>
            <label for="doc9">Date of commisioning </label>
          &emsp;&emsp;
          <input type="Date" name="date_of_commisioning" required>          
          <p>            <br> 
            <label for="PS9">Present Status</label>
         &emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="text" name="present_status" required>          
          <p>            <br>
            <label for="po9">Purchase Order</label>
            &emsp;&emsp;&emsp;&emsp;&ensp;
          <input type="text" name="purchase_order" required>          
          <p>            <br>

        Location &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text" name="loc" required>
        <br><br>
            <input type="submit" name="Submit">
            <input type="button" value="Back" onClick=window.location='list.html'>
        </form>
    </body>
</html>
