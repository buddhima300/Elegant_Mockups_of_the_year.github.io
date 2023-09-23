<?php
session_start();
include 'dbconnection.php';
$password='';

if (isset($_POST['submit'])) {
    $usernameemail = $_POST["usernameemail"]; //here we will take the values from the form
    $password = $_POST["logpassword"];

    //executing query and taking the values to a array
    $result = mysqli_query($con,"SELECT * FROM signup WHERE email = '$usernameemail' && password='$password'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($usernameemail == $row['email']) {
            $_SESSION["login"] = true;
            $_SESSION["password"] = $row['password'];
            echo '<script>alert("login successful!");</script>';
            header("location:Elegant_homepage.php");
        }else {
            echo '<script>alert("wrong password!");</script>';
        }
    }else {
        echo '<script>alert("user not registerd!");</script>';

    }

    
}
































?>