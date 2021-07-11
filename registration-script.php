<?php
require_once 'db-config.php';
if(!empty($_POST['signup'])){
    $name = $_POST['fullname'];
    $email=$_POST['email'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $phone=$_POST['phone'];
    $domain=$_POST['domain'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];
    $select = "SELECT email FROM userdata";
    $result1 = mysqli_query($con,$select);
    while($row = mysqli_fetch_array($result1)){
        if($email==$row['email'])
            {
                header("location:registration.php?email_error=Email is already exist.");
                exit;
            }
    }
    if($password == $c_password){
        $pass = md5($password);
        $insert="INSERT INTO `userdata`(`id`, `username`, `email`, `phone_number`, `branch`, `year`, `domain`, `password`,`reg_time`) VALUES (NULL,'$name','$email','$phone','$branch','$year','$domain','$pass',NOW())";
        $result = mysqli_query($con,$insert);
        if($result){
            header('location:registration.php');
        }else{
            echo 'try again';
        }
    }else{
        header('location:registration.php?p_error=password');
    }
   
}
?>

