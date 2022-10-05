<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'rotudb';

//$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];
$conn = mysqli_connect($host, $user, $pass, $database);
$data = mysqli_query($conn, "select * from login where username='$username' and password='$password' and type='$type'");
//if(isset($_POST['submit'])){
 

    if($data == true)
    {   
        session_start();
        
        //$_SESSION["Login"] = "YES";
        echo "<h1>You are NOT logged correctly in </h1>";
        header("Location: ../home.php");
        $_SESSION['status1'] = "Your USERNAME/PASSWORD or USER TYPE is INCORRECT. Please enter again. Thank You.";
    }
        while($login = mysqli_fetch_array($data))
        {
            // Check if username and password are correct
            //if ($_POST["username"] == $login['username'] && $_POST["password"] == $login['password'] && $_POST["type"] == $login['type']) {
            if ($login['username'] == 'Admin' && $login['password'] == 'Admin' && $login['type'] == 'Admin') {
                // If correct, we set the session to YES
                session_start();
                $_SESSION["Login"] = "YES";
                $_SESSION["loginid"] = $login['loginid'];
                echo "<h1>You are now logged correctly in</h1>";
                header("Location: ../view/adminfaq.php?loginid=" . $login['loginid']);
            }
            elseif ($login['username'] == 'Staff' && $login['password'] == 'Staff' && $login['type'] == 'Staff') {
                // If correct, we set the session to YES
                session_start();
                $_SESSION["Login"] = "YES";
                $_SESSION["loginid"] = $login['loginid'];
                echo "<h1>You are now logged correctly in</h1>";
                header("Location: ../view/adminnewform.php?loginid=" . $login['loginid']);
            }
            elseif ($login['username'] == $username && $login['password'] == $password && $login['type'] == 'CurrentIntake') {
                // If correct, we set the session to YES
                session_start();
                $_SESSION["Login"] = "YES";
                $_SESSION["loginid"] = $login['loginid'];
                echo "<h1>You are now logged correctly in</h1>";
                header("Location: ../view/filelist.php?loginid=" . $login['loginid']);
            }

            

        }
    //}else
    //{
    //    $_SESSION['status'] = "Your USERNAME/PASSWORD or USER TYPE is INCORRECT. Please enter again. Thank You.";
    //        echo "<h1>You are NOT logged correctly in </h1>";
    //        header("Location: ../home.php");
    //}
    

  //  if($login['username'] != $username || $login['password'] != $password || $login['type'] != $type){
            // If not correct, we set the session to NO
        //        $_SESSION['status'] = "Your USERNAME/PASSWORD or USER TYPE is INCORRECT. Please enter again. Thank You.";
        //    echo "<h1>You are NOT logged correctly in </h1>";
         //   header("Location: ../home.php");
            
        //}



//}

?>