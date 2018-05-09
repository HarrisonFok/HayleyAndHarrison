<?php

session_start();
//connect to database
$db=mysqli_connect("localhost","root","","HayleyBirthdayWebsiteDatabase");
if(isset($_POST['register_btn']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
    // $username=mysql_real_escape_string($_POST['username']);
    // // $email=mysql_real_escape_string($_POST['email']);
    // $password=mysql_real_escape_string($_POST['password']);
    // $password2=mysql_real_escape_string($_POST['password2']);  
   if($password==$password2)
   {           //Create User
          //$password=md5($password); //hash password before storing for security purposes
          $sql="INSERT INTO users(name,password) VALUES('$username','$password')";
          mysqli_query($db,$sql);  
          $_SESSION['message']="You are now logged in"; 
          $_SESSION['username']=$username;
          //header("location:home.php");  //redirect home page
  }
  else
  {
    $_SESSION['message']="The two password do not match";   
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hayley & Harrison Register Page</title>
  <link rel="stylesheet" type="text/css" href="h2register.css">
</head>
<body>

<div id="registerFrm">
  <h1>Hayley & Harrison Register Page</h1>

  <form method="POST" action="h2register.php">
    <table>
       <tr>
             <td>Username : </td>
             <td><input type="text" name="username" class="textInput"></td>
       </tr>
  <!-- <tr>
             <td>Email : </td>
             <td><input type="email" name="email" class="textInput"></td>
       </tr> -->
        <tr>
             <td>Password : </td>
             <td><input type="password" name="password" class="textInput"></td>
       </tr>
        <tr>
             <td>Password again: </td>
             <td><input type="password" name="password2" class="textInput"></td>
       </tr>
        <tr>
             <td></td>
             <td><a href="h2login.html"><input type="submit" name="register_btn" class="Register"></a></td>
       </tr>
    </table>
  </form>

  <a href="h2login.html"><button>Back to Home</button></a>
</div>

</body>
</html>