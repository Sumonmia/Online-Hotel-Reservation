<?php
session_start();
if(isset($_SESSION['username'])==false){
   	  header("Location:admin.php");
}
?>
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="css/adminpanel.css">
<title>Admin panel</title>
</head>

<body>
<center>
<div id="hd"><h1>ADMINSTRATION PANEL</h1></div>
</center>
<div id="menu">

  <div id="roommenu"> 
    <h2>Guest room description</h2>  
    <ul>
     <li> <a href="pending.php">Pending Room Requests</a></li>
      <li><a href="acceptedreq.php">Accepted Room Requests</a></li>
	  <li><a href="index.php">Home</a></li>
    </ul>
   </div>  <!--end of roommenu--> 
   
   <div id="partymenu">
   <h2>Party room description</h2>
   
   <ul>
     <li> <a href="pendingparty.php">Pending Party Room Requests</a></li>
      <li><a href="acceptedparty.php">Accepted Party Room Requests</a></li>
	  <li><a href="index.php">Home</a></li>
    </ul>
   
   </div>  <!--end of partyroom-->
   
  
</div>  <!--end of manu-->
<div id="comment">
     <center><a href="comment.php">See The Comments</a></center>
</div>  <!--end of comment-->
<p>Copyright by @sumon mia<br>Rajshahi Univercitiy of Engineering & Technology.</p>
 
</body>
</html>
