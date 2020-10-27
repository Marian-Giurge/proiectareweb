<?php
$servername = "remotemysql.com";
$username = "IgxJ1bzQxN";
$password = "gepyaqm2Na";
$dbname = "IgxJ1bzQxN";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//$sql = "INSERT INTO accounts (username, password, email) VALUES ('testare', '$2y$10.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'testare@test.com')";

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
	//if(count($_POST)>0)
	$user = $_POST['username'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
	$sql = "INSERT INTO accounts (username, password, email) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>