<?php
//creat connection
$host = "localhost";
$username  = "root";
$password = "";
$db = "evans";

$conn = new mysqli($host,$username,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    //connected
}
if(isset($_POST('submit'))){

    $$fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $pword = $_POST['password'];
    $cpword =  $_POST['cpassword'];
    $h_password = password_hash($pword,PASSWORD_DEFAULT);
    $h_cpassword = password_hash($cpword,PASSWORD_DEFAULT);

    $conn = "INSERT INTO school_register(fname,sname,email,password,cpassword) VALUES('$fname','$sname','$email','$pword','$cpword'))";
}

?>