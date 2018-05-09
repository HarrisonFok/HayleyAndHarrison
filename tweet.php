<?php

	session_start();
	$db = mysqli_connect("localhost", "root", "", "blog");

	if (isset($_POST['submitBtn'])) {
		$date = $_POST['date'];
		$title = $_POST['title'];
		$desc = $_POST['description'];

		if (($date == '') or ($title == '') or ($desc == '')) {
			die("One or more of the inputs are empty");
		}

		$sql = "INSERT INTO blogss(curr_date, title, dairy) VALUES('$date', '$title', '$desc')";

		mysqli_query($db, $sql);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tweet</title>
	<link rel="stylesheet" type="text/css" href="tweet.css">
</head>
<body>

<div id="tweetPage">
	<div id="submitDiv">
		<p id="instruction">To tweet, fill in all the information below (max 111 characters):</p>
		<form action="tweet.php" method="POST">
			<input type="text" placeholder="Enter a Date" name="date" />
			<input type="text" placeholder="Enter a Title" name="title">
			<input type="text" placeholder="Enter Description" name="description" id="desc" size="111" />
			<input type="submit" name="submitBtn" value="Submit">
		</form>

		<form action="seeAllBlogs.php" method="POST">
			<input type="submit" name="seeBtn" value="See All Tweets">
		</form>
	</div>
</div>

<button><a href="homepage.html">Back To Home</a></button>

</body>
</html>