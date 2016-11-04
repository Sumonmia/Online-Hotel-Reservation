 

<?php 
$delete_id="";
 
 include('connect.php');


$delete_id=$_GET['del'];
if(isset($delete_id)){
 
$query="delete from request where id='$delete_id'";
if(mysql_query($query))
	echo "<script>window.open('pending.php?deleted=request has been deleted!!!','_self')</script>";

}
 
 ?>