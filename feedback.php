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
$email = mysqli_real_escape_string($conn, $_POST['email']);
$feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
 
$sql = "INSERT INTO allnighter (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
 
if($conn->query($sql) === TRUE){
 echo "<h1>Record Added Sucessfully</h1>";
 header("refresh:1; thanks.html");
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>