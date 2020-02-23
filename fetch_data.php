<?php

//fetch_data.php

$connect = new PDO("mysql:host=127.0.0.1;dbname=admin_record", "root", "1121");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
    $data = array(
        ':id'   => "%" . $_GET['id'] . "%",
        ':name'   => "%" . $_GET['name'] . "%",
        ':names'     => "%" . $_GET['names'] . "%",
        ':kind'    => "%" . $_GET['kind'] . "%",
        ':location'     => "%" . $_GET['location'] . "%",
        ':descc'     => "%" . $_GET['descc'] . "%",
        ':start_time'     => "%" . $_GET['start_time'] . "%",
        ':timepicker'     => "%" . $_GET['timepicker'] . "%",
        ':details'     => "%" . $_GET['details'] . "%",
        ':datepicker'     => "%" . $_GET['datepicker'] . "%"
    );
    $query = "SELECT * FROM record WHERE id LIKE :id AND name LIKE :name AND names LIKE :names AND kind LIKE :kind AND location LIKE :location AND descc LIKE :descc AND start_time LIKE :start_time AND timepicker LIKE :timepicker AND details LIKE :details AND datepicker LIKE :datepicker ORDER BY id DESC";

    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($statement->fetchAll(PDO::FETCH_NUM));
    foreach($result as $row)
    {
        $output[] = array(
            'id'    => $row['id'],
            'name'  => $row['name'],
            'names'   => $row['names'],
            'kind'    => $row['kind'],
            'location'   => $row['location'],
            'descc'    => $row['descc'],
            'start_time'    => $row['start_time'],
            'timepicker'    => $row['timepicker'],
            'details'    => $row['details'],
            'datepicker'    => $row['datepicker']
        );
    }
    header("Content-Type: application/json");
    echo json_encode($output);
}

if($method == "POST")
{
    $data = array(
        ':name'  => $_POST['name'],
        ':names'  => $_POST["names"],
        ':kind'    => $_POST["kind"],
        ':location'   => $_POST["location"],
        ':descc'   => $_POST["descc"],
        ':start_time'   => $_POST["start_time"],
        ':timepicker'   => $_POST["timepicker"],
        ':details'   => $_POST["details"],
        ':datepicker'   => $_POST["datepicker"]
    );

    $query = "INSERT INTO record (name, names, kind, location, descc, start_time, timepicker, details, datepicker) VALUES (:name, :names, :kind, :location, :descc, :start_time, :timepicker, :details, :datepicker)";
    $statement = $connect->prepare($query);
    $statement->execute($data);
}

if($method == 'PUT')
{
    parse_str(file_get_contents("php://input"), $_PUT);
    $data = array(
        ':id'   => $_PUT['id'],
        ':first_name' => $_PUT['first_name'],
        ':last_name' => $_PUT['last_name'],
        ':age'   => $_PUT['age'],
        ':gender'  => $_PUT['gender']
    );
    $query = "
 UPDATE record 
 SET name = :name, 
 names = :names, 
 kind = :kind, 
 location = :location,
 descc = :descc,
 start_time = :start_time,
 timepicker = :timepicker,
 details = :details,
 datepicker = :datepicker 
 WHERE id = :id
 ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
}

if($method == "DELETE")
{
    parse_str(file_get_contents("php://input"), $_DELETE);
    $query = "DELETE FROM record WHERE id = '".$_DELETE["id"]."'";
    $statement = $connect->prepare($query);
    $statement->execute();
}

?>
