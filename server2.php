<?php include('header.php'); ?>
<?php include('db.php'); ?>


<?php




mysqli_query($connect, "INSERT INTO works(date1,location2,description,alerts,name1,selection,timeyes,hoop,week)
    VALUES ('$_POST[date1]','$_POST[location2]','$_POST[description]','$_POST[alerts]','$_POST[name1]','$_POST[selection]','$_POST[timeyes]','$_POST[hoop]','$_POST[week]')");


echo "<h2 style='color: black;'>פעולה בוצעה בהצלחה</h2>";
?>
<?php include('footer.php'); ?>
