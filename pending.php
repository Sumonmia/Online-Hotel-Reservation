<?php
session_start();
if(isset($_SESSION['username'])==false){
   	  header("Location:admin.php");
}
?>

<!doctype html>
<head>
 <link rel="stylesheet" href="css/pending.css">
<title> Pending requests </title>
</head>

<body>
<div id="menu">
    <center>
    <nav>
      <a href="pending.php">Pending Requests</a>
      <a href="acceptedreq.php">Accepted Requests</a>
	  <a href="index.php">Home</a>
	  <a href="admin panel.php">Back to Admin</a>
     </nav>
	 </center>
  
</div>  <!--end of manu-->


<h1 align='center'>All the Pending Room Requests</h1>
<p align='center'>.<?php echo @$_GET['deleted']; ?> </p>


<table width='1140' align='center' border='5'>
	<tr bgcolor= 'gray'>
		<th>Name</th>
		<th>Country</th>
		<th>State</th>
		<th>phone</th>
        <th>email</th>
        <th>Room category</th>
        <th>Room count</th>
        <th>Check in</th>
        <th>Check out</th>
        <th>Accept</th>
        <th>Delete</th>
        
    </tr>

    <tr>

    	<?php 

          include('connect.php');

           $query="select * from request";
           $run=mysql_query($query);

           while($row=mysql_fetch_array($run)){
           	   $id=$row[0];
			  $name=$row[1];
           	  $country=$row[2];
			  $state=$row[3];
			  $phone=$row[4];
			  $email=$row[5];
			  $rmcat=$row[6];
              $rmcount=$row[7];
              $checkin=$row[8];
              $checkout=$row[9];
			
             

         ?>
          <tr align='center'>
         <td> <?php  echo $name ?> </td>	
         <td> <?php  echo $country ?> </td>	
         <td> <?php  echo $state ?> </td>	
         <td> <?php  echo $phone ?> </td>
         <td> <?php  echo $email ?> </td>
         <td> <?php  echo $rmcat ?> </td>
         <td> <?php  echo $rmcount ?> </td>
         <td> <?php  echo $checkin ?> </td>
         <td> <?php  echo $checkout ?> </td>	
         
         <td><a href=
         	 "accept.php?acc=<?php echo $id; ?>">
         	Accept</a></td>
         <td><a href=
         	 "delete.php?del=<?php echo $id; ?>">
         	Delete</a></td>
    </tr>

    <?php } ?>
</table>


</body>

</html>