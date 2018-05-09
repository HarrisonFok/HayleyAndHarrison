<?php

session_start();
header("TODOlist.html");

$db = mysqli_connect("localhost", "root", "", "todos");
$sql = "SELECT * FROM todoss";

if ($result = mysqli_query($db, $sql)) {
	if (mysqli_num_rows($result) > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>todo</th>";
            echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
        	echo "<tr>";
        		echo "<td>".$row['name']."</td>";
        		echo "<td>".$row['todo']."</td>";
        }
        echo "</table>";

        mysqli_free_result($result);
	} else {
		echo "No record found";
	} 
} else{
    echo "ERROR: Unable to execute query. " . mysqli_error($db);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>TODOs</title>
	<link rel="stylesheet" type="text/css" href="viewTODOs.css">
</head>
<body>

<button id="backFromViewTODO"><a href="../homepage.html">Back To Home</a></button>

</body>
</html>