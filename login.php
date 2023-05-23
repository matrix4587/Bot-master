<?php 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evans";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $sql = "SELECT * FROM school_register WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {//checks if there is exactly one matching user record in the result.
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, create session
            session_start();
            $_SESSION['email'] = $email;
            header("Location: index.php"); // Redirect to welcome page or any other protected page
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="loginpg.css">


   
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="header"><h1>Login</h1> 
            </div>
            <div class="inputs">
                
                <form action="login_db.php" method="POST">
                <label for="username">Username</label>
                <input type="text" class="field" name="username"><br><br>
                <label for="password">Password</label>
                <input type="password" class="field" name="password"><br><br>
                <input type="checkbox">Remember me <br><br>
                <button type="submit">Login</button>
                
                </form>
                <div class="extra">
                    <p>Don't have an accout?</p>
                    <p><a href="signup.php">Sign Up</a> instead</p>
                </div>
                
            </div>
        </div>
    </div>

<script src="login.js"></script>
</body>
</html>