<?php
include_once 'db.php';
  $loginid = $_SESSION['loginid'];
  $data1 = mysqli_query($conn, "select * from login where loginid = '$loginid'");
  $login = mysqli_fetch_array($data1);
$dbh = new PDO("mysql:host=localhost;dbname=rotudb", "root","");

//INSERT
if(isset($_POST['submit']))
{    
      $name = $_FILES['myfile']['name'];
      $type = $_FILES['myfile']['type'];
      $data = file_get_contents($_FILES['myfile']['tmp_name']);
      $stmt = $dbh->prepare("insert into fileupload values('',?,?,?)");
      $stmt->bindParam(1,$name);
      $stmt->bindParam(2,$type);
      $stmt->bindParam(3,$data);
      $stmt->execute();
      
     //if (mysqli_query($conn, $stmt)) {
      
     //   echo "New record has been added successfully !";
    // } else {
    //    echo "Error: " . $stmt . ":-" . mysqli_error($conn);
    // }
     
    // mysqli_close($conn);
    header("Location: ../view/adminfile.php?loginid=". $login['loginid']);
    $_SESSION['status9'] = "Your document successfully recorded. Thank you for your cooperation.";
     
}

?>
