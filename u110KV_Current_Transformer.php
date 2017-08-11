<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


error_reporting(E_ERROR | E_PARSE);

$sno=$_POST['sno'];
$equipment_name = $_POST['equipment_name'];
$make=$_POST['make'];
$r=$_POST['R'];
$y=$_POST['Y'];
$b=$_POST['B'];
$CT_ratio_available=$_POST['CT_ratio_available'];
$CT_ratio_adopted=$_POST['CT_ratio_adopted'];
$date_of_commisioning=$_POST['date_of_commisioning'];
$present_status=$_POST['present_status'];
$purchase_order=$_POST['purchase_order'];

if (isset($_POST['equipment_name'])== 'update') 
{  
$query = "UPDATE current_transformer_110kv SET `sno`='$sno',`equipment_name`='$equipment_name' , `make`='$make', `R`='$r',`Y`='$y',`B`='$b',`CT_ratio_available`='$CT_ratio_available',`CT_ratio_adopted`='$CT_ratio_adopted', `date_of_commisioning`='$date_of_commisioning', `present_status`='$present_status', `purchase_order`='$purchase_order' WHERE `sno`='$sno'"; 
$data = mysql_query ($query)or die(mysql_error()); 
header("Location:usuccess.php");  
exit;
}

if (isset($_POST['sno'])== 'delete') 
{
$deletequery = "DELETE FROM current_transformer_110kv WHERE `sno`='$sno'"; 
$data1 = mysql_query ($deletequery)or die(mysql_error()); 

header("Location:usuccess.php");
exit;
}


?>
<html>
    <head>
        <title>110kv current transformers </title>
        <script type="text/javascript">
window.onload = function () 
{
    toggle_div("sectiontohide");
};
     </script> 
  
    </head>
    <body>
       <center> <h2>110KV current transformers</h2> </center>
<br><br>
        <strong>    <p id="400_cutct"><h2>110KV current transformers &nbsp;</p> </h2>  </strong>

        <br>

<table border="1">
<tr align="center">
  <th>Ref.No</th>
  <th>Equipment Name </th>
  <TH>Make </TH>
  <th colspan="3">Maker's S.No </th>
  <td colspan="2">Ratio</td>
  <th>Date of commisioning </th>
  <th>Present Status </th>
  <th>Purchase Order </th>
  </tr>
<tr align="center">
    <th>&nbsp;</th> <th>&nbsp;</th><TH>&nbsp;</TH> <th>`R' Φ </th><th>`Y' Φ </th> <th>`B' Φ </th>
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
             $res=mysql_query("Select * from current_transformer_110KV");
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
                 echo "<td alig='center' width='40'> $r[9]</td>";
                 echo "<td alig='center' width='40'> $r[10]</td>";

                 
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

        <h2>110KV Current Transformer</h2>
        <form method="post" action="">
              <label for="230KV Current Transformer">Equipment name</label>
&emsp;&emsp;&emsp;&emsp;
  <input type="text" name="equipment_name" required>
          </p>
          <p>            <br>
            <label for="Make12">Make</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="make" required>
          </p>
          <p>            <br>
            
            <label for="Makersno12"><strong> Maker's S.No</strong></label>
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
            Ratio Available</label>
            &emsp;&emsp;&emsp;
            <input type="text" name="CT_ratio_available" required>
          </p>
          <p>            <br>
            <label for="rad12">Ratio Adopted</label>
           &emsp;&emsp;&emsp;
            <input type="text" name="CT_ratio_adopted" required>
          </p>
          <p>            <br>
            <label for="date_of_commisioning">Date of commisioning </label>
            &emsp;&emsp;
            <input type="date" name="date_of_commisioning">
          </p>
          <p>            <br>
            <label for="PS12">Present Status</label>
            &emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="present_status" required>
          </p>
          <p>            <br>
            <label for="purchase_order">Purchase Order</label>
            &emsp;&emsp;&emsp;&emsp;&ensp;
            <input type="text" name="purchase_order" required>
          </p>
          <p>            <br>
            <input type="submit" name="Submit">
            <input type="button" value="Back" onClick=window.location='updatedetails.html'>
          </p>
        </form>
    </body>
</html>