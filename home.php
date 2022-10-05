<?php session_start();
   ?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome to ROTU ARMY UMP Official Portal</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include './stylesheet/style1.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light fixed-top">
        <div class="divnav">
          <img class="imgump" src="./asset/ump.png" href="#">
          <img class="imgaw" src="./asset/aw.png" href="#">
          <a href="home.php" class="navbarbrand">ROTU ARMY UMP OFFICIAL PORTAL</a>
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
                  <a style="color: white;" class="nav-link active" aria-current="page" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="view/about.html">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="view/chart.html">CHART ORGANIZATION</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="view/news.html">NEWS</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" class="nav-link" href="view/faq.php">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                  <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CONTACT US
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="view/contact.php">CONTACT DETAILS</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li style="margin-left: 15px;"><a>EMAIL : rotuarmyump@ump.edu.my</a></li>
                    <li style="margin-left: 15px;">CONTACT NO. : +609 424 5000</li>
                    <li style="margin-left: 15px;">FAX : +609 424 5055</li>
                  </ul>
                </li>
              </ul>
              
              <button class="signupbtn" onclick="document.location='view/newform.php'" style="width:100%; margin-top: 50%;">New Intake Registry</button>
              <button class="signupbtn" onclick="document.getElementById('id02').style.display='block'" style="width:100%; margin-top: -35%;">Log In</button>

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

              </div>-->


              <div id="id02" class="modalreg">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-contentreg" method="post" action="php/login.php">
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
                      <option value="CurrentIntake">Current Intake</option>
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
      <?php
          if(isset($_SESSION['status1']))
          {
        ?>
          <br><div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['status1']; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php
          unset($_SESSION['status1']);
          }
        ?>

      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./asset/intake.jpg" class="d-block w-100" alt="..." height="620px">
            <div class="content">
              <h2>WELCOME TO ROTU ARMY UMP OFFICIAL PORTAL</h2>
              <p>ONLY THE STRONG WILL REMAIN</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./asset/1.jpg" class="d-block w-100" alt="..." height="620px">
            <div class="content">
              <h2>WELCOME TO ROTU ARMY UMP OFFICIAL PORTAL</h2>
              <p>ONLY THE STRONG WILL REMAIN</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./asset/20.jpg" class="d-block w-100" alt="..." height="620px">
            <div class="content">
              <h2>WELCOME TO ROTU ARMY UMP OFFICIAL PORTAL</h2>
              <p>ONLY THE STRONG WILL REMAIN</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="w">
        <div class="c">
          <br><h1>HISTORIC</h1>
          <h6>ROTU ARMY UMP Portal is an official portal for 
            ROTU ARMY UMP organization in University Malaysia 
            Pahang. ROTU is stand for Reserve Officer Training Unit 
            which is a unit that train volunteer 
            undergraduate students as volunteer reserve officers 
            for Malaysian armed force in Malaysia. This project 
            will share and display the important information and 
            news about the ROTU ARMY UMP organization only. As 
            problem statements, the student is having problem to 
            find the information about the ROTU ARMY UMP.<br><br>
            <button class="button" onclick="document.location='view/about.html'" >Read More</button>
          </h6>
      </div>
      <div class="d">
        <video style="height: 300px; width: 530px; margin-left: 10%; margin-top: 8%;" controls>
          <source src="./asset/yt1s.com - ROTU DARAT UMP  Promo Video Intake 2122_1080p.mp4" type="video/mp4">
        </video>
      </div>
    </div>

      <br><div class="rowside">
      <div class="columnside">
        <div class="card">
          <img src="asset/1.jpg" style="width:100%">
          <div class="containerside">
            <h2><br>Annual Camp 2020/21</h2>
            <p class="date">07 NOV 2021</p>
            <h6><p>A compass marching activity was conducted on 29 January to 31 January for 3 days and 2 nights. 
              This compass marching activity was conducted at the Ulu Choh Dam and ended at the Gunung Pulai 
              Amusement Forest. A total of 42 Junior Cadet Officers participated in this compass marching activity...</p></h6>
            <p><button  onclick="document.location='view/news.html'" class="buttonside">Read More</button></p>
          </div>
        </div>
      </div>
    
      <div class="columnside">
        <div class="card">
          <img src="asset/20.jpg" style="width:100%">
          <div class="containerside">
            <h2><br>Morning Exercise</h2>
            <p class="date">12 AUG 2021</p>
            <h6><p>This project will share and display the 
              important information and news about the 
              ROTU ARMY UMP organization only. As problem 
              statements, the student is having problem to 
              find the information about the ROTU ARMY UMP.
              This project will share and display the 
              important information...</p></h6>
            <p><button  onclick="document.location='view/news.html'" class="buttonside">Read More</button></p>
          </div>
        </div>
      </div>
      
      <div class="columnside">
        <div class="card">
          <img src="asset/30.jpg" alt="Jane" style="width:100%">
          <div class="containerside">
            <h2><br>KSMJ Handover Ceremony</h2>
            <p class="date">30 JUNE 2021</p>
            <h6><p>The Handover Ceremony of the Head Coach was 
                    held at the PALAPES UMP Gambang Headquarters on 
                    02 January. The ceremony was attended by Major 
                    Mohd Faudzi bin Zahari, Lieutenant Mohd Norhisham 
                    bin Ibrahim as the Head Coach and Acting Head Coach 
                    of UMP Land PALAPES...</p></h6>
            <p><button  onclick="document.location='view/news.html'" class="buttonside">Read More</button></p>
          </div>
        </div>
      </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3956922403113!2d103.11845831429322!3d3.723585350392155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8cbd67ac8885b%3A0x650cea81bf5c1963!2sUMP%20Gambang%20Campus!5e0!3m2!1sen!2smy!4v1636317506830!5m2!1sen!2smy" 
    width="100%" height="500px" allowfullscreen="" loading="lazy"></iframe>
    
  </body>

  <footer style="background-color: black;">
    <br>
      <div style="background-color: black; width: 100%;">
        <div style="justify-content: center;align-items: center;display: flex;">
          <a href="https://twitter.com/"><img src="./asset/tw.png" alt="HTML tutorial" style="width:70px;height:70px; "></a>
          <a href="https://facebook.com/"><img src="./asset/fb.png" alt="HTML tutorial" style="width:50px;height:50px; "></a>
          <a href="https://instagram.com/"><img src="./asset/ig.png" alt="HTML tutorial" style="width:60px;height:60px; "></a>
          <a href="https://youtube.com/"><img src="./asset/yt.png" alt="HTML tutorial" style="width:65px;height:65px; "></a>
        </div>
          <p style="text-align: center; color: white;">(C) 2021 ROTU ARMY UNIVERSITI MALAYSIA PAHANG OFFICIAL PORTAL</p><br>
      </div>
      
  </footer>

</html>
<script src="javascript/scriptregister.js"></script>
