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
        <form action="reporting.html" method="POST">
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
                    <label for="myInput" class="form-control-label">Password</label>
                    <input name="password" type="password" class="form-control" id="myInput">
                    <!-- <br>
                    <input type="checkbox" id="showPasswordCheckbox"> Show Password -->
                </div>
                
                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var passwordInput = document.getElementById("myInput");
                    var checkbox = document.getElementById("showPasswordCheckbox");
                    
                    checkbox.addEventListener("click", function() {
                        if (checkbox.checked) {
                            passwordInput.type = "text";
                        } else {
                            passwordInput.type = "password";
                        }
                    });
                });
                </script>

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
