<?php
include_once 'db.php';

$newid = $_GET['newid']; 

$query = mysqli_query($conn,"select * from newintake where newid='$newid'"); 

$data = mysqli_fetch_array($query); 

if(isset($_POST['edit'])) 
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
  $newcontactnumber = $_POST['newcontactnumber'];
  $edit = mysqli_query($conn,"update newintake set newfullname='$newfullname', newicnumber='$newicnumber',newbirthdate='$newbirthdate',
  newbirthplace='$newbirthplace',newgender='$newgender',newaddress='$newaddress',
  newrace='$newrace',newcontactnumber='$newcontactnumber',newage='$newage',newreligion='$newreligion',newemail='$newemail',
  newhobby='$newhobby',newordersibling='$newordersibling',newcitizen='$newcitizen',newheight='$newheight',
  newweight='$newweight',newbmi='$newbmi',newmatric='$newmatric',newfaculty='$newfaculty',
  newcourse='$newcourse',newcampus='$newcampus',newstudyperiod='$newstudyperiod',newleavers='$newleavers' where newid='$newid'");
	
    if($edit)
    {
        $_SESSION['status'] = "The new intake student information successfully UPDATED.";
        mysqli_close($conn); // Close connection
        header("Location:../view/adminnewform.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
  } 
  $loginid = $_SESSION['loginid'];
  $data1 = mysqli_query($conn, "select * from login where loginid = '$loginid'");
  $login = mysqli_fetch_array($data1);
?>



<!doctype html>
<html lang="en">

<head>
    <title>ROTU ARMY UMP|Update New Intake Info.(STAFF)</title>
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
      <div class="pictitle"></div><div class="texttitle"><h2>Update New Intake Information<br><h5>Login | New Intake Info. | Update New Intake Info.</h5></div><br>
      <br>
            <div class="containerside2"><br>
              <form method="post">
                <style>
                  td{
                    /*border:1px solid black;*/
                    border-collapse: collapse;
                    width:20%;
                    padding:1%;
                  }

                  h4{
                    text-align: center;
                  }

                  select:invalid { color: grey; }
                </style>
                <table>
                  
                  <tr>
                    <td colspan="2"><h4 for="">PERSONAL INFORMATION<hr></h4></td>
                  </tr>
                  <tr>
                    <td><label for="name">Full Name</label><input value="<?php echo $data['newfullname'];?>" type="text" placeholder="Enter your Full Name..." name="newfullname" required></td>
                    <td><label for="ic">IC No.</label><input value="<?php echo $data['newicnumber'];?>" type="number" placeholder="Enter your IC Number..." name="newicnumber" required></td>
                  </tr>
                  <tr>
                    <td><label for="birthdate">Birth Date</label><input value="<?php echo $data['newbirthdate'];?>" type="date" placeholder="Enter your Birth Date..." name="newbirthdate" required></td>
                    <td><label for="birthplace">Birth Place</label><input value="<?php echo $data['newbirthplace'];?>" type="text" placeholder="Enter your Birth Place..." name="newbirthplace" required></td>
                  </tr>
                  <tr>
                  <td><label for="gender">Gender</label>
                        <select name="newgender" id="newgender" required>
                            <option value="MALE" >MALE</option>
                            <option value="FEMALE" >FEMALE</option>
                        </select>

                        <script type="text/javascript">
                            document.getElementById('newgender').value = "<?php echo $data['newgender'];?>";
                        </script>
                  </td>
                    <td rowspan="2"><label for="address">Address</label><textarea rows="6" cols="80" type="text" placeholder="Enter your Current Address..." name="newaddress" required><?php echo $data['newaddress'];?></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="Race">Races</label><input value="<?php echo $data['newrace'];?>" type="text" placeholder="Enter your Race..." name="newrace" required></td>
                  </tr>
                  <tr>
                    <td><label for="contactno">Contact No.</label><input type="number"  value="0<?php echo $data['newcontactnumber'];?>" placeholder="Enter your Contact Number..." name="newcontactnumber" required></td>
                    <td><label for="age">Age</label><input type="number" value="<?php echo $data['newage'];?>" placeholder="Enter your Age..." name="newage" required></td>
                  </tr>
                  <tr>
                  <td><label for="religion">Religion</label><input value="<?php echo $data['newreligion'];?>" type="text" placeholder="Enter your Religion..." name="newreligion" required></td>
                    <td><label for="email">Email</label><input value="<?php echo $data['newemail'];?>" type="text" placeholder="Enter your Email..." name="newemail" required></td>
                  </tr>
                  <td><label for="hobby">Hobby</label><input value="<?php echo $data['newhobby'];?>" type="text" placeholder="Enter your Hobby..." name="newhobby" required></td>
                    <td><label for="ordersibling">Order in Siblings</label><input value="<?php echo $data['newordersibling'];?>" type="number" placeholder="Enter your Order in Siblings..." name="newordersibling" required></td>
                  </tr>
                  <tr>
                  <td><label for="citizen">Citizen</label><input value="<?php echo $data['newcitizen'];?>" type="text" placeholder="Enter your Citizen..." name="newcitizen" required></td>
                    <td><label for="height">Height (m)</label><input value="<?php echo $data['newheight'];?>" type="number" step="any" placeholder="Enter your Height..." name="newheight" required></td>
                  </tr>
                  <tr>
                  <td><label for="weight">Weight (kg)</label><input value="<?php echo $data['newweight'];?>" type="number" step="any" placeholder="Enter your Weight..." name="newweight" required></td>
                    <td><label for="bmi">BMI (Weight[kg] / Height[m] x 2)</label><input value="<?php echo $data['newbmi'];?>" type="number" step="any" placeholder="Enter your BMI..." name="newbmi" required></td>
                  </tr>
                  <tr>
                    <td colspan="2"><h4 for="">STUDY INFORMATION<hr></h4></td>
                  </tr>
                  <tr>
                  <td><label for="matric">Matric ID</label><input value="<?php echo $data['newmatric'];?>" type="text" placeholder="Enter your Matric ID..." name="newmatric" required></td>
                    <td><label for="faculty">Faculty</label><input value="<?php echo $data['newfaculty'];?>" type="text" placeholder="Enter your Faculty..." name="newfaculty" required></td>
                  </tr>
                  <td><label for="course">Course Program</label><input value="<?php echo $data['newcourse'];?>" type="text" placeholder="Enter your Course Program..." name="newcourse" required></td>
                    <td><label for="campus">Faculty Campus</label><input value="<?php echo $data['newcampus'];?>" type="text" placeholder="Enter your Faculty Campus..." name="newcampus" required></td>
                  </tr>
                  <td><label for="studyperiod">Study Period</label><input value="<?php echo $data['newstudyperiod'];?>" type="number" placeholder="Enter your Study Period..." name="newstudyperiod" required></td>
                    <td><label for="leavers">Study Leavers</label><input type="text" value="<?php echo $data['newleavers'];?>" placeholder="Enter your Study Leavers..." name="newleavers" required></td>
                  </tr>
                </table>
            
                <input type="submit" name="edit" value="UPDATE"><br><br>
                <input class="cancel" type="cancel" onclick="window.location.replace('../view/adminnewform.php?loginid=<?php echo $login['loginid']; ?>')" value="CANCEL"><br><br>
              </form>
            </div>

  </body>

  <script src="../javascript/scriptregister.js"></script>

  <footer style="background-color: black;">
    <br>
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