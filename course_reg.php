
<?php 

// ! give the connection
include 'dbconnection.php';

$username='';
$country='';
$email='';
$rpassword='';
$query='';

if (isset($_POST['cname'])) {
    // taking the values from the form
    $username=mysqli_real_escape_string($con, $_POST['cname']);
	$country=mysqli_real_escape_string($con, $_POST['ccountry']);
	$email=mysqli_real_escape_string($con, $_POST['cemail']);
	$rpassword=mysqli_real_escape_string($con, $_POST['cpassword']);


        // executing a query to insert values 
        $query = "INSERT INTO course_table (name, country, email, password) VALUES ('$username', '$country', '$email', '$rpassword')";
        if (mysqli_query($con, $query)) {
                echo "data inserted to the course table successfully";
                // ! header("location:signin.php");
        }
        else{
                echo "data submission failed";
        }
}
mysqli_close($con);





?>