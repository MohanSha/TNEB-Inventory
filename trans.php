
<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


error_reporting(E_ERROR | E_PARSE);


$feeders = $_POST['feeders'];
$volt=$_POST['volt'];
$line_len=$_POST['line_len'];
$conn_ss=$_POST['conn_ss'];
$MW=$_POST['MW'];
$MVAR=$_POST['MVAR'];
$amps=$_POST['amps'];
$date_time=$_POST['date_time'];
$tied_rad_cond=$_POST['tied_rad_cond'];
$src_norm_feed=$_POST['src_norm_feed'];
$conductor=$_POST['conductor'];
$loc=$_POST['loc'];
//$loc=$_POST['loc'];

//$year_of_MFG=$_POST['year_of_MFG'];

//$maximum_reached=$_POST['maximum_reached'];

$query = "INSERT INTO transmission_line (`sno`, `feeders`, `volt`, `line_len`, `conn_ss`, `MW`, `MVAR`, `amps`, `date_time`, `tied_rad_cond`, `src_norm_feed`, `conductor`,`location`) VALUES (NULL,'$feeders','$volt','$line_len','$conn_ss','$MW','$MVAR','$amps','$date_time','$tied_rad_cond','$src_norm_feed','$conductor','$loc')"; 
$data = mysql_query ($query)or die(mysql_error()); 
?>

<html>
<head>
	<title>Feeders</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #0C9;
}
</style>
</head>
<body>
<form method="post" action="">

<h1>TRANSMISSION LINE DETAILS</h1>

	<label for="Feeders">Feeders  </label>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
   
  <input type="text" name="feeders" required> <br><br>
Volt 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type="text" name="volt" required><br><br>
Length of the line 
&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="text" name="line_len" required><br><br>
Connecting to other end SS 
&emsp;
<input type="text" name="conn_ss" required><br><br>
<strong>Maximum Demand reached </strong><br><br>
&emsp;&emsp;MW 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="MW" required><br><br>
&emsp;&emsp;MVAR &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="MVAR" required>
<br><br>
&emsp;&emsp;Amps &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="amps" required><br><br>
&emsp;&emsp;Date&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="date_time" required><br><br><br>
Normal operated in tied condition or Radial condition 
&ensp;<input type="text" name="tied_rad_cond" required><br><br>
Whether this is source feeder or normal feeder
&emsp;&emsp;&emsp; <input type="text" name="src_norm_feed" required><br><br>
Type of Conductor 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="text" name="conductor" required><br><br>
Location &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <select name="loc">
                <option value="SRIPERUMBUDUR">SRIPERUMBUDUR</option>
                <option value="egmore">egmore</option>
              </select>
        <br><br>
 <input type="submit" name="Submit">
<input type="button" value="Back" onClick=window.location='list.html'>
</form>
</body>
</html>