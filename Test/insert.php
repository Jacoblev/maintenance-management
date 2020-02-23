<?php  
 $connect = mysqli_connect("localhost", "root", "1121", "admin_record");
 $sql = "INSERT INTO record(name, names) VALUES('".$_POST["name"]."', '".$_POST["names"]."')";
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 