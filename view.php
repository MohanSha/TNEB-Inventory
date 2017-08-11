<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

error_reporting(E_ERROR | E_PARSE);

$loc=$_POST['loc'];

?>


<span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;font-size: small"><span style="line-height: 19px"> </span></span>
 <html>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/jquery.ui.autocomplete.html.js" />
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style type="text/css">
   .bold {
	font-weight: bold;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: x-large;
}
   #auto {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #auto {
	font-size: x-large;
}
   #sectiontohide strong #400_br {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #400_br {
	font-size: x-large;
}
   #sectiontohide strong #400_cutct {
	font-size: x-large;
}
   #sectiontohide strong #400_cutcvt {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #400_cutcvt {
	font-size: x-large;
}
   #sectiontohide strong #400_sua {
	font-size: x-large;
}
   #sectiontohide strong #400_sua {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #230_br {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   .titl {
	font-size: x-large;
}
   #sectiontohide #230_br {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #230_cutct {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #230_cutct {
	font-size: x-large;
}
   #sectiontohide strong #230_pot {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #230_pot {
	font-size: x-large;
}
   #sectiontohide strong #230_cavt {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #230_cavt {
	font-size: x-large;
}
   #sectiontohide strong #230_sua {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #230_sua {
	font-size: x-large;
}
   #sectiontohide strong #110_br {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #110_br {
	font-size: x-large;
}
   #sectiontohide strong #110_cut {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #110_cut {
	font-size: x-large;
}
   #sectiontohide strong #110_pot {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #110_pot {
	font-size: x-large;
}
   #sectiontohide strong #110_sua {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
   #sectiontohide strong #110_sua {
	font-size: x-large;
}
   </style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <body>

     <form name="frmdropdown" method="post" action="">
     <center>
            <h2 align="center"> SUB STATION DETAILS</h2>
         <br>
           <!-- <strong> Select any Equipment </strong>--> 
            
<br>
<br>
        Location :
       <input type="text" name="loc" placeholder="Name" id="customerAutocomplte" class="ui-autocomplete-input" autocomplete="off">

       

        
    <!-- <input type="submit" name="find" value="View Details"/> -->
     
<button  name="submitbtn" onClick="toggle_div('sectiontohide');">View Details</button>
<br><br><br>
<table border=4>
<tr>
<th><a href="#auto">Autotransformer Details</a></th>
<th><a href="#400_br">400KV Breaker Details</a></th>
<th><a href="#400_cutct">400KV Current Transformer CT Details</a></th>
<th><a href="#400_cutcvt">400KV Current Transformer CVT Details</a></th>
</tr>
<tr>
<th><a href="#400_sua">400KV Surge Arrestors Details</a> </th>
<th><a href="#230_br">230KV Breakers Details</a></th>
<th><a href="#230_cutct">230KV Current Transformer CT Details</a></th>
<th><a href="#230_pot">230KV Potential Transformer Details</a></th>
</tr>
<tr>
<th><a href="#230_cavt">230KV Capacitor Voltage Transformer Details</a></th>
<th><a href="#230_sua">230KV Surge Arrestor Details</a></th>
<th><a href="#110_br">110KV Breaker Details</a></th>
<th><a href="#110_cut">110KV Current Transformer Details</a></th>
</tr>
<tr>
<th><a href="#110_pot">110KV Potential Transformer Details</a> </th>
<th><a href="#110_sua">110KV Surge Arrestor Details</a></th>
<th><a href="#trans">Transmission Details</a></th>
</tr>


<th> </th>
<th> </th>
<th> </th>
</table>


<p>
  
  <br>
  <span class="bold" id="trans"><h2>Transmission Line Details</h2></span></p>
<table width="200" border="1" bgcolor="#00ff00">
  <tr>
  <th scope="col">Ref.No</th>

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
   
  //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
  //{
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from transmission_line where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `transmission_line` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
  <strong>    </strong></p>
<p id="auto"><span id="auto"><h2>Autotransformer Details</h2><strong></strong></span><strong> &nbsp;</strong></p>   
<div id="sectiontohide">
  <table width="1060" height="48" border="1" bgcolor="#40a020">
 <tr align="center">
    <th width="49" height="42">Ref.No</th>
     <th width="89">Equipment Name </th> 
          <th width="56">Voltage </th>  
             <th width="63">Capacity </th>
              <TH width="45">Make </TH>
               <th width="74">Maker's S.No </th> 
               <th width="78">Number of TAPS </th> 
               <th width="91">TAP POSITION </th>
                <th width="69">YEAR OF MFG </th> 
                <th width="112">Date of commisioning </th>
                 <th width="93">Maximum Reached </th> 
                 <th width="70">PresentStatus </th>
                  <th width="89">Purchase Order </th>
                  <!--<th width="89">Location </th>-->
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
             $res=mysql_query("Select * from auto_transformers_ict where location='$loc'");
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
                // echo "<td alig='center' width='40'> $r[13]</td>";
                 echo "</tr>";
        }
    }
 // }
