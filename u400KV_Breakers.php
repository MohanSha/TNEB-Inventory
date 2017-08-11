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
$make=$_POST['make'];
$makers_no=$_POST['makers_no'];
$type=$_POST['type'];
$breaking_capacity=$_POST['breaking_capacity'];
$year_of_MFG=$_POST['year_of_MFG'];
$date_of_commisioning=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$purchase_order=$_POST['purchase_order'];

if (isset($_POST['equipment_name'])== 'update') 
{
$query = "UPDATE breakers_400kv SET `sno`='$sno',`equipment_name`='$equipment_name' , `make`='$make', `makers_no`='$makers_no',`type`='$type',`breaking_capacity`='$breaking_capacity', `year_of_MFG`='$year_of_MFG', `date_of_commisioning`='$date_of_commisioning', `present_status`='$present_status', `purchase_order`='$purchase_order' WHERE `sno`='$sno'"; 
$data = mysql_query ($query)or die(mysql_error()); 

header("Location:usuccess.php");  
exit;
}

if (isset($_POST['sno'])== 'delete') 
{
$deletequery = "DELETE FROM breakers_400kv WHERE `sno`='$sno'"; 
$data1 = mysql_query ($deletequery)or die(mysql_error()); 

header("Location:usuccess.php");
exit;
}


?>
<html>
    <head>
        <title>400KV Breakers</title>
    </head>
    <body>
       <center> <h2>400KV Breakers </h2> </center>
<br><br>
        <strong>    <p>400KV Breaker Details &nbsp;</p>   </strong>

<table border="1">
<tr align="center">
    <th>Ref.No</th> <th>Equipment Name </th>            <TH>Make </TH> <th>Maker's S.No </th> <th>Type </th> <th>Breaking Capacity </th> <th>Year of MFG</th> <th>Date of commisioning </th><th>Present Status</th> <th>Purchase Order </th>
 </tr> 
 
 <?php

 $rand=rand();
 $_SESSION['rand']=$rand;
   
  
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from breakers_400kv");
         }
         echo "<tr><td colspan='9'></td></tr>";
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

                 echo "</tr>";
        }

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
            <p>
  <label for="equipment_name">Equipment name</label>
  &emsp;&emsp;&emsp;&emsp;
  <input type="text" name="equipment_name" required>
            </p>
            <p>              <br>
              <label for="make">Make</label>
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              <input type="text" name="make" required>
            </p>
            <p>              <br>
              
              <label for="makers_no">Maker's S.No</label>
              &emsp;&emsp;&emsp;&emsp;&emsp;
              <input type="text" name="makers_no" required>
            </p>
            <p>              <br>
              <label for="type">Type</label>
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
              <input type="text" name="type" required>
            </p>
            <p>              <br>
              
              <label for="breaking_capacity">Breaking Capacity</label>
              &emsp;&emsp;&emsp;&ensp;
              <input type="text" name="breaking_capacity" required>
            </p>
            <p>              <br>
              <label for="year_of_MFG">YEAR OF MFG</label>
              &emsp;&emsp;&emsp;&emsp;
              <input type="text" name="year_of_MFG" required>
            </p>
            <p>              <br>
              <label for="date_of_commisioning">Date of commisioning </label>&emsp;&emsp;&ensp;
              <input type="Date" name="date_of_commisioning" required>
            </p>
            <p>              <br>
              <label for="present_status">Present Status</label>
              &emsp;&emsp;&emsp;&emsp;&ensp;
              <input type="text" name="present_status" required>
            </p>
            <p>              <br>
              <label for="purchase_order">Purchase Order</label>
              &emsp;&emsp;&emsp;&emsp;&ensp;
              <input type="text" name="purchase_order">
            </p>
            <p>
              <br>
              <input type="submit" value="Update" id="update">
              <input type="button" value="Back" onClick=window.location='updatedetails.html'>
            </p>
        </form>
    </body>
</html>