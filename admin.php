<?php
session_start();
?>
<?php
$error_message=""; 
 include('connect.php');

if (isset($_POST['submit'])) {
   $username = mysql_real_escape_string($_POST['username']);
   $password = mysql_real_escape_string($_POST['pass']);
 
if (empty($username)||empty($password)) {
	$error_message="one or more required fields are blank!! enter all the fields"; 
}
else{


 $query="SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
 $result_set=mysql_query($query);
 if (mysql_num_rows($result_set)==1) {
	 
 
  echo "<script>window.open('admin panel.php','_self')</script>";
  $_SESSION['username']=$username;
	

 }
 else{

$error_message="Invalid combination of username and password";

 }
 mysql_close($connection);
}
}
?>

<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" href="css/admin.css">
	 <title>Log In</title>
     
     
  

</head>

<body>
  
 <center>
 <div id="logincontent">
 
 <div id="loginhead">
     <h1 id="loghead">Sign In Here</h1>
     </div>  <!--end of login head-->
 
 
 <div id="logdiv">
    
   
   <div id="logrest">
   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
	<table width='auto'>

		<tr>
            <td>User Name :</td>
         </tr>
         <tr>   
            <td><input type='text'name='username' placeholder='username'></td>
		</tr>
		

		<tr>
            <td>Password :</td>
         </tr>
         <tr>   
            <td><input type='password' name='pass' placeholder="**********" ></td>
		</tr>

		<tr>
            <td><input type='submit' 
            	name='submit'
            	       value='Log In'></td>
		</tr>
	</table>
</form>


   </div>
   
 </div>  <!--end of logdiv-->
 <center>
  <h3> <?php echo "".$error_message; ?> </h3>
	 
</center>

 </div>  <!--end of logincontent-->
 </center>

  
 
    
     
     
</body>
</html>
