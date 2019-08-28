<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.html?You must log in first');
  }
  // if (isset($_GET['logout'])) {
  //   session_destroy();
  //   unset($_SESSION['Fname']);
  //   header("location: index.html");
  // }
?>







<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Curious Appetite</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.php">Cafe PickUp</a></h1>
      <h2>Awaken the Senses</h2>
    </div>
    
    <nav>
      <ul>
        <!-- <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Register</a></li> -->
        <li><a href="menu.php">Visit Canteen</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li class="last"><a href="contactus.html">Contact Us</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
      <figure><img src="images/1.jpg" alt="">
        <figcaption>
          <h2 style="color:Cornsilk;">Contact Us</h2>
          <p style="color:Cornsilk;font-size:100%;">Email: </p>
		  <p style="color:Cornsilk;font-size:100%;">CafePickup@gmail.com</p>
		  <p style="color:Cornsilk;font-size:100%;">Contact Number: </p>
		  <p style="color:Cornsilk;font-size:100%;">9876543210</p>
		   <p style="color:Cornsilk;font-size:100%;">Address: </p>
		  <p style="color:Cornsilk;font-size:100%;">26/43B, 3034022, Noida, Utter Predesh, India</p>
          
        </figcaption>
      </figure>
    </section>
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
        <article class="two_quarter">
          <h2 style="color: Orange;">About us</h2>
          <p>For millions of people, coffee is an essential morning tradition that fuels the start of their day—and most of the time, you probably don’t even think about it. But behind every sip of coffee, there’s a fascinating story that begins in the country where it was grown and ends with the choice of cup that carries it to your lips.</p>
        </article>
        <!-- article 2 -->
        <article class="two_quarter lastbox">.
          <figure>
            <ul class="clear">
              <li><a href="#"><img src="images/2.jpg" width="130" height="130" alt=""></a></li>
              <li><a href="#"><img src="images/3.jpg" width="130" height="130" alt=""></a></li>
              <li class="last"><a href="#"><img src="images/4.jpg" width="130" height="130" alt=""></a></li>
            </ul>
            
          </figure>
        </article>
      </section>
    </div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <div id="homepage" class="last clear">
      
      <section class="one_quarter">
        <!-- <h2 class="title">Campus Canteens</h2>
        <nav>
          <ul>
            <li><a href="canteen.html">Shanus</a></li>
            <li><a href="canteen.html">Spicy Bite</a></li>
            <li><a href="canteen.html">Jaipur Eats</a></li>
            <li><a href="canteen.html">Fun and Frolick</a></li>
            <li class="last"><a href="canteen.html">Mukhteshwari's</a></li>
          </ul>
        </nav> -->
      </section>
	  <section class="one_quarter">
        <h2 class="title"></h2>
        <article>
          <header>
            
        </article>
      </section>
      <section class="two_quarter lastbox">
        <h2 class="title">C-DAC(Center for Developnent of Advance Computing)</h2>
        <img class="imgl" src="images/5.jpg" width="130" height="130" alt="">
        <p>C-DAC is the premier R&D organization of the Ministry of Electronics and Information Technology (MeitY) for carrying out R&D in IT, Electronics and associated areas.</p>
      </section>
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
   
  </footer>
</div>
</body>
</html>
