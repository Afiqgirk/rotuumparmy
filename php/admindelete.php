<?php
include_once 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM faq WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "The message successfully DELETED.";
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: ../view/adminfaq.php");
?>