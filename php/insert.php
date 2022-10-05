<?php
include_once 'db.php';
session_start();

//INSERT
if(isset($_POST['submit']))
{    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactnumber = $_POST['contactnumber'];
    $question = $_POST['question'];
    $sql = "INSERT INTO faq (name,email,contactnumber,question,answer) VALUES ('$name','$email','$contactnumber','$question','')";
     if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Your message successfully delivered. We will response immediately HERE. Thank you for your cooperation.";
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     
     mysqli_close($conn);
     header("Location: ../view/faq.php");
     
     
}

?>
