<?php

session_start();
$db = mysqli_connect("localhost", "root", "", "todos");

if(isset($_POST['addTODObtn'])) {
	$name = $_POST['personname'];
	$todo = $_POST['newTODO'];
	if (($name == '') or ($todo == '')) {
		die("One or both of the inputs are empty");
	}
	$sql = "INSERT INTO todoss(name, todo) VALUES('$name', '$todo')";
	mysqli_query($db, $sql);
}

header("location:TODOlist.html");

?>