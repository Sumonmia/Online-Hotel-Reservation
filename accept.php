<?php 
$accept_id="";
 
include('connect.php');


$accept_id=$_GET['acc'];
if(isset($accept_id)){
 $que="delete from request where id='$accept_id'";
 $query="INSERT INTO accept select * from request where id='$accept_id'";

if(mysql_query($query))
	echo "<script>window.open('pending.php?deleted=request been accepted!!!','_self')</script>";
if(mysql_query($que))
	echo "<script>window.open('pending.php?deleted=request been accepted!!!','_self')</script>";	
	
}
 ?>