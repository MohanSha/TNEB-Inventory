<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: index.php");
   }
?>

<html>
<head>
<title>Logged out</title>
</head>
<body>
<center><h1>Your Logged Out </center>
</body>
</html>