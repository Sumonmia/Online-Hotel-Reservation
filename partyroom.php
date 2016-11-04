 

<?php
include('connect.php');
$error_message="";

if (isset($_POST['submit'])){  

   $author = mysql_real_escape_string($_POST['author']);
   $email = mysql_real_escape_string($_POST['email']);
   $contact = mysql_real_escape_string( $_POST['contact']);
   $ptype = mysql_real_escape_string($_POST['ptype']);
   $peoples = mysql_real_escape_string($_POST['peoples']);
   $datein = mysql_real_escape_string($_POST['datein']);
   
   if (empty($author)|| empty($email) || empty($contact) || empty($ptype) || empty($peoples)
    ||empty($datein)) {
    $error_message="please,fill up all the fields!!!";
     }

else{

$query="INSERT INTO partyrequest(author,email,contact,ptype,peoples,datein)
 VALUES('{$author}','{$email}','{$contact}','{$ptype}','{$peoples}',
      '{$datein}')";
	  
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
<title>Book your party room</title>
<title>CSS Example</title><link rel="stylesheet" href="css/h1.css">
<link rel="stylesheet" href="css/room.css">
</head>

<body>


</body>

<h1>Want to reserve a party center????????</h1>

<h2>Fill up the requried fields</h2>


   <center>
  <h3><?php echo "".$error_message; ?> </h3>
  </center>

<div id="maindiv">
   <center>
   <div id="form">

   <form action="partyroom.php" method="POST">
   
      <div class="row">
        <div class="label">Authority name:</div> <!---end label--->
        <div class="input"> 
        <input type="text" id="fullname" class="detail" name="author" value=" "/>
        </div> <!---end input--->
        <div class="context">Mr.jhon or company name</div> <!--end context-->
      </div>   <!---end of row--->
	  
	  
	  <div class="row">
        <div class="label">Email:</div> <!---end label--->
        <div class="input"> 
        <input type="text" id="mail" class="detail" name="email" value=" " />
        </div> <!---end input--->
      </div>   <!---end of row--->
	  
	  
	  <div class="row">
        <div class="label">Contact:</div> <!---end label--->
        <div class="input"> 
        <input type="text" id="phoneno" class="detail" name="contact" value=" " />
        </div> <!---end input--->
      </div>   <!---end of row--->
	  
	  
	  <div class="row">
        <div class="label">Party type:</div> <!---end label--->
        <div class="input"> 
        <input type="text" id="room" class="detail" name="ptype" value=" " list="partytype" />
        <datalist id="partytype">
        <option value="Birthday party">
        <option value="Weeding party">
        <option value="Seminar or Coferrence">
        </datalist>
        </div> <!---end input--->
      </div>   <!---end of row--->
	  
	  
	  
	  <div class="row">
         <div class="label">No.of participants:</div> <!---end label--->
         <div class="input"> 
         <input type="text" id="rooms" class="detail" name="peoples" value=" " />
         </div> <!---end input--->
      </div>   <!---end of row--->
	  
	  
	  <div class="row">
         <div class="label">Date:</div> <!---end label--->
         <div class="date"> 
         <input type="date" id="indate" class="detail" name="datein" value=" " />
         </div> <!---end input--->
      </div>   <!---end of row--->
	  
	  
	  <div class="submit"> 
         <input type="submit" id="submit" name="submit" value="SEND REQUEST" />
      </div> <!---end of submit-->
   
   
   </div>  <!--end of div form-->
   </center>
   
</div>   <!--end of maindiv-->

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


</html>