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
$type=$_POST['type'];
$capacity=$_POST['breaking_capacity'];
$year_of_MFG=$_POST['year_of_MFG'];
$doc=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$po1=$_POST['purchase_order'];
$loc=$_POST['loc'];

//$maximum_reached=$_POST['maximum_reached'];

$query = "INSERT INTO breakers_400kv (`sno`, `equipment_name`, `make`, `makers_no`, `type`, `breaking_capacity`, `year_of_MFG`, `date_of_commisioning`, `present_status`, `purchase_order`, `location`) VALUES (NULL,'$equipment_name','$make','$makers_no','$type','$capacity','$year_of_MFG','$doc','$present_status','$po1','$loc')"; 
$data = mysql_query ($query)or die(mysql_error()); 
?>
<html>
    <head>
        <title>400KV Breakers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body {
	background-color: #990;
}
    </style>
    </head>
    <body>
        <h2><u>400KV Breakers</u> </h2>
        <form method="post" action="" onSubmit=window.location='success.php'>
            <p>
  <label for="400kv breaker">Equipment name</label>
  &emsp;&emsp;&emsp;&emsp;
  <input type="text" name="equipment_name" required>
            </p>
            <p>              <br>
              <label for="Make2">Make</label>
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              <input type="text" name="make" required>
            </p>
            <p>              <br>
              
              <label for="Makersno2">Maker's S.No</label>
              &emsp;&emsp;&emsp;&emsp;&emsp;
              <input type="text" name="makers_no" required>
            </p>
            <p>              <br>
              <label for="type2">Type</label>
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
              <input type="text" name="type" required>
            </p>
            <p>              <br>
              
              <label for="BCapacity">Breaking Capacity</label>
              &emsp;&emsp;&emsp;&ensp;
              <input type="text" name="breaking_capacity" required>
            </p>
            <p>              <br>
              <label for="YOM2">YEAR OF MFG</label>
              &emsp;&emsp;&emsp;&emsp;
              <input type="text" name="year_of_MFG" required>
            </p>
            <p>              <br>
              <label for="doc2">Date of commisioning </label>&emsp;&emsp;&ensp;
              <input type="text" name="date_of_commisioning" required>
            </p>
            <p>            <br>
            <label for="PS12">Present Status</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="present_status" required>
          </p>
            <p>              <br>
              <label for="po2">Purchase Order</label>
              &emsp;&emsp;&emsp;&emsp;&ensp;
              <input type="text" name="purchase_order">
            </p>
            <p>
              <br>
               
        Location &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text" name="loc" required>
        <br><br>
              <input type="submit" name="Submit">
              <input type="button" value="Back" onClick=window.location='list.html'>
            </p>
        </form>
    </body>
</html>