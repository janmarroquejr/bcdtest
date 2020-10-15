<?php

$connection = mysqli_connect("localhost", "root", "", "bcdtest");

if($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
}

$data = mysqli_query($connection, "SELECT * FROM registrants ORDER BY id DESC LIMIT 1");

$row = $data->fetch_assoc();

$birthday = $row['birthday'];
$shirtSize = $row['shirtSize'];
$name = $row['firstName']." ".$row['lastName'];
$gender = $row['gender'];
$registered_at = $row['registeredAt'];

function getFullGender ($x){
    if($x == "M"){
        return "Male";
    } else if($x == "F") {
        return "Female";
    } else {
        return "";
    }
}

$fullWordGender = getFullGender($gender);

function getAge($day) {
    $date = new DateTime($day);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}

$age = getAge($birthday);

function getRaceCategory ($age) {
    if($age > 18){
        return "SENIORS";
    } else {
        return "JUNIORS";
    }
}

$category = getRaceCategory($age);

?>