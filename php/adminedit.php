<?php
include_once 'db.php';

$id = $_GET['id']; 

$query = mysqli_query($conn,"select * from faq where id='$id'"); 

$data = mysqli_fetch_array($query); 

if(isset($_POST['edit'])) 
{
    $answer = $_POST['answer'];
	
    $edit = mysqli_query($conn,"update faq set answer='$answer' where id='$id'");
	
    if($edit)
    {
        $_SESSION['status'] = "The message successfully UPDATED.";
        mysqli_close($conn); // Close connection
        header("Location:../view/adminfaq.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
if ($_SESSION["Login"] != "YES") {
  header("Location: ../home.php");
  }

  $loginid = $_SESSION['loginid'];
  $data1 = mysqli_query($conn, "select * from login where loginid = '$loginid'");
  $login = mysqli_fetch_array($data1);
?>



<!doctype html>
<html lang="en">

<head>
    <title>ROTU ARMY UMP|Update FAQ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include '../stylesheet/style1.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light fixed-top">
        <div class="divnav">
          <img class="imgump" src="../asset/ump.png" href="#">
          <img class="imgaw" src="../asset/aw.png" href="#">
          <a class="navbarbrand">ROTU ARMY UMP OFFICIAL PORTAL (ADMIN)</a>
          <button class="navbartoggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div style="background-color: rgb(1, 65, 17); color: white;" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ROTU ARMY UMP</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <form class="d-flex" action="http://www.google.com/search" method="GET">
                <input class="form-control me-2"  name="q" type="search" placeholder="Google Search..." aria-label="Search">
                <button style="border-radius: 1px;  background-color: rgba(0, 110, 255, 0.979); color: white;" class="btn btn-outline-success" type="submit">Search</button>
              </form><hr>
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a style="color: white;" class="nav-link"href="../view/adminfaq.php?loginid=<?php echo $login["loginid"]; ?>">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                  <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CONTACT US
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item">CONTACT DETAILS</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li style="margin-left: 15px;"><a>EMAIL : rotuarmyump@ump.edu.my</a></li>
                    <li style="margin-left: 15px;">CONTACT NO. : +609 424 5000</li>
                    <li style="margin-left: 15px;">FAX : +609 424 5055</li>
                  </ul>
                </li>
              </ul>
              <button class="signupbtn" onclick="document.location='../php/logout.php'" style="width:100%; margin-top: 35%;">Log Out</button>

              <!--<div id="id01" class="modalreg">
                <span onclick="document.getElementById('id01').style.display='none'" class="closereg" title="Close Modal">&times;</span>
                <form class="modal-contentreg" action="/action_page.php">
                  <div class="containerreg">
                    <h1 class="h1reg">Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="email"><b>Email</b></label>
                    <input class="inputreg" type="text" placeholder="Enter Your Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input class="inputreg" type="password" placeholder="Enter Your Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input class="inputreg" type="password" placeholder="Enter Repeat Password" name="psw-repeat" required>

                    <label for="usertype"><b>User Type</b></label>
                    <select class="inputreg" id="usertype" name="usertype" required>
                      <option value="admin">Admin</option>
                      <option value="staff">Staff</option>
                      <option value="currentintake">Current Intake</option>
                      <option value="newintake">New Intake</option>
                    </select>
                    
                    <label>
                      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                      <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                  </div>
                </form>
              </div>

              <div id="id02" class="modalreg">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-contentreg" action="/action_page.php">
                  <div class="containerreg">
                    <h1 class="h1reg">Log In</h1>
                    <p>Please fill in this form to login your account.</p>
                    <hr>
                    <label for="username"><b>Username</b></label>
                    <input class="inputreg" type="text" placeholder="Enter Your Username.." name="username" required>

                    <label for="psw"><b>Password</b></label>
                    <input class="inputreg" type="password" placeholder="Enter Your Password.." name="psw" required>

                    <label for="usertype"><b>User Type</b></label>
                    <select class="inputreg" id="usertype" name="usertype" required>
                      <option value="admin">Admin</option>
                      <option value="staff">Staff</option>
                      <option value="currentintake">Current Intake</option>
                      <option value="newintake">New Intake</option>
                    </select>
                    
                    <label>
                      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <div class="clearfix">
                      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                      <button type="submit" class="signupbtn">Log In</button>
                    </div>
                  </div>
                </form>
              </div>-->
            </div>
          </div>
        </div>
    </nav>

      <br>
      <br>
      <div class="pictitle"></div><div class="texttitle"><h2>Update FAQ<br><h5>Login | User FAQ | Update FAQ</h5></div><br>
      <br>
            <div class="containerside2"><br>
              <form method="post">
                <label for="name">Name</label>
                <input style="color:white;" type="text" value="<?php echo $data['name'];?>" name="name" disabled>
            
                <label for="email">Email</label>
                <input style="color:white;" type="text" value="<?php echo $data['email'];?>" name="email" disabled>

                <label for="contactno">Contact No.</label>
                <input style="color:white;" type="text" value="0<?php echo $data['contactnumber'];?>" name="contactnumber" disabled>
            
                <label for="subject">Question</label>
                <input style="color:white;" type="text" value="<?php echo $data['question'];?>" name="question" disabled>

                <label for="subject">Answer</label>
                <textarea name="answer" value="" cols="30" rows="8"><?php echo $data['answer'];?></textarea><br><br>
            
                <input type="submit" name="edit" value="UPDATE"><br><br>
                <input class="cancel" type="cancel" onclick="window.location.replace('../view/adminfaq.php?loginid=<?php echo $login['loginid']; ?>')" value="CANCEL"><br><br>
              </form>
            </div>

  </body>

  <script src="../javascript/scriptregister.js"></script>

  <footer style="background-color: black;">
    <br>
      <div style="background-color: black; width: 100%; height: 100%;">
        <div style="justify-content: center;align-items: center;display: flex;">
          <a href="https://twitter.com/"><img src="../asset/tw.png" alt="HTML tutorial" style="width:70px;height:70px; "></a>
          <a href="https://facebook.com/"><img src="../asset/fb.png" alt="HTML tutorial" style="width:50px;height:50px; "></a>
          <a href="https://instagram.com/"><img src="../asset/ig.png" alt="HTML tutorial" style="width:60px;height:60px; "></a>
          <a href="https://youtube.com/"><img src="../asset/yt.png" alt="HTML tutorial" style="width:65px;height:65px; "></a>
        </div>
          <p style="text-align: center; color: white;">(C) 2021 ROTU ARMY UNIVERSITI MALAYSIA PAHANG OFFICIAL PORTAL</p><br>
      </div>
      
  </footer>

</html>