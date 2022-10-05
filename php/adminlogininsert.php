<?php
include_once 'db.php';
session_start();


    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $sql = "INSERT INTO login (username,password,type) VALUES ('$username','$password', '$type')";
     if (mysqli_query($conn, $sql)) {

        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     
     mysqli_close($conn);
     header("Location: ../home.php");
     
     


?>
