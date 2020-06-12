<?php
$conn = mysqli_connect("localhost","root","","database");
 $email = $_POST['email'];

$password =$_POST['password'];
 $mysqli = "SELECT * FROM admins WHERE (email='$email' AND password='$password') OR (contact='$email' AND password='$password')";
$objc =mysqli_query($conn,$mysqli);
$fetch = mysqli_fetch_assoc($objc);
$num =mysqli_num_rows($objc);
if($num>0)
 {
 
 echo "<script>
		alert('Login Successfully')
		window.location.href='select.php'
		</script>";
 	
}
else
{
	echo "<script>
	alert('Incorrect Username Password')
	window.location.href='login.php'
	</script>";
}
?>