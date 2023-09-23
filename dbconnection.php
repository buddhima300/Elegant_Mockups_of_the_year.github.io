<?php 

    $con = mysqli_connect('localhost','root','','elegant_mockups');
    if (!$con) {
        die('could not connect: '.mysqli-error());
    }else{
        echo "connection established successfully!";
    }
    
    // mysqli_close($con);

?>