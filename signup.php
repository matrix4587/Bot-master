<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="signup.css">

    
   
</head>
<body>
    <div class="container">
        <div class="header"><h1>Sign up</h1></div>
       
        <div class="intro">
            <p>Please fill this form to create account</p>
        </div>
        
        <div class="form">
            <div class="inputs">
                <form action="signup_db.php" method="POST">
                    <label for="fname">Fist Name</label><br>
                    <input type="text" name="fname"><br><br>
                    <p>echo $error</p>
                    <label for="sname">Second Name</label><br>
                    <input type="text"  required name="sname"><br><br>
                    <label for="email">Email</label><br>
                    <input type="email"  required name="email"><br><br>
                    <label for="password" >Password</label><br>
                    <input type="password" required name="password"><br><br>
                    <label for="cpassword">Confirm Password</label><br>
                    <input type="password" required name="cpassword"><br><br>
                    <button type="submit">Signup</button>
                    <div class="extra">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>  
                </form>
                
            </div>
        </div>
    </div>

    
</body>
</html>