


<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.html?You must log in first');
  }
 
?>






<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Curious Appetite</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><link rel="stylesheet" href="./style.css">

<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> 
addEventListener("load", function() 
  { setTimeout(hideURLbar, 0); }, false); 
function hideURLbar()
{ window.scrollTo(0,1); } 
</script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
  new WOW().init();
</script>

<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
      });
   </script>   
<!-- 
  <script src="js/simpleCart.min.js"> </script>

 -->

</head>




<body>
<!-- partial:index.partial.html -->
<!-- Nav -->

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.php">Cafe PickUp</a></h1>
      <h2>Awaken the Senses</h2>
    </div>

    <div class="row" style="text-align:right">
        <div class="col">
          <button type="button" class="" data-toggle="modal" data-target="#cart"><font  color="black">Cart (<span class="total-count"></span>)</font></button>
          <button class="clear-cart"><font color="black">Clear Cart</font></button></div>
    </div>
    
    <nav>
      <ul>
       <!--  <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Register</a></li> -->
        <li><a href="menu.php">Visit Canteen</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li class="last"><a href="contactus.html">Contact Us</a></li>
      </ul>
    </nav>
  </header>
</div>





 <div class="wrapper row2">
  <div id="container" class="clear">
    <div class="orders">
  
  <div class="order-top">
      <li class="item-lists"><h4>Burgers</h4>
    

<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Burgers"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>
<div> <p class="big"><?php echo "$ItemName";  ?></p>
     </div>
   



<?php

}

?>
</li>

<li class="item-lists">
        <div class="special-info grid_1 simpleCart_shelfItem">
          <h4>Price</h4>




<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Burgers"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>

 <div class="pre-top">
            <div class="pr-left">
              <div class="item_add"><span class="item_price"><h6>ONLY Rs.<?php echo "$item_price"; ?></h6></span></div>
            </div>
            <div class="pr-right">
            <a href="#" data-name="<?php echo "$ItemName";  ?>" data-price="<?php echo "$item_price"; ?>" class="add-to-cart btn btn-primary">Add to cart</a>
            </div>
              <div class="clearfix"></div>
          </div>


<?php

}

?>


          
          </div>
        </li>
      <div class="clearfix"></div>



<hr style="border-top: dotted 1px;" />


 <!-- <div class="order-top"> -->
      <li class="item-lists"><h4>Desserts</h4>




<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Desserts"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>
<div> <p class="big"><?php echo "$ItemName";  ?></p>
     </div>
   



<?php

}

?>
</li>

<li class="item-lists">
        <div class="special-info grid_1 simpleCart_shelfItem">
          <h4>Price</h4>




<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Desserts"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>

 <div class="pre-top">
            <div class="pr-left">
              <div class="item_add"><span class="item_price"><h6>ONLY Rs.<?php echo "$item_price"; ?></h6></span></div>
            </div>
            <div class="pr-right">
            <a href="#" data-name="<?php echo "$ItemName";  ?>" data-price="<?php echo "$item_price"; ?>" class="add-to-cart btn btn-primary">Add to cart</a>
            </div>
              <div class="clearfix"></div>
          </div>


<?php

}

?> 
       
          </div>
        </li>
      <div class="clearfix"></div>






<hr style="border-top: dotted 1px;" />



 <!-- <div class="order-top"> -->
      <li class="item-lists"><h4>Cold Beverages</h4>





<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Cold Beverages"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>
<div> <p class="big"><?php echo "$ItemName";  ?></p>
     </div>
   



<?php

}

?>
</li>

<li class="item-lists">
        <div class="special-info grid_1 simpleCart_shelfItem">
          <h4>Price</h4>




