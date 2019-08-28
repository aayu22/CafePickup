<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

//include("auth.php"); //include auth.php file on all secure pages 
?>


<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.html');
  }
  //
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Cafe PickUp</title>
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
      <div style="text-align:right">
        <p><h2>Welcome <?php echo $_SESSION['username']; ?>!</h2></p>
          <!-- <p><h2>Hello!!</h2></p> -->
    </div>
    <nav>
      <ul>
        <!-- <li><a href="login.php">Login</a></li> -->
        <!-- <li><a href="registration.php">Register</a></li> -->
        <li><a href="menu.php">Visit Canteen</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li ><a href="contactus.php">Contact Us</a></li>
        <li class="last"><a href="logout.php">Logout</a></li>
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
          <div>
          <h2 style="color:Cornsilk;">Cafe PickUp</h2>
          <p>With over 400 outlets across India and a history of almost a century, the Coffee House is much more than just a restaurant chain. Founded as a worker cooperative at a time when India’s coffee house culture was a British monopoly, this historic chain reflects a slice of India’s modern history. </p>

          
          </div>
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
       <!--  <h2 class="title">Campus Canteens</h2>
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
        <h2 class="title">C-DAC(Center for Development of Advance Computing)</h2>
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
