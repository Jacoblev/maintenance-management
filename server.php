

<?php include('db.php'); ?>


<?php




mysqli_query($connect, "INSERT INTO record(name,names,kind,location,descc,start_time,timepicker,details,datepicker)
    VALUES ('$_POST[name]','$_POST[names]','$_POST[kind]','$_POST[location]','$_POST[descc]','$_POST[start_time]','$_POST[timepicker]','$_POST[details]','$_POST[datepicker5]')");


    echo "<h2 style='color: black;'>פעולה בוצעה בהצלחה</h2>";
?>






<?php include('footer.php'); ?>