?>
  </table>


  <br><br>
        <strong>    <p id="400_br"><h2>400KV Breaker Details &nbsp;</p> </h2>  </strong>

<table border="1" bgcolor="#FF23400">
<tr align="center">
    <th>Ref.No</th> 
    <th>Equipment Name </th>
                <TH>Make </TH> 
                <th>Maker's S.No </th>
                 <th>Type </th>
                  <th>Breaking Capacity </th>
                   <th>Year of MFG</th>
                    <th>Date of commisioning </th>
                     <th>Present Status </th>
                     <th>Purchase Order </th>
                    <!-- <th width="89">Location </th>-->
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
             $res=mysql_query("Select * from breakers_400kv where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `breakers_400kv` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
                // echo "<td alig='center' width='40'> $r[10]</td>";
                 echo "</tr>";
        }
    }
 // }
?>
  </table>

 <br><br>
        <strong>    <p id="400_cutct"><h2>400KV Current Transformer CT Details &nbsp;</p> </h2>  </strong>

<table border="1" bgcolor="#996699">
<tr align="center">
  <th>Ref.No</th>
  <th>Equipment Name </th>
  <TH>Make </TH>
  <th colspan="3">Maker's S.No </th>
  <th colspan="2">Ratio</th>
  <th>Date of commisioning </th>
  <th>Present Status </th>
  <th>Purchase Order </th>
  </tr>
<tr align="center">
    <th>&nbsp;</th> <th>&nbsp;</th>            <TH>&nbsp;</TH>
    <th>`R' Φ </th>
    <th>`Y' Φ </th>
    <th>`B' Φ </th>
    <th> Available </th>
    <th> Adopted</th> 
    <th>&nbsp;</th> <th>&nbsp;</th> <th>&nbsp;</th> 
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
             $res=mysql_query("Select * from current_transformer_ct_400kv where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `current_transformer_ct_400kv` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
  </table>

 <br><br>
      <strong>    <p id="400_cutcvt"><h2>400KV Current Transformer CVT Details &nbsp;</p>  </h2> </strong>

<table border="1" bgcolor="#cccccc">
<tr align="center">
  <th>Ref.No</th>
  <th>Equipment Name </th>
  <TH>Make </TH>
  <th colspan="3" >Maker's S.No </th >
  <th colspan="2">Ratio</th>
  <th>Date of commisioning </th>
  <th>Present Status </th>
  <th>Purchase Order </th>
  </tr>
<tr align="center">
    <th>&nbsp;</th> <th>&nbsp;</th>            <TH>&nbsp;</TH> <th >`R' Φ</th >
    <th colspan="-1">`Y' Φ </th>
    <th>`B' Φ </th>
    <th> Available </th>
    <th> Adopted</th>
    <th>&nbsp;</th> <th>&nbsp;</th> <th>&nbsp;</th> 
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
             $res=mysql_query("Select * from current_transformer_cvt_400kv where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `current_transformer_cvt_400kv` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
  </table>

 

 <br><br>
      <strong>    <p id="400_sua"><h2>400KV Surge Arrestors Details &nbsp;</p></h2>   </strong>
      <table border="1" bgcolor="#006699">
      <tr align="center">
        <th>Ref.No</th>
        <th>Equipment Name </th>
        <th>Make </th>
        <th colspan="3" >Maker's S.No </th >
        <th>Capacity </th>
        <th>MCOV</th>
        <th>Year of MFG</th>
        <th>Date of commisioning </th>
        <th>Present Status </th>
        <th>Purchase Order </th>
        </tr>
      <tr align="center">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th >`R' Φ</th >
        <th colspan="-1">`Y' Φ </th>
        <th>`B' Φ</th>
        <td>&nbsp;</td>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
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
             $res=mysql_query("Select * from surge_arrestors_400KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `surge_arrestors_400KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
                 echo "<td alig='center' width='40'> $r[11]</td>";

                 
                 echo "</tr>";
        }
    }
 // }
?>
      </table>
      <br><br>
<p id="230_br"><span class="titl"><h2>230KV Breakers Details</h2></strong></span> &nbsp;</strong></p>   
<table border="1" bgcolor="#cc3300">
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
   
  //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
  //{
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from breakers_230KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `breakers_230KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
</table>

<br><br>
        <p id="230_cutct"><h2>230KV Current Transformer CT Details &nbsp;</p></h2>   

<table border="1" bgcolor="#ffcc99">
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
   
  //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
  //{
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from current_transformers_230KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `current_transformers_230KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
  </table>

<br><br>
      <strong>    <p id="230_pot"><h2>230KV Potential Transformer Details &nbsp;</p> </h2>  </strong>

<table border="1" bgcolor="#FFFF81">
  <tr align="center">
    <th>Ref.No</th>
    <th>Equipment Name </th>
    <TH>Make </TH>
    <th colspan="3">Maker's S.No </th>
    <th colspan="2">Ratio </th>
    <th>Date of commisioning </th>
    <th>Present Status </th>
    <th>Purchase Order </th>
  </tr>
