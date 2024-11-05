<?php
include_once "conn.php";


$first_name = $_POST["first-name"];
$last_name = $_POST["last-name"];
$email = $_POST["email"];
$address1 = $_POST["address1"]; 
$address2 = $_POST["address2"]; 
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];


$sql = "INSERT INTO one (first_name, last_name, email, address1, address2, city, state, zip) 
        VALUES ('$first_name', '$last_name', '$email', '$address1', '$address2', '$city', '$state', '$zip')";

$status = mysqli_query($con, $sql);

if (!$status) {
    header("location:index.php?status=404");
} else {
    header("location:index.php?status=200");
}
?>