<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Cold Beverages"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>

 <div class="pre-top">
            <div class="pr-left">
              <div class="item_add"><span class="item_price"><h6>ONLY Rs.<?php echo "$item_price"; ?></h6></span></div>
            </div>
            <div class="pr-right">
            <a href="#" data-name="<?php echo "$ItemName";  ?>" data-price="<?php echo "$item_price"; ?>" class="add-to-cart btn btn-primary">Add to cart</a>
            </div>
              <div class="clearfix"></div>
          </div>


<?php

}

?> 
       
          </div>
        </li>
      <div class="clearfix"></div>



<hr style="border-top: dotted 1px;" />





<li class="item-lists"><h4>Sandwiches</h4>



<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Sandwiches"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>
<div> <p class="big"><?php echo "$ItemName";  ?></p>
     </div>
   



<?php

}

?>
</li>

<li class="item-lists">
        <div class="special-info grid_1 simpleCart_shelfItem">
          <h4>Price</h4>




<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Sandwiches"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>

 <div class="pre-top">
            <div class="pr-left">
              <div class="item_add"><span class="item_price"><h6>ONLY Rs.<?php echo "$item_price"; ?></h6></span></div>
            </div>
            <div class="pr-right">
            <a href="#" data-name="<?php echo "$ItemName";  ?>" data-price="<?php echo "$item_price"; ?>" class="add-to-cart btn btn-primary">Add to cart</a>
            </div>
              <div class="clearfix"></div>
          </div>


<?php

}

?> 
       
          </div>
        </li>
      <div class="clearfix"></div>



<hr style="border-top: dotted 1px;" />




<li class="item-lists"><h4>Exotic Cakes</h4>



<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Exotic Cakes"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>
<div> <p class="big"><?php echo "$ItemName";  ?></p>
     </div>
   



<?php

}

?>
</li>

<li class="item-lists">
        <div class="special-info grid_1 simpleCart_shelfItem">
          <h4>Price</h4>




<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Exotic Cakes"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>

 <div class="pre-top">
            <div class="pr-left">
              <div class="item_add"><span class="item_price"><h6>ONLY Rs.<?php echo "$item_price"; ?></h6></span></div>
            </div>
            <div class="pr-right">
            <a href="#" data-name="<?php echo "$ItemName";  ?>" data-price="<?php echo "$item_price"; ?>" class="add-to-cart btn btn-primary">Add to cart</a>
            </div>
              <div class="clearfix"></div>
          </div>


<?php

}

?> 
       
          </div>
        </li>
      <div class="clearfix"></div>



<hr style="border-top: dotted 1px;" />






<li class="item-lists"><h4>Ice Creams</h4>



<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Ice Creams"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>
<div> <p class="big"><?php echo "$ItemName";  ?></p>
     </div>
   



<?php

}

?>
</li>

<li class="item-lists">
        <div class="special-info grid_1 simpleCart_shelfItem">
          <h4>Price</h4>




<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$item = mysqli_query($link,'SELECT * FROM fooditems where ItemOption = "Ice Creams"');

while($row = mysqli_fetch_assoc($item))
{
  
  $ItemName = $row['name'];
  $ItemOpt = $row['ItemOption'];
  $item_price = $row['price'];

  ?>

 <div class="pre-top">
            <div class="pr-left">
              <div class="item_add"><span class="item_price"><h6>ONLY Rs.<?php echo "$item_price"; ?></h6></span></div>
            </div>
            <div class="pr-right">
            <a href="#" data-name="<?php echo "$ItemName";  ?>" data-price="<?php echo "$item_price"; ?>" class="add-to-cart btn btn-primary">Add to cart</a>
            </div>
              <div class="clearfix"></div>
          </div>


<?php

}

?> 
       
          </div>
        </li>
      <div class="clearfix"></div>



<hr style="border-top: dotted 1px;" />

    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    
</div>

  
 <!-- Modal -->
<!-- <div class="modal"> -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary"><a href="hello.html"> <font color="black">Order Now</font></a></button>
      </div>
    </div>
  </div>
</div>
<!-- </div>  -->

<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
   
  </footer>

</div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>