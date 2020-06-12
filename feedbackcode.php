<?php
$conn=mysqli_connect("localhost","root","","database");
$first_name   =$_POST['firstname'];
$last_name    =$_POST['lastname'];
$email        =$_POST['email'];
$phone        =$_POST['phonenumber'];
$message      =$_POST['message'];
$sql="INSERT INTO feedback(firstname,lastname,email,phonenumber,message) VALUES('$first_name','$last_name','$email','$phone','$message')";
$objc=mysqli_query($conn, $sql);
if($objc)
{
	echo "<script>
	alert('Thank you for Feedback')
	</script>";
}
else
{
	echo "Error";
}

?>