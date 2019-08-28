<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/



 // if (isset($_GET['logout'])) {
 //    session_destroy();
 //    unset($_SESSION['username']);
 //    header("location: index.html");
 //  }




session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.html"); // Redirecting To Home Page
}
?>