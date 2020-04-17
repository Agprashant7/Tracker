
<?php
$name = $_POST["name"];
$password = $_POST["password"];
$error ="";
$success=""
 

 if(isset($_POST["submit"]))
 {
 	if($name=="admin"){
 	if($password=="password"){
 		$error ="";
 		$success ="welcome";
 		header("location: del.html");

 	}
 	else{
 		$error ="invalid password!!";
 		$success="";
 	}
 }
 else{
 	$error ="invalid username!!";
 		$success="";
 }
}
 ?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

</head>
<body>

	<form action="">
		<label>username</label>
		<input type="text" name="name" required="" minlength="6" value=""><br>
		<label>email</label>
		<input type="email" name="email" required=""><br>
		<label>password</label>
		<input type="password" name="password"><br>
		<input type="submit" name="submit" value="submit">
		
	</form>

</body>
</html>