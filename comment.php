<?php
session_start();
if(isset($_SESSION['username'])==false){
   	  header("Location:admin.php");
}
?>

<!doctype html>
<html>
<head>
<title>Guest comments</title>
<link rel="stylesheet" href="css/pending.css">
</head>
<body>

<div id="menu">
    <center>
    <nav>
      <a href="comment.php">Comments</a>
	  <a href="index.php">Home</a>
	  <a href="admin panel.php">Back to Admin</a>
     </nav>
	 </center>
</div>  <!--end of manu-->


<h1 align='center'>Guest comments </h1>
<p align='center'>.<?php echo @$_GET['deleted']; ?> </p>


<table width='1140' align='center' border='5'>
   
   <tr bgcolor= 'gray'>
		<th>Name</th>
		<th>Email</th>
		<th>Comment</th>

	</tr>	
	
	
	<tr>

    	<?php 

            include('connect.php');

           $query="select * from guest_comments";
           $run=mysql_query($query);

           while($row=mysql_fetch_array($run)){
           	   $id=$row[0];
			  $fullname=$row[1];
           	  $email=$row[2];
			  $comment=$row[3];

         ?>
          <tr align='center'>
         <td> <?php  echo $fullname ?> </td>	
         <td> <?php  echo $email ?> </td>	
         <td style="width=200px;"> <?php  echo '<p>'.nl2br($comment).'</p>' ?> </td>	

    </tr>

    <?php } ?>
	
	
</table>




</body>

</html>