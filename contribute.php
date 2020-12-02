<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "feedback";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$mobile = $_POST['mobile'];
$email = mysqli_real_escape_string($conn, $_POST['email']);
$book = mysqli_real_escape_string($conn, $_POST['book']);
 
$sql = "INSERT INTO contribute (name, mobile, email, book) VALUES ('$name', '$mobile', '$email', '$book')";
 
if($conn->query($sql) === TRUE){
 echo "<h1>Record Added Sucessfully</h1>";
 header("refresh:1; thanks2.html");
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>