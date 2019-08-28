<?php
// /*
// Author: Javed Ur Rehman
// Website: http://www.allphptricks.com/
// */
// ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <title>Add Item</title>
 <link rel="stylesheet" href="css/style1.css" />
 </head>
 <body>

<div class="form">
<h1>Add Item</h1>
<form name="registration" action="insert.php" method="post">
<input type="text" name="additem" placeholder="Add Item" required /><br>
  
<input type="text" name="price" placeholder="Price" required /><br>
<br>

  <select id="food" name="food" style="width:200px;height:40px">                      
  <option selected>--Select Item Option--</option>
  <option value="Burgers">Burgers</option>
  <option value="Desserts">Desserts</option>
  <option value="Cold Beverages">Cold Beverages</option>
  <option value="Sandwiches">Sandwiches</option>
  <option value="Exotic Cakes">Exotic Cakes</option>
  <option value="Ice Creams">Ice Creams</option>
</select>
<br>

<input type="submit" name="submit" value="Enter" /> 
 <input type="reset" value="Reset">
</form>
<br /><br/>
<?php 
//} 
?>
</body>
</html>  



<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Item</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>





<form action="insert.php" method="post">
    <p>
        <label for="Name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
    </p>
    <input type="submit" value="Enter">
</form>
</body>
</html>