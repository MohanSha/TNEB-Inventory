<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


error_reporting(E_ERROR | E_PARSE);


$equipment_name = $_POST['equipment_name'];
$Voltage=$_POST['voltage_level'];
$capacity=$_POST['capacity'];
$make=$_POST['make'];
$makers_no=$_POST['makers_no'];
$number_of_taps=$_POST['number_of_taps'];
$tap_position=$_POST['tap_position'];
$year_of_MFG=$_POST['year_of_MFG'];
$doc=$_POST['doc'];
$maximum_reached=$_POST['maximum_reached'];
$present_status=$_POST['present_status'];
$po1=$_POST['po1'];
$loc=$_POST['loc'];



if (isset($_POST['equipment_name'])) 
  {
$query = "INSERT INTO auto_transformers_ict (`sno`, `equipment_name`, `voltage_level`, `capacity`, `make`, `makers_no`, `no_of_taps`, `tap_position`, `year_of_MFG`, `date_of_commisioning`, `maximum_reached`, `present_status`, `purchase_order`, `location`) VALUES (NULL,'$equipment_name','$Voltage','$capacity','$make','$makers_no','$number_of_taps','$tap_position','$year_of_MFG','$doc','$maximum_reached','$present_status','$po1','$loc')"; 
$data = mysql_query ($query)or die(mysql_error()); 
exit;
}
?>
<html>
    <head>
        <title>Auto Transformers(ICT)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body,td,th {
	color: #000;
}
    body {
	background-color: #4E9735;
}
    </style>
    </head>
    <body>
    <u> <h2> Auto Transformers(ICT)</h2></u>
      

        <form method="post" action="" onSubmit=window.location='success.php'>
            <p>
              <label for="equipment_name">Equipment name</label>&emsp;&emsp;&emsp;&ensp;
              <select name="equipment_name">
                <option value="ICT-I"> ICT-I</option>
                <option value="ICT-II"> ICT-II</option>
                <option value="ICT-III"> ICT-III</option>
                <option value="ICT-IV"> ICT-IV</option>
                <option value="ICT-V"> ICT-V</option>
              </select>
  <br>
  <br>
  <label for="voltage_level">Voltage Level in kV</label>
              &emsp;&emsp;
              <input type="text" name="voltage_level">
              
  <br><br>
  <label for="capacity">Capacity</label>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
  <input type="text" name="capacity"><br><br>
              
  <label for="make">Make</label>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <input type="text" name="make">
  <br>
  <br>
  <label for="makers_no">Maker's S.No</label>
  &emsp;&emsp;&emsp;&emsp;&nbsp;
  <input type="text" name="makers_no">
  <br><br> 
  <label for="number_of_taps">Number of TAPS</label>
  &emsp;&emsp;&emsp;
  <input type="text" name="number_of_taps">
  <br> <br>
  <label for="tap_position">TAP POSITION</label>
  &emsp;&emsp;&emsp;
  <input type="text" name="tap_position">
  <br> <br>
  <label for="year_of_MFG">YEAR OF MFG</label>
  &emsp;&emsp;&emsp;
  <input type="text" name="year_of_MFG">
              <br> <br>
              
             <label for="doc">Date of commisioning </label>
            &emsp;&ensp;
             <input type="Date" id="datepicker" name="doc">
              <br><br>
              <label for="maximum_reached">Maximum Reached</label>
              &emsp;&emsp;&nbsp;
              <input type="text" name="maximum_reached">
              <br> <br>
              <label for="present_status">Present Status</label>
              &emsp;&emsp;&emsp;&emsp;
              <input type="text" name="present_status">
              <br><br>
              <label for="po1">Purchase Order</label>
              &emsp;&emsp;&emsp;&ensp;
              <input type="text" name="po1">
              
              
              <br>
                <br>
        Location &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="text" name="loc" required>
        <br><br>
              <input type="submit" name="Submit">
              <input type="button" value="Back" onClick=window.location='list.html'>
          </p>
        </form>
    </body>
</html>
