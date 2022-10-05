<?php
include_once 'db.php';


//INSERT
if(isset($_POST['submit']))
{    
    $newfullname = $_POST['newfullname'];
    $newicnumber = $_POST['newicnumber'];
    $newbirthdate = $_POST['newbirthdate'];
    $newbirthplace = $_POST['newbirthplace'];
    $newgender = $_POST['newgender'];
    $newaddress = $_POST['newaddress'];
    $newrace = $_POST['newrace'];
    $newcontactnumber = $_POST['newcontactnumber'];
    $newage = $_POST['newage'];
    $newreligion = $_POST['newreligion'];
    $newemail = $_POST['newemail'];
    $newhobby = $_POST['newhobby'];
    $newordersibling = $_POST['newordersibling'];
    $newcitizen = $_POST['newcitizen'];
    $newheight = $_POST['newheight'];
    $newweight = $_POST['newweight'];
    $newbmi = $_POST['newbmi'];
    $newmatric = $_POST['newmatric'];
    $newfaculty = $_POST['newfaculty'];
    $newcourse = $_POST['newcourse'];
    $newcampus = $_POST['newcampus'];
    $newstudyperiod = $_POST['newstudyperiod'];
    $newleavers = $_POST['newleavers'];
    
    $sql = "INSERT INTO newintake (newfullname,newicnumber,newbirthdate,newbirthplace,newgender,newaddress,
    newrace,newcontactnumber,newage,newreligion,newemail,newhobby,newordersibling,newcitizen,newheight,
    newweight,newbmi,newmatric,newfaculty,newcourse,newcampus,newstudyperiod,newleavers) VALUES 
    ('$newfullname','$newicnumber','$newbirthdate','$newbirthplace','$newgender','$newaddress',
    '$newrace','$newcontactnumber','$newage','$newreligion','$newemail','$newhobby','$newordersibling','$newcitizen','$newheight',
    '$newweight','$newbmi','$newmatric','$newfaculty','$newcourse','$newcampus','$newstudyperiod','$newleavers')";
     if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Your registration successfully delivered. We will response immediately HERE. Thank you for your cooperation.";
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     
     mysqli_close($conn);
     header("Location: ../view/newform.php");

     
     
}

?>
