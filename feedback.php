<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.html?You must log in first');
  }

  setcookie("myCookie", $_SESSION['username']);
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
       <!--  <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Register</a></li> -->
        <li><a href="menu.php">Visit Canteen</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <!-- <li class="last"><a href="logout.php">Logout</a></li> -->
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
        <article class="two_quarter">
          <h2 style="color: Orange; font-size:200%">Feedback</h2>
		  <form action="post_comment.php" method="POST">
		<table border=0 height=70% width=100%>
			
<!-- <tr height=25% width=100%>
				<td><font face=normal size=3 color=#666666><center><b><label>Name: </label>
<input type=text name="name" placeholder="Enter your name"></b><br></font></td>
			</tr> -->
			<tr heigth=25% width=100%>
				<td><font face=normal size=3 color=#666666><center><b><label>Comments: </label>
<textarea name="comment"  rows=2  cols=25 ></textarea></b><br><br></font></td>
			</tr>

			<<!-- tr height=25% width=100%>
				<td><font face=normal size=3 color=#666666><center><b><label><p>Visitor Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</label>    
				<select name="visitor"><option>Student</option><option>Proffeser</options><option>All Others</option></select></b></br><br></font></td></p>
			</tr>
			<tr height=25% width=100%>
				<td><font face=normal size=3 color=#666666><center><b><label>Comments:</label>
<textarea  rows=1  cols=16 name="comments"></textarea></b><br><br></font></td>
			</tr>		 -->
			<tr height=15% width=100%>
				<td><center><input type="submit" value="Comment">
			</tr>
			<!-- <tr height=15% width=100%>	
				<td><center><input type=submit value="  	RESET 	 ">
			</tr>		 -->		
			
		</table>
		</form>
          </article>
        <!-- article 2 -->
        <article class="two_quarter lastbox">.
          <figure>
            <ul class="clear">
              <li><a href="#"><img src="images/2.jpg" width="130" height="130" alt=""></a></li>
              <li><a href="#"><img src="images/3.jpg" width="130" height="130" alt=""></a></li>
			  <li><a href="#"><img src="images/1.jpg" width="130" height="130" alt=""></a></li>
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


        <frame> 
  <h2><u><b>Comments</b></u></h2>
<?php

$link = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($link,'register');

$find_comments = mysqli_query($link,'SELECT * FROM comment');

while($row = mysqli_fetch_assoc($find_comments))
{
  
  $comment_name = $row['name'];
  $comment = $row['comment'];

  echo "
  <table align='right' border=1 cellspacing=0 cellpadding=0 bordercolor='#a9ff4d' >
  <tr><td style='background-color:#f2ffe6' width=600 height=30>
  <p><b><font size='3' face='Arial' color='black'> &nbsp;  &nbsp<img src='images/1.jpg' height='22' width='22'>&nbsp$comment_name </b><p>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp $comment
  </td></tr></table>";
  
}

?>
</frame>

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
