<?php
// Database connection
include 'dbconnection.php';
$firstname = "";
$lastname = "";
$display_name = "";
$description = "";
$language = "";
$language_level = "";

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $display_name = $_POST['display_name'];
    $description = $_POST['description'];
    $language = $_POST['combo1'];
    $language_level = $_POST['combo2'];

    // File upload handling
    $targetDir = "images/uploads/"; // Directory to store uploaded files
    $targetFile = $targetDir . basename($_FILES["profile"]["name"]);

    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
        echo "Profile picture uploaded successfully.";
    } else {
        echo "Error uploading profile picture.";
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO sellers (firstname, lastname, displayname, picture, description, language, language_level) VALUES ('$firstname', '$lastname', '$display_name', '$targetFile', '$description', '$language', '$language_level')";
    
    if (mysqli_query($con, $sql)) {
        echo "Data inserted successfully.";
        header("location: Elegant_homepage.php");
    } else {
        echo "Error while transferring data: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>

