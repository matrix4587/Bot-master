<?php
//Define database connection details

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evans";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection to the database was successfull
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $p = "123test";
    echo $p;
    echo password_hash($p, PASSWORD_DEFAULT);
    echo "correct";
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    /*
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $sname = mysqli_real_escape_string($conn, $_POST['sname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);*/

    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword =  $_POST['cpassword'];
    //$p = password_hash($password,PASSWORD_DEFAULT);
    //$hp = password_hash($cpassword,PASSWORD_DEFAULT);
    if(!empty($fname)){
        $error = "Enter user name";
    }

    // Insert data into the "std" table
    $sql = "INSERT INTO school_register (fname, sname, email,password,cpassword) VALUES ('$fname', '$sname', '$email','$password','$cpassword')";
    if ($conn->query($sql) === TRUE) {
        //echo "Data added successfully.";
        //header("location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}