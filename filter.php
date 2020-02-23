<?php include('header.php'); ?>


<?php include('db.php'); ?>


<style>

    table, tr, th, td {

        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;

    }



</style>
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
     server with default setting (user 'root' with no password) */








    // Check connection

    $sql = "SELECT * FROM record";

    // Attempt select query execution


if (isset($_POST['filter'])) {

    $filter = $_POST['filter'];

    $sql = "SELECT * FROM record WHERE location LIKE '%" . $filter . "%' ORDER BY datepicker DESC";
}

    if($result = mysqli_query($connect, $sql)){
        if(mysqli_num_rows($result) > 0){
    echo "<table id='table11' class='table table-striped table-bordered' data-paging='true' style='border: 1px solid black;'><thead>";
    echo "<tr>";

    echo "<th>תאריך</th>";
    echo "<th>פעולות שננקטו</th>";
    echo "<th>משך זמן העבודה</th>";
    echo "<th>תחילת עבודה</th>";
            echo "<th>הגורם לתקלה</th>";
                echo "<th>תאור התקלה</th>";
    echo "<th>מיקום</th>";
    echo "<th>שם</th>";
    echo "<th>שם</th>";

    echo "</tr></thead><tbody>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";

        echo "<td>" . $row['datepicker'] . "</td>";
        echo "<td>" . $row['details'] . "</td>";
        echo "<td>" . $row['timepicker'] . "</td>";
        echo "<td>" . $row['start_time'] . "</td>";
        echo "<td>" . $row['kind'] . "</td>";
                echo "<td>" . $row['descc'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['names'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";

        echo "</tr>";
    }
    echo "</tbody></table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
    }


    // Close connection
    mysqli_close($connect);


 ?>

<script>


    $(document).ready(function() {
        $('#table11').DataTable( {
            "order": [[ 0, "desc" ]]
        } );
    } );
</script>
<style>
    div#table11_paginate a {
        color: black;
    }</style>

<?php include('footer.php'); ?>
