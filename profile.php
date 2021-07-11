<?php
    session_start();
    if(!isset($_SESSION['email']))
    {
        header('location:registration.php');
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css"href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="css/profile.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class=main>
            <div class="heading">
             
            </div>
            <div class="topbar">
            <h2 href="#">Welcome <?php echo $_SESSION['name']; ?>!</h2>
                <a href="logout.php">logout</a>
                <a href="index.php">Home</a>
                
            </div>
        </div>
    </div>
    <center>
    <?php
        require_once 'db-config.php';
        $email = $_SESSION['email'];
        $select = "SELECT * FROM userdata WHERE email='$email'";
        $result = mysqli_query($con,$select);
        while($row = mysqli_fetch_array($result)){ 
    ?>
        <div class="box">
            <img src="images/download.png"></image>
            <br>
            <span class="details">Username</span>
            <input type="text"name="name" value="<?php echo $row['username'] ?>" placeholder="Username">
            <br>
            <span class="details">email</span>
            <input type="email"name="email" value="<?php echo $row['email'] ?>" placeholder="Email Id">
            <br>
            <span class="details">Branch</span>
            <input type="text" name="branch" value="<?php echo $row['branch'] ?>" placeholder="Branch">
            <br>
            <span class="details">Year</span>
            <input type="text" name="year" value="<?php echo $row['year'] ?>" placeholder="Year">
            <br>
            <span class="details">Number</span>
            <input type="text" name="phone" value="<?php echo $row['phone_number'] ?>" placeholder="Mobile Number">
            <br>
            <span class="details">Domain</span>
            <input type="text" name="domain" value="<?php echo $row['domain'] ?>" placeholder="Domain">
            <br>
            

        </div>
    <?php        
        }
    ?>
    </center>
</body>
</html>