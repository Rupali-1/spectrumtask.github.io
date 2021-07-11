<?php
    session_start();
    if(isset($_SESSION['email']))
    {
        header('location:profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <div class="headline">
            <h1>Welcome to our spectrum club</h1>
        </div>
        <form class="form" method="POST" action="registration-script.php">
            <div class="signup">
                <div class="form-group">
                    <input type="text" placeholder="full name" name="fullname" required="">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" required="">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Branch" name="branch" required="">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Year" name="year" required="">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Mobilenumber" name="phone" required="">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Domain" name="domain" required="">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="password" name="password" required="">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Confirm password" name="c_password" required="">
                    <?php if(isset($_GET['p_error'])){ ?>
                         <p style="color:red;">Confirm password Not match</p> 
                    <?php }   ?>
                </div>
                <input type="submit" class="btn" name="signup" value="SIGN UP">
                <div class="account-exist">
                    Already have an account?<a href="#" id="login">Login</a>
                </div>
            </div>
        </form>
        
        <form class="form" method="POST" action="login-script.php">   
            <div class="signin">
               
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" required="">
                </div>
               
                <div class="form-group">
                    <input type="password" placeholder="password" name="password" required="">
                </div>
                
                    <div class="check-box">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remember me</label>
                    </div>
                    
                <button type="submit" class="btn" name="login">LOGIN</button>
                <div class="account-exist">
                    Create new a account?<a href="#" id="signup">Signup</a>
                </div>
            </div>
        </form> 
    </div>
    <script src="main.js"></script>
</body>
</html>