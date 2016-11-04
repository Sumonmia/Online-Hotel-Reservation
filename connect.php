<?php
$connection=mysql_connect("mysql5.000webhost.com","a7707739_sumon","decent11");
if (!$connection) {
  die("database connection failed".mysql_error());
 } 
 $db_selection=mysql_select_db("a7707739_hotel",$connection);
 if (!$db_selection) {
    die("database selection failed".mysql_error());

 }

?>