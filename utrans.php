<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


error_reporting(E_ERROR | E_PARSE);

$sno=$_POST['sno'];
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


if (isset($_POST['feeders'])== 'update') 
{  
$query = "UPDATE transmission_line SET `sno`='$sno',`feeders`='$feeders' , `volt`='$volt', `line_len`='$line_len',`conn_ss`='$conn_ss',`MW`='$MW',`MVAR`='$MVAR',`amps`='$amps',`date_time`='$date_time', `tied_rad_cond`='$tied_rad_cond', `src_norm_feed`='$src_norm_feed',`conductor`='$conductor',`location`='$loc' WHERE `sno`='$sno'"; 
$data = mysql_query ($query)or die(mysql_error()); 
header("Location:usuccess.php");  
exit;
}

if (isset($_POST['sno'])== 'delete') 
{
$deletequery = "DELETE FROM transmission_line WHERE `sno`='$sno'"; 
$data1 = mysql_query ($deletequery)or die(mysql_error()); 

header("Location:usuccess.php");
exit;
}


?>
<html>
    <head>
        <title>Transmission Line Details</title>
        <script type="text/javascript">
window.onload = function () 
{
    toggle_div("sectiontohide");
};
     </script> 
  
    </head>
    <body>
       <center> <h2>Transmission Line Details </h2> </center>
<br><br>
         <strong>    <p id="110_sua"><h2>Transmission Line Details &nbsp;</p></h2>   </strong>

<table width="200" border="1">
  <tr>
    <th scope="col"><div>
      Ref no    </div></th>
    
    <th scope="col"><div>
      Feeders    </div></th>
    <th scope="col"><div>
      Volt    </div></th>
    <th scope="col">Line Length</th>
    <th scope="col">Connecting to other end SS</th>
    <th colspan="4" scope="col">Maximum Demand reached </th>
    <th scope="col">Normal operated in tied condition or Radial condition</th>
    <th scope="col">source feeder or normal feeder</th>
    <th scope="col">Type of Conductor</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <th>MW</td>
    <th>MVAR</th>
    <th>Amps</th>
    <th>Date</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
<?php

 $rand=rand();
 $_SESSION['rand']=$rand;
   
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from transmission_line");
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
                // echo "<td alig='center' width='40'> $r[12]</td>";
                // echo "<td alig='center' width='40'> $r[13]</td>";
                 //echo "</tr>";
        }
?>
    </tr>
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

        <h2>100KV Surge Arrestors</h2>
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
       <input type="text" name="location" required>        <br><br>

          <p>            <br>
            <input type="submit" name="Submit">
            <input type="button" value="Back" onClick=window.location='updatedetails.html'>
          </p>
        </form>
    </body>
</html>