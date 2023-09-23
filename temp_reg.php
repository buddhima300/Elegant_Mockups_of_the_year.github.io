<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>templates_registration_page</title>
    <link rel="stylesheet" href="temp_reg.css">
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <div class="breadcrumb">
		<a href="Elegant_homepage.php">Home > </a>
		<a href="temp_reg.php">Elegant Templates > </a>
	</div>
    <div class="panel">
        <div class="left">
            <i class ="fa fa-user-circle"></i>
            <h1>SIGNUP</h1>
            <form action="" class="temp_reg" method="POST" name="temp_reg_form">
                <label for="username">username</label><br>
                <input type="text" name="reg_username" placeholder="username"><br>

                <label for="email">E-mail</label><br>
                <input type="text" name="reg_email"  placeholder="email"><br>

                <label for="password">password</label><br>
                <input type="password" name="reg_password"  placeholder="password"><br>
                
                <button type="submit" name="regsubmit">SUBMIT</button>

            </form>
        </div>
        <i id="arrow" class ="fa fa-arrow-circle-right"></i>
        <div class="right">
            <i class ="fa fa-sign-in"></i>
            <h1>SIGNIN</h1>
            <form action="" class="temp_reg" method="POST" name="temp_log_form">

                <label for="username">E-mail</label><br>
                <input type="text" name="log_email"  placeholder="email"><br>

                <label for="username">password</label><br>
                <input type="password" name="log_password"  placeholder="password"><br>
                
                <button type="submit" name="logsubmit">LOGIN</button>

            </form>
        </div>

    </div><br><br>

<!-- submiting form data to database -->
    <?php

        // *giving the database connection
        include 'dbconnection.php';

        if (isset($_POST['regsubmit'])) {
            //! taking the values from the form
            $regusername = mysqli_real_escape_string($con,$_POST['reg_username']);
            $regemail = mysqli_real_escape_string($con,$_POST['reg_email']);
            $regpassword = mysqli_real_escape_string($con,$_POST['reg_password']);

            $query = "INSERT INTO templates_login (username , email , password) VALUES ('$regusername', '$regemail', '$regpassword')";
            if (mysqli_query($con, $query)) {
                echo "data inserted to the templates table successfully";
                // header("location:signin.php");
            }
            else{
                echo "data submission failed";
            }

        }
    
        
        if (isset($_POST['logsubmit'])) {
            $logemail = $_POST["log_email"];
            $logpassword = $_POST["log_password"];

            // executing a query and taking values from database
            $result = mysqli_query($con, "SELECT * FROM templates_login WHERE email = '$logemail' && password = '$logpassword'");
            $row = mysqli_fetch_assoc($result); //! by this line of code fetch the data taken by database into an array

            if (mysqli_num_rows($result) > 0) {
                if ($logemail == $row['email']) {
                    $_SESSION["login"] = true;
                    $_SESSION["password"] = $row['password'];
                    echo '<script>alert("login successful!");</script>';
                    header("location:templates.php");
                }else if($logpassword == "") {
                    echo '<script>alert("wrong password!");</script>';
                }
            }else {
                echo '<script>alert("user not registerd!");</script>';
        
            }
        }




    
    ?>
    
</body>
</html>