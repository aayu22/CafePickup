<?php

$errors = array();
	require('db.php');
    session_start();
    // If form submitted, insert values into the database.

 // if (isset($_REQUEST['username'])) 
 //   	{

 	//if(isset($_POST['submit'])){
//}


		$additem = stripslashes($_REQUEST['additem']); // removes backslashes
		$additem = mysqli_real_escape_string($con,$additem); //escapes special characters in a string
		// $ItemOption = stripslashes($_REQUEST['ItemOption']); // removes backslashes
		// $ItemOption = mysqli_real_escape_string($con,$ItemOption); //escapes special characters in a string
		$price = stripslashes($_REQUEST['price']);
		$price = mysqli_real_escape_string($con,$price);
		$ItemOption = $_POST['food'];  // Storing Selected Value In Variable
		//echo "You have selected :" .$selected_val;  // Displaying Selected Value
		// $password1 = stripslashes($_REQUEST['password1']);
		// $password1 = mysqli_real_escape_string($con,$password);




$duplicate=mysqli_query($con,"SELECT * FROM fooditems WHERE lower(name)= lower ('".$additem."') ");
if (mysqli_num_rows($duplicate)>0)
{
	echo "<div class='form'><h3>Item already in Menu.</h3><br/>Click here to <a href='menu.php'>go to menu</a></div>";
    array_push($errors, "data already exists");
}


 if (count($errors) == 0) {
		// $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `fooditems` (name, ItemOption, price) VALUES ('$additem', '$ItemOption', '$price')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You have added item successfully.</h3><br/>Click here to <a href='menu.php'>go to Menu</a></div>";
        }
    
    }

// }
// else{ 

?>



















<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// $con = mysqli_connect("localhost","root","","register");
 
// // Check connection
// if($con === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
 
// // Escape user inputs for security
// $name = mysqli_real_escape_string($con, $_REQUEST['name']);
// $price = mysqli_real_escape_string($con, $_REQUEST['price']);
 
// // Attempt insert query execution
// $sql = "INSERT INTO fooditems (name, price) VALUES ('$name','$price')";
// if(mysqli_query($con, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
// }
 
// // Close connection
// mysqli_close($con);

?>
