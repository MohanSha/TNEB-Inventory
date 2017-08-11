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
//$make=$_POST['make'];
$makers_no=$_POST['makers_no'];
$capacity=$_POST['capacity'];
$doc=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$medium=$_POST['medium'];
$operating_mech=$_POST['operating_mechanism'];
$po1=$_POST['purchase_order'];
$loc=$_POST['loc'];
//$year_of_MFG=$_POST['year_of_MFG'];

//$maximum_reached=$_POST['maximum_reached'];

$query = "INSERT INTO breakers_230kv (`sno`, `equipment_name`, `make`, `makers_no`, `capacity`, `date_of_commisioning`, `present_status`, `medium`, `operating_mechanism`, `purchase_order`, `location`) VALUES (NULL,'$equipment_name','$make','$makers_no','$capacity','$doc','$present_status','$medium','$operating_mech','$po1','$loc')"; 
$data = mysql_query ($query)or die(mysql_error()); 
?>
<html>
    <head>
        <title>230KV Breakers </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body {
	background-color: #093;
}
    </style>
    </head>
    <body>
        <h2><u>230KV Breakers</u> </h2>
        <form method="post" action="" onSubmit=window.location='success.php'>
          <p>
            <label for="230KV Breakers">Equipment name</label>
            &emsp;&emsp;&emsp;&emsp;
            <input type="text" name="equipment_name" required>
          </p>
          <p>            <br>
            <label for="Make11">Make</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="make" required>
          </p>
          <p><br>
            <label for="Makes11">Makers S.No</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="makers_no" required>
          </p>
          <p><br>
            <label for="Capacity11">Capacity</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="capacity" required>
          </p>
          <p><br>
           <label for="doc11">Date of commisioning </label>
            &emsp;&emsp;&ensp;
            <input type="text" name="date_of_commisioning" required>
          </p>
          <p><br> 
            <label for="PS11">Present Status</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
            <input type="text" name="present_status" required>
          </p>
          <p>            <br>
            <label for="Medium11">Medium</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="medium" required>
          </p>
          <p>            <br>
            <label for="om11">Operating Mechanism</label>
            &emsp;&emsp;&emsp;
            <input type="text" name="operating_mechanism" required>
          </p>
          <p>            <br>
            <label for="po11">Purchase Order</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
            <input type="text" name="purchase_order" required>
          </p>
          <p><br>
          Location &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text" name="loc" required>
        <br><br>
        
            <input type="submit" name="Submit">
            <input type="button" value="Back" onClick=window.location='list.html'>
          </p>
        </form>
    </body>
</html>