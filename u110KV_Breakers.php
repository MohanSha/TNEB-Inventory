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
$capacity=$_POST['capacity'];
$doc=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$medium=$_POST['medium'];
$operating_mech=$_POST['operating_mechanism'];
$purchase_order=$_POST['purchase_order'];

if (isset($_POST['equipment_name'])== 'update') 
{
$query = "UPDATE breakers_110kv SET `sno`='$sno',`equipment_name`='$equipment_name' , `make`='$make', `makers_no`='$makers_no',`capacity`='$capacity',`date_of_commisioning`='$doc', `present_status`='$present_status',`medium`='$medium',
`operating_mechanism`='$operating_mech',`purchase_order`='$purchase_order' WHERE `sno`='$sno'"; 
$data = mysql_query ($query)or die(mysql_error()); 

header("Location:usuccess.php");  
exit;
}

if (isset($_POST['sno'])== 'delete') 
{
$deletequery = "DELETE FROM breakers_110kv WHERE `sno`='$sno'"; 
$data1 = mysql_query ($deletequery)or die(mysql_error()); 

header("Location:usuccess.php");
exit;
}


?>
<html>
    <head>
        <title>110KV Breakers</title>
    </head>
    <body>
       <center> <h2>110KV Breakers </h2> </center>
<br><br>
        <strong>    <p>110KV Breakers Details &nbsp;</p>   </strong>
<table border="1">
  <tr align="center">
    <th>Ref.No</th>
     <th>Equipment Name </th>
     <TH>Make </TH>
      <th>Maker's S.No </th >
       <th>Capacity </th>
       <th>Date of commisioning </th>
        <th>Present Status </th>
         <th>Medium </th>
         <th>Operating Mechanism </th>
         <th>Purchase Order </th>
 </tr>
 <?php

 $rand=rand();
 $_SESSION['rand']=$rand;
   
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from breakers_110KV");
         }
  
         echo "<tr><td colspan='8'></td></tr>";
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
              <p><br>
            <label for="Capacity11">Capacity</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="capacity" required>
          </p>
          <p><br>
           <label for="doc11">Date of commisioning </label>
            &emsp;&emsp;&ensp;
            <input type="Date" name="date_of_commisioning" required>
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
            <label for="purchase_order">Purchase Order</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
            <input type="text" name="purchase_order" required>
          </p>
        
                  <p>
              <br>
              <input type="submit" value="Update" id="update">
              <input type="button" value="Back" onClick=window.location='updatedetails.html'>
            </p>
        </form>
    </body>
</html>