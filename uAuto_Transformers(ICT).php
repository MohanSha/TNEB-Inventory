<?php
error_reporting(E_ERROR | E_PARSE);

session_start();

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
           if($count == 1) 
           {
           $msg = "Data updated successfully";
           }
   


$sno= $_POST['sno'];
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


  if (isset($_POST['equipment_name'])== 'submit') 
  {

$query = "UPDATE auto_transformers_ict SET `sno`='$sno', `equipment_name`='$equipment_name' , `voltage_level`='$Voltage', `capacity`='$capacity', `make`='$make', `makers_no`='$makers_no', `no_of_taps`='$number_of_taps', `tap_position`='$tap_position', `year_of_MFG`='$year_of_MFG', `date_of_commisioning`='$doc', `maximum_reached`='$maximum_reached', `present_status`='$present_status', `purchase_order`='$po1' WHERE `sno`='$sno'"; 
$data = mysql_query ($query)or die(mysql_error()); 

header("Location:usuccess.php");
exit;
}

if (isset($_POST['sno'])== 'delete') 
  {

$deletequery = "DELETE FROM auto_transformers_ict WHERE `sno`='$sno'"; 
$data1 = mysql_query ($deletequery)or die(mysql_error()); 
echo "Test";
header("Location:usuccess.php");
exit;
}


?>


<html>
    <head>
        <title>Auto Transformers(ICT)</title>
    </head>
    <body>
      <center>  <h2> Auto Transformers(ICT)</h2> </center>
  <br><br>
      <center>  <strong>    <p>Autotransformer Details &nbsp;</p>   </strong></center>

  <div id="sectiontohide">
   <table border="1">
 <tr align="center">
    <th>Ref.No</th> <th>Equipment Name </th>      <th>Voltage </th>     <th>Capacity </th> <TH>Make </TH> <th>Maker's S.No </th> <th>Number of TAPS </th> <th>TAP POSITION </th> <th>YEAR OF MFG </th> <th>Date of commisioning </th> <th>Maximum Reached </th> <th>Present Status </th> <th>Purchase Order </th>
 </tr> 
 
 <?php

 $rand=rand();
 $_SESSION['rand']=$rand;
   
  //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
  //{
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from auto_transformers_ict");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `auto_transformers_ict` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
         }
  
         echo "<tr><td colspan='13'></td></tr>";
         while($r=mysql_fetch_row($res))
         {
                 echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td width='200'>$r[1]</td>";
                 echo "<td width='100' align='center'>$r[2]</td>";
                 echo "<td alig='center' width='40'> $r[3]</td>";
                 echo "<td alig='center' width='40'> $r[4]</td>";
                 echo "<td alig='center' width='40'> $r[5]</td>";
                 echo "<td alig='center' width='40'> $r[6]</td>";
                 echo "<td alig='center' width='40'> $r[7]</td>";
                 echo "<td alig='center' width='40'> $r[8]</td>";
                 echo "<td alig='center' width='40'> $r[9]</td>";
                 echo "<td alig='center' width='40'> $r[10]</td>";
                 echo "<td alig='center' width='40'> $r[11]</td>";
                 echo "<td alig='center' width='40'> $r[12]</td>";
                 echo "</tr>";
        }
 // }
?>
  </table>
<br><br>
<h2>To delete any column enter the Reference ID below</h2>

<form method="post" action="" name="delete" id="delete">

        <label for="sno">Reference no</label>
        <input type="text" name="sno">

        <br><br>
         <input type="submit" value="Delete" id="delete">
</form>

<br>
<br>
<br>

<h2>Enter the details to update with Reference ID</h2>
        <form method="post" action="" name="update" id="update">

        <label for="sno">Reference no</label>
        <input type="text" name="sno">

        <br><br>
            <label for="equipment_name">Equipment name</label>
            <select name="equipment_name">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<br>
<!--<label for="voltage_level">Voltage Level in kV</label>-->
Voltage Level in kV
<input type="text" name="voltage_level" required>
 
<br><br>
<label for="capacity">Capacity</label>
<input type="text" name="capacity" required><br><br>

<label for="make">Make</label>
<input type="text" name="make" required>
<br>
<br>
<label for="makers_no">Maker's S.No</label>
<input type="text" name="makers_no" required>
<br><br> 
<label for="number_of_taps">Number of TAPS</label>
<input type="text" name="number_of_taps" required>
<br> <br>
<label for="tap_position">TAP POSITION</label>
<input type="text" name="tap_position" required>
<br> <br>
<label for="year_of_MFG">YEAR OF MFG</label>
<input type="text" name="year_of_MFG" required>
<br> <br>


<label for="doc">Date of commisioning </label>
<input type="Date" id="datepicker" name="doc" required>
 <br><br>
<label for="maximum_reached">Maximum Reached</label>
<input type="text" name="maximum_reached" required>
<br> <br>
<label for="present_status">Present Status</label>
<input type="text" name="present_status" required>
<br><br>
<label for="po1">Purchase Order</label>
<input type="text" name="po1" required>

        
        <br><br>
        <input type="submit" value="Update" id="submit">
        <input type="button" value="Back" onClick=window.location='updatedetails.html'>

        </form>
    </body>
</html>