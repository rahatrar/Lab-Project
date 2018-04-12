<?php

include 'db.php';

if (isset($_POST['submit'])) {

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
     $sex = $_POST['gender'];
    $be=$_POST['be'];
   


    $slq = "INSERT INTO `reg`( `name`, `email`, `phone`, `sex`, `be`) VALUES ('$name', '$email', '$phone', '$sex', '$be')";

    $result = mysqli_query($con, $slq);
if ($result) {

        echo "<script>alert('Done')</script>";
        header("Location: login.php");
        
    } else {

        echo "<script>alert('Done')</script>";
    }
}
?>