<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

error_reporting(E_ERROR | E_PARSE);

?>

<span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;font-size: small"><span style="line-height: 19px"> </span></span>
 <html>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <body>

     <form name="frmdropdown" method="post" action="">
     <center>
            <h2 align="center">400 KV/230 KV- 110 KV SRIPERUMBUDUR SUB STATION DETAILS</h2>
         <br>
           <!-- <strong> Select any Equipment </strong>--> 
            <br>
            <br>
<br>
    <!-- <input type="submit" name="find" value="View Details"/> -->
     
<button  name="submitbtn" onClick="toggle_div('sectiontohide');">View Details</button>

<script type="text/javascript">
window.onload = function () 
{
    toggle_div("sectiontohide");
};
</script>
     <br><br>
        <strong>    <p>Autotransformer Details &nbsp;</p>   </strong>

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
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
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
    }
 // }
?>
  </table>


<br><br>
        <strong>    <p>400KV Breaker Details &nbsp;</p>   </strong>

<table border="1">
<tr align="center">
    <th>Ref.No</th> <th>Equipment Name </th>            <TH>Make </TH> <th>Maker's S.No </th> <th>Type </th> <th>Breaking Capacity </th> <th>Year of MFG</th> <th>Date of commisioning </th> <th>Purchase Order </th>
 </tr> 
 
 <?php

 $rand=rand();
 $_SESSION['rand']=$rand;
   
  //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
  //{
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from breakers_110kv");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `breakers_110kv` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
         }
  
         echo "<tr><td colspan='10'></td></tr>";
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
    }
 // }
?>
  </table>


     <br><br>
        <strong>    <p>110KV Breaker Details &nbsp;</p>   </strong>

<table border="1">
<tr align="center">
    <th>Ref.No</th> <th>Equipment Name </th>            <TH>Make </TH> <th>Maker's S.No </th> <th>Capacity </th>  <th>Date of commisioning </th> <th>Present Status </th> <th>Medium </th> <th>Operating Mechanism </th><th>Purchase Order </th>
 </tr> 
 
 <?php

 $rand=rand();
 $_SESSION['rand']=$rand;
   
  //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
  //{
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from breakers_110kv");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `breakers_110kv` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
         }
  
         echo "<tr><td colspan='10'></td></tr>";
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
    }
 // }
?>
  </table>
  </div>


 </center>
</form>
<div id="header">
<center><a href="index.php">Home</a> &nbsp;<a href="logout.php">Log Out</a></div></center>
</body>
</html>