<tr align="center">
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <TH>&nbsp;</TH>
  <th>`R' Φ</th>
  <th>`Y' Φ</th>
  <th>`B' Φ</th>
  <th>Available</th>
  <th> Adopted</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
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
             $res=mysql_query("Select * from potential_transformers_230KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `potential_transformers_230KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
  </table>


  <br><br>
      <strong>    <p id="230_cavt"><h2>230KV Capacitor Voltage Transformer Details &nbsp;</p></h2>   </strong>

<table border="1" bgcolor="#0099cc">
  <tr align="center">
    <th>Ref.No</th>
    <th>Equipment Name </th>
    <TH>Make </TH>
    <th>Maker's S.No </th>
    <th colspan="2">CVT Ratio  </th>
    <th>Date of commisioning </th>
    <th>Present Status </th>
    <th>Purchase Order </th>
  </tr>
<tr align="center">
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <TH>&nbsp;</TH>
  <th>&nbsp;</th>
  <th>Available</th>
  <th>Adopted</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
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
             $res=mysql_query("Select * from capacitor_voltage_transformers_230KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `capacitor_voltage_transformers_230KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
                 echo "</tr>";
        }
    }
 // }
?>
  </table>


<br><br>
      <strong>    <p id="230_sua"><h2>230KV Surge Arrestor Details &nbsp;</p></h2>   </strong>

<table border="1" bgcolor="#b0e57c">
  <tr align="center">
    <th>Ref.No</th>
    <th>Equipment Name </th>
    <TH>Make </TH>
    <th colspan="3">Maker's S.No </th>
    <th>Date of commisioning </th>
    <th>Present Status </th>
    <th>Purchase Order </th>
  </tr>
<tr align="center">
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <TH>&nbsp;</TH>
  <th>`R' Φ </th>
  <th>`Y' Φ </th>
  <th>`B' Φ </th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
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
             $res=mysql_query("Select * from surge_arrestors_230KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `surge_arrestors_230KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
                 echo "</tr>";
        }
    }
 // }
?>
  </table>


     <br><br>
        <strong>    <p id="110_br"><h2>110KV Breaker Details &nbsp;</p></h2>   </strong>

<table border="1" bgcolor="#9db1fa">
<tr align="center">
    <th>Ref.No</th> 
    <th>Equipment Name </th> 
               <TH>Make </TH> 
               <th>Maker's S.No </th>
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
   
  //if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
  //{
    if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from breakers_110kv where location='$loc'");
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
      <strong>    <p id="110_cut"><h2>110KV Current Transformer Details &nbsp;</p></h2>   </strong>

<table border="1" bgcolor="#FFec94">
  <tr align="center">
    <th>Ref.No</th>
    <th>Equipment Name </th>
    <TH>Make </TH>
    <th colspan="3">Maker's S.No </th>
    <th>CT Ratio  </th>
    <th>CT Ratio </th>
    <th>Date of commisioning </th>
    <th>Present Status </th>
    <th>Purchase Order </th>
  </tr>
<tr align="center">
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <TH>&nbsp;</TH>
  <th>`R' Φ </th>
  <th>`Y' Φ </th>
  <th>`B' Φ </th>
  <th>Available</th>
  <th>Adopted</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
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
             $res=mysql_query("Select * from current_transformer_110KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `current_transformer_110KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
  </table>


<br><br>
      <strong>    <p id="110_pot"><h2>110KV Potential Transformer Details &nbsp;</p></h2>   </strong>

<table border="1" bgcolor="#FF5b00">
  <tr align="center">
    <th>Ref.No</th>
    <th>Equipment Name </th>
    <TH>Make </TH>
    <th colspan="3">Maker's S.No </th>
    <th colspan="2">CT Ratio </th>
    <th>Date of commisioning </th>
    <th>Present Status </th>
    <th>Purchase Order </th>
  </tr>
<tr align="center">
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <TH>&nbsp;</TH>
  <th>`R' Φ </th>
  <th>`Y' Φ </th>
  <th>`B' Φ</th>
  <th>Available </th>
  <th> Adopted</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
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
             $res=mysql_query("Select * from potential_transformer_110KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `potential_transformer_110KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
    }
 // }
?>
  </table>


<br><br>
      <strong>    <p id="110_sua"><h2>110KV Surge Arrestor Details &nbsp;</p></h2>   </strong>

<table border="1" bgcolor="#FFe9e8">
  <tr align="center">
    <th>Ref.No</th>
    <th>Equipment Name </th>
    <TH>Make </TH>
    <th colspan="3">Maker's S.No </th>
    <th colspan="2">CT Ratio  </th>
    <th>Date of commisioning </th>
    <th>Present Status </th>
    <th>Purchase Order </th>
  </tr>
<tr align="center">
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <TH>&nbsp;</TH>
  <th>`R' Φ </th>
  <th>`Y' Φ </th>
  <th>`B' Φ </th>
  <th>Available</th>
  <th> Adopted</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
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
             $res=mysql_query("Select * from Surge_Arrestors_110KV where location='$loc'");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `Surge_Arrestors_110KV` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
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
