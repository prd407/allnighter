<!DOCTYPE html>
<html>
<head>
	<title>Contribute</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="contribute.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<script type="text/javascript" src="nav.js"></script>
</head>
<body>

<nav class="navigation-bar">
    <a href="index.html"><img class="logo" src="img/logo.png"></a>
    <a class="link" href="feedback.html">Feedback</a>
    <a class="link" href="services.html">Services</a>
    <a class="link" href="contri.php">Contribute</a> 
    <a class="link" onclick="on()" href="#">Courses</a>
</nav>
<div id="overlay" onclick="off()">
	<table>
		<tr>
			<td><a class="link" href="cse.html">B.Tech cse</a></td>
			<td><a class="link" href="ece.html">B.Tech ece</a></td>
			<td><a class="link" href="bio.html">B.Tech biotech</a></td>
			<td><a class="link" href="chem.html">B.Tech chem</a></td>
		</tr>
	</table>
</div>

	<form id="cform" name="cform" method="post" action="contribute.php">
	<input type="text" name="name" placeholder="Name" required>
	<input type="number" name="mobile" placeholder="Mobile" required>
	<input type="email" name="email" placeholder="Email" required>
	<input type="text" name="book" placeholder="Book Title" required> <br>
	<span>What would you like to contribute today?</span>
	<button type="submit" value="Submit">Submit</button>
	<button type="reset" value="Clear">Clear</button>
	</form>

 <section>These are books currently available.</section>
<?php
$connection = mysqli_connect('localhost', 'root', '','feedback'); 

$query = "SELECT * FROM contribute";
$result = mysqli_query($connection,$query);
$num=mysqli_num_rows($result);
if($num>0){
	while($product=mysqli_fetch_array($result)){

 ?>
 <table id="out"><tr>
<td style="width: 2vmax;"><?php echo $product['id']; ?></td>
<td style="width: 5vmax;"><?php echo $product['name'];?></td>
<td style="width: 5vmax;"><?php echo $product['mobile']; ?></td>
<td style="width: 10vmax;"><?php echo $product['email']; ?> </td>
<td style="width: 10vmax;"><?php echo $product['book']; ?></td>
</tr>
 </table>
<?php
	}
}
mysqli_close($connection);

?>


<a href="https://www.linkedin.com/in/thatbluekid/">
	<h3 style="font-family: 'Squada One', cursive; color: black;
	 position: fixed; bottom: 0; margin: auto; width: 99vmax;
	  text-align: center;">© Pradeep 2019</h3>
</a>
</body>
</html>