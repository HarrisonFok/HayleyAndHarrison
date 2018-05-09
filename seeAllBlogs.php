<!DOCTYPE html>
<html>
<head>
	<title>All Tweets</title>
	<link rel="stylesheet" type="text/css" href="seeAllBlogs.css">
</head>
<body>

<h1 align="center">All Tweets</h1>

<?php

session_start();
$db = mysqli_connect("localhost", "root", "", "blog");
$sql = "SELECT * FROM blogss";

if ($result = mysqli_query($db, $sql)) {
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div align='center'>";
				echo "<h3>Date: ".$row['curr_date']."</h3>";
				echo "<h3>Title: ".$row['title']."</h3>";
				echo "<h3>Dairy: ".$row['dairy']."</h3>";
				echo "<br>";
				echo "<br>";
			echo "</div>";
		}
        mysqli_free_result($result);
	} else {
		echo "No record found";
	} 
} else{
    echo "ERROR: Unable to execute query. " . mysqli_error($db);
}

?>

<button><a href="tweet.php">Back</a></button>

</body>
</html>

