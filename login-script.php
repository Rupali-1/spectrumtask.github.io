<?php
require_once 'db-config.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select = "SELECT * FROM userdata";
    $result1 = mysqli_query($con,$select);
    while($row = mysqli_fetch_array($result1)){
        if($email==$row['email'])
            {
                if(md5($password)==$row['password']){
                    session_start();
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['username'];
                    header("location:index.php");
                    exit;
                }else{
                    header("location:registration.php?password_error=incorrect password.");
                    exit;
                }
            }else{
                $test = 1;
            }
    }
    if($test==1){
        header("location:registration.php?error_email= Email Doesn\'t Exist!");
        exit;
    }
    
}