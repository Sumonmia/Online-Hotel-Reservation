<?php
session_start();
if(isset($_SESSION['username'])==false){
   	  header("Location:admin.php");
}
?>


<!doctype html>
<html>

<head>
<title> Pending Party requests </title>
 <link rel="stylesheet" href="css/pending.css">
</head>

<body>

<div id="menu">
    <center>
    <nav>
      <a href="pendingparty.php">Pending Party Requests</a>
      <a href="acceptedparty.php">Accepted Party Requests</a>
	  <a href="index.php">Home</a>
	  <a href="admin panel.php">Back to Admin</a>
     </nav>
	 </center>
</div>  <!--end of manu-->	 
 <h1 align='center'>All the Pending Party Requests</h1>
<p align='center'>.<?php echo @$_GET['deleted']; ?> </p>

<table width='1140' align='center' border='5'>
   
   <tr bgcolor= 'gray'>
		<th>Author</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Party type</th>
        <th>Peoples</th>
        <th>Date</th>
		<th>Accept</th>
        <th>Delete</th>
	</tr>	
	
	
	    <tr>

    	<?php 

           include('connect.php');
           $query="select * from partyrequest";
           $run=mysql_query($query);

           while($row=mysql_fetch_array($run)){
           	   $id=$row[0];
			  $author=$row[1];
           	  $email=$row[2];
			  $contact=$row[3];
			  $ptype=$row[4];
			  $peoples=$row[5];
			  $datein=$row[6];

         ?>
          <tr align='center'>
         <td> <?php  echo $author ?> </td>	
         <td> <?php  echo $email ?> </td>	
         <td> <?php  echo $contact ?> </td>	
         <td> <?php  echo $ptype ?> </td>
         <td> <?php  echo $peoples ?> </td>
         <td> <?php  echo $datein ?> </td>	
         
         <td><a href=
         	 "paccept.php?acc=<?php echo $id; ?>">
         	Accept</a></td>
         <td><a href=
         	 "pdelete.php?del=<?php echo $id; ?>">
         	Delete</a></td>
    </tr>

    <?php } ?>


</table>
  


</body>


</html>