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
$r=$_POST['R'];
$y=$_POST['Y'];
$b=$_POST['B'];
$capacity=$_POST['capacity'];
$MCOV=$_POST['MCOV'];
$year_of_MFG=$_POST['year_of_MFG'];
//$CT_ratio_adopted=$_POST['CT_ratio_adopted'];
$doc=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$po1=$_POST['purchase_order'];
$loc=$_POST['loc'];


//$maximum_reached=$_POST['maximum_reached'];

$query = "INSERT INTO surge_arrestors_400kv (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `capacity`, `MCOV`, `year_of_MFG`, `date_of_commisioning`, `present_status`, `purchase_order`, `location`) VALUES (NULL,'$equipment_name','$make','$r','$y','$b','$capacity','$MCOV','$year_of_MFG','$doc','$present_status','$po1','$loc')"; 
$data = mysql_query ($query)or die(mysql_error()); 
?>
<html>
    <head>
        <title>400KV Surge Arrestors</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body {
	background-color: #0FF;
}
    </style>
    </head>
    <body>
        <u><h2>400KV Surge Arrestors </h2></u>
        <form method="post" action="" onSubmit=window.location='success.php'>
            <label for="400KV  Surge Arrestor">Equipment name</label>
&emsp;&emsp;&emsp;&emsp;
  <input type="text" name="equipment_name" required>
          </p>
          <p>            <br>
            <label for="Make12">Make</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="make" required>
          </p>
          <p>            <br>
            
            <strong><label for="Makersno12"> Maker's S.No</label></strong><br>
            </label>
            <br>
            <label for="`R' Φ12">`R' &Phi; </label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="R" required>
            <br><br>
            <label for="`Y' Φ12">`Y' &Phi;</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="Y" required>
            <br><br>
            <label for="`B' Φ12">`B' &Phi;</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="B" required>
          </p>
          <p>            <br>
            
  <label for="Capacity5">Capacity</label>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <input type="text" name="capacity" required>
          </p>
          <p><br>
            <label for="mcov5">MCOV </label>
            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="MCOV" required>
          </p>
          <p>            <br>
            <label for="YOM5">YEAR OF MFG</label>
            &emsp;&emsp;&emsp;&emsp;
            <input type="text" name="year_of_MFG" required>
          </p>
          <p>            <br>
            <label for="doc12">Date of commisioning </label>
            &emsp;&emsp;
            <input type="Date" name="date_of_commisioning">
          </p>
          <p>            <br>
            <label for="PS12">Present Status</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="present_status" required>
          </p>
          <p>            <br>
            <label for="po12">Purchase Order</label>
            &emsp;&emsp;&emsp;&emsp;&ensp;
            <input type="text" name="purchase_order" required>
          </p>
          <p>            <br>
          Location &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       <input type="text" name="loc" required>
        <br><br>
        
            <input type="submit" name="Submit">
            <input type="button" value="Back" onClick=window.location='list.html'>
          </p>
        </form>
    </body>
</html>