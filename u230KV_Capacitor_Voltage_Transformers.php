<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


error_reporting(E_ERROR | E_PARSE);

$location=$_POST['location'];
$sno=$_POST['sno'];
$equipment_name = $_POST['equipment_name'];
$make=$_POST['make'];
$makers_no=$_POST['makers_no'];
$CT_ratio_available=$_POST['CVT_ratio_available'];
$CT_ratio_adopted=$_POST['CVT_ratio_adopted'];
$doc=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$purchase_order=$_POST['purchase_order'];

if (isset($_POST['equipment_name'])== 'update') 
{  
$query = "UPDATE capacitor_voltage_transformers_230kv SET `sno`='$sno',`equipment_name`='$equipment_name' , `make`='$make',`makers_no`='$makers_no',`CVT_ratio_available`='$CT_ratio_available',`CVT_ratio_adopted`='$CT_ratio_adopted', `date_of_commisioning`='$doc', `present_status`='$present_status', `purchase_order`='$purchase_order' WHERE `sno`='$sno'"; 
$data = mysql_query ($query)or die(mysql_error()); 
header("Location:usuccess.php");  
exit;
}

if (isset($_POST['sno'])== 'delete') 
{
$deletequery = "DELETE FROM capacitor_voltage_transformers_230kv WHERE `sno`='$sno'"; 
$data1 = mysql_query ($deletequery)or die(mysql_error()); 

header("Location:usuccess.php");
exit;
}


?>
<html>
    <head>
        <title>230KV Capacitor Voltage Transformers</title>
        <script type="text/javascript">
window.onload = function () 
{
    toggle_div("sectiontohide");
};
     </script> 
  
    </head>
    <body>
       <center> <h2>230KV Capacitor Voltage Transformers</h2> </center>
<br><br>
        <strong>    <p id="400_cutcvt"><h2>230KV Capacitor Voltage Transformers Details &nbsp;</p> </h2>  </strong>

        <br>

<table border="1">
<tr align="center">
  <th>Ref.No</th>
  <th>Equipment Name </th>
  <TH>Make </TH>
  <th>Maker's S.No </th >
  <th colspan="2">Ratio</th>
  <th>Date of commisioning </th>
  <th>Present Status </th>
  <th>Purchase Order </th>
  </tr>
<tr align="center">
    <th>&nbsp;</th> <th>&nbsp;</th>            
    <th> Available </th>
    <th> Adopted</th>
    <th>&nbsp;</th> <th>&nbsp;</th> <th>&nbsp;</th> 
</tr>
 <?php

 $rand=rand();
 $_SESSION['rand']=$rand;
   
    
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from capacitor_voltage_transformers_230kv");
         }
  
         echo "<tr><td colspan='11'></td></tr>";
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
                // echo "<td alig='center' width='40'> $r[9]</td>";
                 //echo "<td alig='center' width='40'> $r[10]</td>";

                 
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

<h2><u>230KV Capacitor Voltage Transformers </u></h2>
        <form method="post" action="">
            
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
          <input type="date" name="date_of_commisioning" required>          
          <p>            <br> 
            <label for="PS9">Present Status</label>
         &emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="text" name="present_status" required>          
          <p>            <br>
            <label for="purchase_order">Purchase Order</label>
            &emsp;&emsp;&emsp;&emsp;&ensp;
          <input type="text" name="purchase_order" required>          <p>            <br>
            <input type="submit" name="Submit">
            <input type="button" value="Back" onClick=window.location='updatedetails.html'>
          </p>
        </form>
    </body>
</html>