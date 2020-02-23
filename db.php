<?php
$connect = mysqli_connect("localhost", "root", "1121", "admin_record");
if (!mysqli_set_charset($connect, 'utf8')) {
    echo 'the connection is not in utf8';
    exit();
}
