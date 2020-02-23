<?php
//fetch.php
include('db.php');
// $stmt = $mysqli->prepare("SELECT * FROM ? ORDER BY warehouse ASC");
// $stmt->bind_param("s", 'maint'.$_POST['week']);
// $stmt->execute();
// $res = $stmt->get_result();
// while($row = $res->fetch_assoc())
// {
//     $output[] = $row;
// }
// ;
//
//

$query = "SELECT * FROM maint".$_POST['week']." ORDER BY hours='לילה', hours='ערב',hours='בוקר' ASC";
$result = mysqli_query($connect, $query);
$output = array();
while ($row = mysqli_fetch_assoc($result)) {
    $output[] = $row;
}
echo json_encode($output);
