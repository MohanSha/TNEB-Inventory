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
//$o=$_POST['makers_no'];
$CT_ratio_available=$_POST['CT_ratio_available'];
$CT_ratio_adopted=$_POST['CT_ratio_adopted'];
$doc=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$po1=$_POST['purchase_order'];
$loc=$_POST['loc'];

//$year_of_MFG=$_POST['year_of_MFG'];

//$maximum_reached=$_POST['maximum_reached'];

$query = "INSERT INTO surge_arrestors_110kv (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `CT_ratio_available`, `CT_ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`, `location`) VALUES (NULL,'$equipment_name','$make','$r','$y','$b','$CT_ratio_available','$CT_ratio_adopted','$doc','$present_status','$po1','$loc')"; 
$data = mysql_query ($query)or die(mysql_error()); 
?>
<html>
    <head>
        <title>110KV Surge Arrestor</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body {
	background-color: #F60;
}
    </style>
    </head>
    <body>
        <h2><u>110KV Surge Arrestor</u></h2>
        <form method="post" action="" onSubmit=window.location='success.php'>
            <label for="110KV Surge Arrestor">Equipment name</label>
&emsp;&emsp;&emsp;&emsp;
  <input type="text" name="equipment_name" required>
          </p>
          <p>            <br>
            <label for="Make12">Make</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="make" required>
          </p>
          <p>            <br>
            
            <label for="Makersno12"> <strong>Maker's S.No</strong></label>
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
            <br>
            <label for="ra12"><br>
            CT Ratio Available</label>
            &emsp;&emsp;&emsp;
            <input type="text" name="CT_ratio_available" required>
          </p>
          <p>            <br>
            <label for="rad12">CT Ratio Adopted</label>
           &emsp;&emsp;&emsp;
            <input type="text" name="CT_ratio_adopted" required>
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
          
        Location &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text" name="loc" required>
        <br><br>
            <input type="submit" name="Submit">
            <input type="button" value="Back" onClick=window.location='list.html'>
          </p>
        </form>
    </body>
</html>