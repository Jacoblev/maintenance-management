<?php
//update.php
include('db.php');
$query = "
 UPDATE maint".$_POST["week"]." SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE id = '".$_POST["pk"]."'";
mysqli_query($connect, $query);
