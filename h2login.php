<?php

$username = $_POST['user'];
$password = $_POST['pass'];

if ($username == '' or $password == '') {
	die("One or both of the field is empty");
}

$db = mysqli_connect("localhost", "root", "", "HayleyBirthdayWebsiteDatabase");

$sql = "SELECT * FROM users WHERE name='$username' and password='$password'";
$result = mysqli_query($db, $sql);
$rowArray = mysqli_fetch_array($result);

if ($rowArray['name'] == $username && $rowArray['password'] == $password) {
	echo "Login successful.  Welcome! ".$rowArray['name'];
	header("location:homepage.html");
} else {
	echo "Invalid credentials";
}

?>