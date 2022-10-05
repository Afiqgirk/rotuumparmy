<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
session_destroy();
header("Location: ../home.php");
//$_SESSION['status'] = "You are successfully LOGOUT. Thank You.";
//echo "<script>alert('You are successfully LOGOUT. Thank You.')</script>";

?>
