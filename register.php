<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div>
        <form action="login.php" method="POST">
            <div class="img_container">
                <img src="images/profile.png" alt="Profile Picture">
            </div>
            <div class="container">
                <div>

                    <label for="username">Username</label>
                    <input type="username" id="uname" name="username" placeholder="Enter your username" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group mb-2">
                                        <label for="" class="form-control-label" >Password</label>
                                        <input name="password" type="password" class="form-control" id="myInput">
                                        <br>
                                        <input type="checkbox" onclick="myFunction()">Show Password
                                    </div>

                <div class="forget">
                    <a href="#">ForgotPassword</a>
                </div>

                <div>  
                    <button type="submit">LOG IN</button>
                </div>
                <div class="register-link">
                    <p>Don't have an account? <a href="New_user.html">Register here</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
