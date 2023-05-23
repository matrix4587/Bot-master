<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'evans';

$conn = new mysqli($host,$username,$password,$db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{/*
    $email = $_POST['username'];
    $pword = $_POST['password'];

    echo $email;
    echo $pword;*/
    echo 'hello';

}




?>