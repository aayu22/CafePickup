<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<?php

$errors = array();
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		// $password1 = stripslashes($_REQUEST['password1']);
		// $password1 = mysqli_real_escape_string($con,$password);




$duplicate=mysqli_query($con,"SELECT * FROM users WHERE username='".$username."' OR email='".$email."' LIMIT 1");
if (mysqli_num_rows($duplicate)>0)
{
	echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='registration.php'>Register</a></div>";
    array_push($errors, "data already exists");
}


 if (count($errors) == 0) {
		// $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    
    }

}
else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<!-- <input type="password" name="password1" placeholder="Confirm Password" required /> -->
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />


<?php } ?>
</body>
</html>