<!doctype html>
<html lang="en">

<head>
    <title>ROTU ARMY UMP|Contact Us</title>
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
          <a href="../home.php" class="navbarbrand">ROTU ARMY UMP OFFICIAL PORTAL</a>
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
                  <a style="color: white;" class="nav-link active" aria-current="page" href="../home.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="../view/about.html">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="../view/chart.html">CHART ORGANIZATION</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="../view/news.html">NEWS</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="../view/faq.php">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                  <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CONTACT US
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="../view/contact.php">CONTACT DETAILS</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li style="margin-left: 15px;"><a>EMAIL : rotuarmyump@ump.edu.my</a></li>
                    <li style="margin-left: 15px;">CONTACT NO. : +609 424 5000</li>
                    <li style="margin-left: 15px;">FAX : +609 424 5055</li>
                  </ul>
                </li>
              </ul>
              <button class="signupbtn" onclick="document.location='newform.php'" style="width:100%; margin-top: 50%;">New Intake Registry</button>
              <button class="signupbtn" onclick="document.getElementById('id02').style.display='block'" style="width:100%; margin-top: -35%;">Log In</button>

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
              </div>-->

              <div id="id02" class="modalreg">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-contentreg" method="post" action="../php/login.php">
                  <div class="containerreg">
                    <h1 class="h1reg">Log In</h1>
                    <p>Please fill in this form to login your account.</p>
                    <hr>
                    <label for="username"><b>Username</b></label>
                    <input class="inputreg" type="text" placeholder="Enter Your Username.." name="username" required>

                    <label for="psw"><b>Password</b></label>
                    <input class="inputreg" type="password" placeholder="Enter Your Password.." name="password" required>

                    <label for="type"><b>User Type</b></label>
                    <select class="inputreg" id="type" name="type" required>
                      <option value="Admin">Admin</option>
                      <option value="Staff">Staff</option>
                      <option value="Current Intake">Current Intake</option>
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
        </div>
    </nav>

      <br>
      <br>
      <div class="pictitle"></div><div class="texttitle"><h2>Contact Us<br><h5>Home | Contact Us</h5></div>
     
      <div class="rowside2">
        <div class="columnsidecontact">
          <div class="card">  
            <div class="containersidecont">
                <h2><br>ADDRESS</h2>
                <p>Universiti Malaysia Pahang, 26600 Pekan, Pahang, Malaysia</p>
              </div>
              <div class="containersidecont">
                <h2><br>CONTACT NO.</h2>
                <p>+609 424 5000</p>
              </div>
              <div class="containersidecont">
                <h2><br>EMAIL</h2>
                <p>rotuarmyump@ump.edu.my</p>
              </div>
              <div class="containersidecont">
                <h2><br>FAX NO.</h2>
                <p>+609 424 5055</p>
              </div>
          </div>
        </div>

        <div class="columnside2">
          <div class="card">
            <div class="containerside2">
              <form action="../php/insert.php" method="post"><br>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name.." required>
            
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email.." required>

                <label for="contactno">Contact No.</label>
                <input type="text" id="contactno" name="contactnumber" placeholder="Enter your contact number.." required>
            
                <label for="subject">Question</label>
                <textarea id="subject" name="question" placeholder="Enter you question.." style="height:100px" required></textarea>
            
                <input type="submit" name="submit" value="Submit"><br><br>
              </form>
            </div>
          </div>
        </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3956922403113!2d103.11845831429322!3d3.723585350392155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8cbd67ac8885b%3A0x650cea81bf5c1963!2sUMP%20Gambang%20Campus!5e0!3m2!1sen!2smy!4v1636317506830!5m2!1sen!2smy" 
        width="100%" height="500px" allowfullscreen="" loading="lazy"></iframe>
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