<?php
 session_start();

  // if (!isset($_SESSION['username'])) {
  //   $_SESSION['msg'] = "You must log in first";
  //   header('location: index.html?You must log in first');
  // }

$link = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($link,'register');

$name = $_SESSION['username'];
$comment = $_POST['comment'];
$comment_length = strlen($comment);
$query = 'INSERT INTO comment (name, comment) VALUES ("'.$name.'", "'.$comment.'")';
	
if($comment_length > 100)
{
	header('location: feedback.php?error=1');	
}
else
{
mysqli_query($link,$query);
header('location: feedback.php');
}

?>