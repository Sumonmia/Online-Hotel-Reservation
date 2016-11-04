 
<?php

include('connect.php');
$error_message="";

if (isset($_POST['submit'])){  

   $name = mysql_real_escape_string($_POST['name']);
   $country = mysql_real_escape_string($_POST['country']);
   $state = mysql_real_escape_string( $_POST['state']);
   $phone = mysql_real_escape_string($_POST['phone']);
   $email = mysql_real_escape_string($_POST['email']);
   $rmcat = mysql_real_escape_string($_POST['rmcat']);
   $rmcount = mysql_real_escape_string($_POST['rmcount']);
   $checkin = mysql_real_escape_string($_POST['checkin']);
   $checkout = mysql_real_escape_string($_POST['checkout']);
   
   if (empty($name)|| empty($country) || empty($state) || empty($phone) || empty($email)
    ||empty($rmcat)|| empty($rmcount) || empty($checkin)  || empty($checkout)) {
    $error_message="Fill up all the fields properly..";
     }

else{

$query="INSERT INTO request(name,country,state,phone,email,rmcat,rmcount,checkin,checkout)
 VALUES('{$name}','{$country}','{$state}','{$phone}','{$email}',
      '{$rmcat}','{$rmcount}','{$checkin}','{$checkout}')";
	  
if(mysql_query($query)){
  echo "<script>window.open('reqmessage.php','_self')</script>";

}
}


 mysql_close($connection);





}

?>





<!doctype html>
<html>
<head> 
<title>Book your room</title>
<title>CSS Example</title><link rel="stylesheet" href="css/h1.css">
<link rel="stylesheet" href="css/room.css">
</head>

<body>

<h1>Fill up the form properly:</h1>

<center>
  <h3><?php echo "".$error_message; ?> </h3>
</center>

<div id="maindiv">

<center>
<div id="form">

<form action="room.php" method="POST">

<div class="row">
 <div class="label">Your name:</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="fullname" class="detail" name="name" value=" "/>
 </div> <!---end input--->
 <div class="context">E.g. sumon mia</div> <!--end context-->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">Country:</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="countryname" class="detail" name="country" value=" " list="country" />
 <datalist id="country">
<option value="Arabian">
<option value="Bangladesh">
<option value="Barmuda">
<option value="Canada">
<option value="Dubai">
<option value="England">
<option value="France">
<option value="Grece">
<option value="Holland">
<option value="Ireland">
<option value="Japan">
<option value="Kenia">
<option value="Mongolia">
<option value="North-America">
</datalist>

 </div> <!---end input--->
 <div class="context">E.g. Bangladesh</div> <!--end context-->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">State:</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="statename" class="detail" name="state" value=" "/>
 </div> <!---end input--->
 <div class="context">E.g. Dhaka</div> <!--end context-->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">Phone:</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="phoneno" class="detail" name="phone" value=" " />
 </div> <!---end input--->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">Email:</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="mail" class="detail" name="email" value=" " />
 </div> <!---end input--->
 </div>   <!---end of row--->
 
 
 <div class="row">
 <div class="label">Room category:</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="room" class="detail" name="rmcat" value=" " list="roomcategory" />
 <datalist id="roomcategory">
<option value="One adult in a room">
<option value="Two adults in a room">
<option value="Three adults in a room">
<option value="Four adults in room">
</datalist>
 </div> <!---end input--->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">Room count:</div> <!---end label--->
 <div class="input"> 
 <input type="text" id="rooms" class="detail" name="rmcount" value=" " />
 </div> <!---end input--->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">Check In:</div> <!---end label--->
 <div class="date"> 
 <input type="date" id="indate" class="detail" name="checkin" value=" " />
 </div> <!---end input--->
 </div>   <!---end of row--->
 
 <div class="row">
 <div class="label">Check Out:</div> <!---end label--->
 <div class="date"> 
 <input type="date" id="outdate" class="detail" name="checkout" value=" " />
 </div> <!---end input--->
 </div>   <!---end of row--->
 
 
<div class="submit"> 
 <input type="submit" id="submit" name="submit" value="SEND REQUEST" />
 </div> <!---end of submit-->
 
</form>
</div>  <!--end of div from-->
</center>

</div>  <!--end of maindiv-->

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


 

</body>
</html>