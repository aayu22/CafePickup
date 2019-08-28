<?php

$link = mysqli_connect("localhost","root","","register");
mysqli_select_db($link,'register');

$find_comments = mysqli_query($link,'SELECT * FROM fooditems');

while($row = mysqli_fetch_assoc($find_comments))
{
	
	$comment_name = $row['name'];
	$comment = $row['comment'];

	echo "
	<table align='right' border=1 cellspacing=0 cellpadding=0 bordercolor='#a9ff4d' >
	<tr><td style='background-color:#f2ffe6' width=600 height=30>
	<p><b><font size='3' face='Arial' color='black'> &nbsp;  &nbsp<img src='person.png' height='22' width='22'>&nbsp$comment_name </b><p>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp $comment
	</td></tr></table>";
	
}

?>








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


  
        <p><?php echo "$ItemName";  ?></p>
<?php

}