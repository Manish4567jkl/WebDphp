<?php

$email=$_POST['email'];

$password=$_POST["password"];


if($email=="msd@gmail.com" && $password=="77777"){
    header("location:dashboard.php");
}
else{
    header("location:index.php?code=404");
}

?>
