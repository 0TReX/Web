<?php

$connect = mysqli_connect('localhost','root','','aprimr');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$link = $_POST['link'];

mysqli_query($connect, "INSERT INTO signup ( username, email, password, phone, link) VALUES ('$username', '$email', '$password', '$phone', '$link')");

header("location: https://aprim.com.np")


    ?>