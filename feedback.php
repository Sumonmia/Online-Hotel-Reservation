



<?php

include('connect.php');
$error_message="";

if (isset($_POST['submit'])){  

   $fullname = mysql_real_escape_string($_POST['fullname']);
   $email = mysql_real_escape_string($_POST['email']);
   $comment = mysql_real_escape_string( $_POST['comment']);

   
   
   if (empty($fullname)|| empty($email) || empty($comment)) {
    $error_message="Fill up al the fields properly...";
     }

else{

$query="INSERT INTO guest_comments(fullname,email,comment)
 VALUES('{$fullname}','{$email}','{$comment}')";
	  
if(mysql_query($query)){
  echo "<script> thank u</script>";
}
 
}


 mysql_close($connection);





}

?>







<!DOCTYPE html>
<html>
<head>
<title> feedback</title>
<title>CSS Example</title><link rel="stylesheet" href="css/fd.css">
<link rel="stylesheet" href="css/h1.css">
</head>
<body>
 
 <div id="main"> 

<div id="welcome"> 
<marquee direction="left" scroll amount="20">WELCOME TO HOTEL DECENT</marquee>
</div> <!--end of welcome--->

<div id="im">

<img class="mainim" src="images/08.jpg">

</div> <!--end of im-->

<div id="menu">
 
<center>
<nav>
<a href="index.php"  title="This is home page">HOME</a>
<a href="booking.php" title="bid for seat">BOOKING</a>
<a href="services.php" title="service provides">SERVICES</a>
<a href="feedback.php" title="comment about us">FEEDBACK</a>
<a href="contact.php" title="we are here for your help">CONTACT US</a>
</nav>
</center>
 
</div>  <!--end of menu--> 



 <div id="formfd">
  <center>
  <h3><?php echo "".$error_message; ?> </h3>
</center>
 
 <center>  
 <div id="formwarp">
 
 <div id="head">
    <center>
    <h2>Your feedback is our assest</h2><hr/>
	</center>
 </div>   <!--end of head-->
 <div id="form">
 
 <form action="feedback.php" method="POST">
 <div class="row">
 <div class="label">Your name</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="fullname" class="detail" name="fullname" value=" "/>
 </div> <!---end input--->
 <div class="context">e.g. sumon mia</div> <!--end context-->
 </div>   <!---end of row--->
 
 
 <div class="row">
 <div class="label">Your Email</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="email" class="detail" name="email" value=" "/>
 </div> <!---end input--->
 <div class="context">your email will be protected </div> <!--end context-->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">Your Message</div> <!---end label--->
 <div class="input"> 
 <textarea id="comment" name="comment" class="mess"></textarea>
 </div> <!---end input--->
 </div>   <!---end of row--->
 
 <div class="submit"> 
 <input type="submit" id="submit" name="submit" value="send message" />
 
 </div> <!---end of submit-->
 </form>
 </div> <!---end of form-->

 </div> <!--end of formwarp--->
 </center>

 
  </div>  <!--end of fromfd-->
 
 
 
 
 <div id="foot">
  
  <center>
    <div class="mlinks">
<nav>
<a href="index.php"  title="This is home page">HOME</a>
<a href="booking.php" title="bid for seat">BOOKING</a>
<a href="services.php" title="service provides">SERVICES</a>
<a href="feedback.php" title="comment about us">FEEDBACK</a>
<a href="contact.php" title="we are here for your help">CONTACT US</a>
</nav>

   </div>  <!--end of mlinks-->
  </center>
  
  <center>
  <div class="social">
  <nav>
  <a href="http://www.Facebook.com" target="_blank">
  <img src="images/face.png" alt="Facebook" height="70" width="80"/> </a>
  
  <a href="https://plus.google.com" target="_blank">
  <img src="images/ggl.jpg" alt="Logon Google plus" height="70" width="80"/></a>
  
  <a href="https://www.linkedin.com" target="_blank">
  <img src="images/lnkin.jpg" alt="Logon Google plus" height="70" width="80"/></a>
  
  <a href="https://twitter.com" target="_blank">
  <img src="images/twt.jpg" alt="Logon Google plus" height="70" width="80"/></a>
  </nav>
  </center>
  
  </div>  <!--end of social-->
  
  </div>  <!--end of div foot-->
  
  </div> <!---end of main--->
  



</body>
</html>