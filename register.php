
<?php 

// give the connection
include 'dbconnection.php';

$username='';
$email='';
$password='';
$rpassword='';
$query='';

if (isset($_POST['username'])) {
    // taking the values from the form
    $username=mysqli_real_escape_string($con, $_POST['username']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$password=mysqli_real_escape_string($con, $_POST['password']);
	$rpassword=mysqli_real_escape_string($con, $_POST['rpassword']);

    
    $users = mysqli_query($con, "SELECT * FROM signup WHERE name = '$username'") or die('query failed');
    $numrows = mysqli_num_rows($users);

    if ($numrows > 0) {
        echo '<script>alert("name already exists!");</script>';


    }
    else if ($password != $rpassword) {
        echo "<script>alert('enter same password')</script>";
        header("location:signup.php");

    }
    else {
        // executing a query to insert values 
            $query = "INSERT INTO signup (name , email , password , r_password) VALUES ('$username', '$email', '$password', '$rpassword')";
            if (mysqli_query($con, $query)) {
                    echo "data inserted to the table successfully";
                    header("location:signin.php");
                }
                else{
                    echo "data submission failed";
                }
    }
}
mysqli_close($con);





?>