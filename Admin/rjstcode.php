<?php
$conn=mysqli_connect("localhost","root","","database");
$name =$_POST['name'];
$contact =$_POST['contact'];
$email =$_POST['email'];
$password =$_POST['password'];
$pass =md5($password);
$image =$_FILES['image-file_upload']['name'];
$array =explode(".", $image);
$time =end($array);
$new_time =time().".".$time;
$img = $_FILES['image-file_upload']['tmp_name'];
$city =$_POST['city'];
$gender =$_POST['gender'];
$mys  = "SELECT * FROM reg WHERE email='$email'";
$obc =mysqli_query($conn,$mys);
$nub =mysqli_num_rows($obc);
if ($nub>0)
{
	echo "<script>
	alert('email is alrady exiexts')
	</script>";
}
else
{
$mysql ="INSERT INTO  admins(name,contact,email,password,image,city,gender) VALUES ('$name','$contact','$email','$pass','$new_time','$city','$gender')";
move_uploaded_file($img, "images/" .$new_time);
$objc =mysqli_query($conn,$mysql);
if ($objc) 
{
	echo "<script>
	alert('rjs success')
	window.location.href='login.php'
	</script>";
}
else
{
	echo "<script>
	alert('rjs eroor')
	window.location.href='rjstr.php'
	</script>";
}
}
?>