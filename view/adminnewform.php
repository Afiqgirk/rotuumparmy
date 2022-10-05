<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'rotudb';
//$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
session_start();
$conn = mysqli_connect($host, $user, $pass, $database);
//session_destroy();
if ($_SESSION["Login"] != "YES") {
  header("Location: ../home.php");

  }
  $loginid = $_SESSION['loginid'];
  $data = mysqli_query($conn, "select * from login where loginid = '$loginid'");
$login = mysqli_fetch_array($data);
?>

<!doctype html>
<html lang="en">

<head>

  <title>ROTU ARMY UMP|NEW INTAKE INFO.(STAFF)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include '../stylesheet/style1.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light fixed-top">
        <div class="divnav">
          <img class="imgump" src="../asset/ump.png" href="#">
          <img class="imgaw" src="../asset/aw.png" href="#">
          <a class="navbarbrand">ROTU ARMY UMP OFFICIAL PORTAL (STAFF)</a>
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
                  <a style="color: white;" class="nav-link active" aria-current="page" href="../view/adminnewform.php?loginid=<?php echo $login["loginid"]; ?>">NEW INTAKE INFO.</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link active" aria-current="page" href="../view/adminnewlist.php?loginid=<?php echo $login["loginid"]; ?>">NEW INTAKE LIST</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link active" aria-current="page" href="../view/adminfile.php?loginid=<?php echo $login["loginid"]; ?>">UPLOAD SYLLABUS FILE</a>
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

<!-- <div id="id01" class="modalreg">
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
</div>
            </div>
          </div>
        </div> -->
    </nav>

      <br>
      <br>
      <?php
          if(isset($_SESSION['status']))
          {
        ?>
          <br><div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['status']; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php
            unset($_SESSION['status']);
          }
?>
      <div class="pictitle"></div><div class="texttitle"><h2>New Intake Information<br><h5>Login | New Intake Info.</h5></div>
      <br><br><br>
      <form class="d-flex">
        <input  id="myInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <!--<button style="background-color: rgba(0, 110, 255, 0.979); color: white;" class="btn btn-outline-success" disabled>Search</button>-->
      </form><br>
     
  <div  class="rowsidefaq" id="myDIV" >
        <style>
                        td,th{
                          /*border:1px solid black;*/
                          border-collapse: collapse;
                          width:15%;
                          padding:1%;
                        }

                        h4{
                          text-align: center;
                        }

                        select:invalid { color: grey; }

                        @media print{
                        body *{
                          visibility: hidden;
                        }

                        .print-container, .print-container *{
                          visibility: visible;
                        }

                        .print-container{
                          position: absolute;
                          left: 0px;
                          top: 0px;
                        }

                        .edit, .delete{
                        visibility: hidden;
                        }
                      }

                      table{
                        width:100%;
                      }
                      </style>
            <?php
              $data = mysqli_query($conn, "select * from newintake");
              while ($newintake = mysqli_fetch_array($data)) {
            ?>


          
     
        <button class="accordionfaq">NO.<?php echo $newintake['newid']?> <b><?php echo $newintake['newfullname'];?> (<?php echo $newintake['newmatric'];?>)</b></button>
        <div class="panelfaq print-container"><br><br>
        <table>
                  <tr>
                    <td colspan="4"><h4 for="">PERSONAL INFORMATION<hr></h4></td>
                  </tr>
                  <tr>
                    <th><label for="name">Full Name</label></th><td><b>:</b> <?php echo $newintake['newfullname'];?></td>
                    <th><label for="ic">IC No.</label></th><td><b>:</b> <?php echo $newintake['newicnumber'];?></td>
                  </tr>
                  <tr>
                    <th><label for="birthdate">Birth Date</label></th><td><b>:</b> <?php echo $newintake['newbirthdate'];?></td>
                    <th><label for="birthplace">Birth Place</label></th><td><b>:</b> <?php echo $newintake['newbirthplace'];?></td>
                  </tr>
                  <tr>
                  <th><label for="gender">Gender</label></th><td><b>:</b> <?php echo $newintake['newgender'];?></td>
                    <th rowspan="2"><label for="address">Address</label></th><td rowspan="2"><b>:</b> <?php echo $newintake['newaddress'];?></td>
                  </tr>
                  <tr>
                    <th><label for="Race">Races</label></th><td><b>:</b> <?php echo $newintake['newrace'];?></td>
                  </tr>
                  <tr>
                    <th><label for="contactno">Contact No.</label></th><td><b>:</b> 0<?php echo $newintake['newcontactnumber'];?></td>
                    <th><label for="age">Age (Year)</label></th><td><b>:</b> <?php echo $newintake['newage'];?></td>
                  </tr>
                  <tr>
                  <th><label for="religion">Religion</label></th><td><b>:</b> <?php echo $newintake['newreligion'];?></td>
                    <th><label for="email">Email</label></th><td><b>:</b> <?php echo $newintake['newemail'];?></td>
                  </tr>
                  <th><label for="hobby">Hobby</label></th><td><b>:</b> <?php echo $newintake['newhobby'];?></td>
                    <th><label for="ordersibling">Order in Siblings</label></th><td><b>:</b> <?php echo $newintake['newordersibling'];?></td>
                  </tr>
                  <tr>
                  <th><label for="citizen">Citizen</label></th><td><b>:</b> <?php echo $newintake['newcitizen'];?></td>
                    <th><label for="height">Height (m)</label></th><td><b>:</b> <?php echo $newintake['newheight'];?></td>

                  </tr>
                  <tr>
                  <th><label for="weight">Weight (kg)</label></th><td><b>:</b> <?php echo $newintake['newweight'];?></td>
                    <th><label for="bmi">BMI (kg/m2)</label></th><td><b>:</b> <?php echo $newintake['newheight'];?></td>
                  </tr>
                  <tr>
                    <td colspan="4"><h4 for=""><br>STUDY INFORMATION<hr></h4></td>
                  </tr>
                  <tr>
                  <th><label for="matric">Matric ID</label></th><td><b>:</b> <?php echo $newintake['newmatric'];?></td>
                    <th><label for="faculty">Faculty</label></th><td><b>:</b> <?php echo $newintake['newfaculty'];?></td>
                  </tr>
                  <th><label for="course">Course Program</label></th><td><b>:</b> <?php echo $newintake['newcourse'];?></td>
                    <th><label for="campus">Faculty Campus</label></th><td><b>:</b> <?php echo $newintake['newcampus'];?></td>
                  </tr>
                  <th><label for="studyperiod">Study Period (Year)</label></th><td><b>:</b> <?php echo $newintake['newstudyperiod'];?></td>
                    <th><label for="leavers">Study Leavers</label></th><td><b>:</b> <?php echo $newintake['newleavers'];?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><a class="edit" href="../php/adminnewedit.php?newid=<?php echo $newintake["newid"]; ?>" name="edit" value="EDIT">EDIT</a></td>
                    <td colspan="2"><button  class="edit" onclick="window.print();" >Print</button></td> 
                  </tr>
                  <tr>
                    <td colspan="4"><a class="delete" href="../php/adminnewdelete.php?newid=<?php echo $newintake["newid"]; ?>" type="delete" name="delete" value="DELETE">DELETE</a></td>
                  </tr>

                </table>

        </div>
        
      <hr style="border: 2px solid black;">

      <?php
        }
      ?>
      <?php mysqli_close($conn);?>
  </div>
  </body>

  <script src="../javascript/scriptfaq.js"> </script>
  <script src="../javascript/scriptregister.js"></script>

  <footer style="background-color: black;">
    <br><br>
      <div style="background-color: black; width: 100%;">
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