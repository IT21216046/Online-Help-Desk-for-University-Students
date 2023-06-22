<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sign-in.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>IWT Help Desk | Sign in</title>
    <link rel="icon" href="../images/logonew.png" type="image/gif/png">
</head>
<body>
  
    <!--Header-->
    <header id="main-header">

      <div class="container">
          <div class="image">
              <a href="index.html"><img src="../images/logonew.png" alt="Logo"></a>
          </div>

          <!--Logo-->
          <div class="logo">
              <h1 align="left">INSTITUTE OF <br><left>WEB</left><br>TECHNOLOGIES</h1>
          </div>

          <br>

          <!--Navigation Menu-->
          <div class="navbar">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="resources.html">Resourses</a></li>
              <li><a href="notices.html">Notices</a></li>
              <li><a href="student-life.html">Student Life</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
          </ul>
          </div>

          <div class="user">
              <img src="../images/sign-in.jpg" class="profile">
              <ul>
                  <li><a href="sign-up.html">Sign up</a></li>
                  <li><a href="sign-in.html">Sign in</a></li>
              </ul>
          </div>

      </div>

  </header>

    <div class="background">
        <form action="https://google.com/search" method="get" class="search-bar">
            <input type="text" placeholder="Search" name="q">
            <button type="submit"><img src="../images/search.webp"> </button>
        </form>
    </div>

    <div class="signinbox">
        <img src="../images/sign-in.jpg" class="avatar">
        <h2>SIGN IN</h2>
        <form action="../php/sign-in.php" method="post">
            <p>Username</p>
            <input type="text" name="u" placeholder="Username" required>
            <p>Password</p>
            <input type="password" name="p" placeholder="Password" required>
            <input type="submit" name="s" value="Sign in">
            <a href="#">Forgot password?</a><br><br>
            <a href="sign-up.html">Don't have an account?</a>
        </form>
    </div>
    
    <!--Footer-->
    <footer>
      <div class="main-content">
        <div class="left box">
          <div class="content">
              <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.079356989354!2d79.9479225860459!3d6.904362935332272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1652847539044!5m2!1sen!2slk" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          </div>
        </div>
        <div class="center box">
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Institute of Web Technologies, High Level road, Malabe, Sri Lanka.</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">support@iwt.com</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+94 11 678 980</span>
            </div>
            <div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-google"></span></a>
            </div>

          </div>
        </div>
        <div class="right box">
          <div class="content">
            <h2>Contact us</h2>
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By MLB_02.02_08</a> | </span>
          <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
        </center>
      </div>
    </footer>
</body>
</html>