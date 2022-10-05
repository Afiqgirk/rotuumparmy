<?php
include_once 'db.php';
$newid = $_GET['newid'];
$sql = "DELETE FROM newintake WHERE newid=$newid";
if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "The new intake student information successfully DELETED.";
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: ../view/adminnewform.php");
?>