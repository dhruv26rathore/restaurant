<?php
include("connect.php");
$update=$_GET['updateid'];
$mysql ="SELECT * FROM admins WHERE id='$update'";
$objc =mysqli_query($conn,$mysql);
$fetch =mysqli_fetch_assoc($objc);
if (isset($_POST['submit']))
 {
	$name = $_POST['name'];
	$contact=$_POST['contact'];
	$email =$_POST['email'];
	$city =$_POST['city'];
	$gender =$_POST['gender'];
	if ($_FILES['image-file_upload']['name']=="")
	 {
		$old =$_POST['old_image'];

$mysl = "UPDATE admins SET name='$name',contact='$contact',email='$email',city='$city',gender='$gender',image='$old'  WHERE id='$update'";
	$obc =mysqli_query($conn,$mysl);
	if ($obc) {
		echo "<script>
		alert('success')
		window.location.href='select.php'
		</script>";
	}
	else
	{
		echo "<script>
		alert('eroor')
		window.location.href='select.php'
		</script>";
	}
}
else
{
	$new_image =$_FILES['image-file_upload']['name'];
	$tem_name=$_FILES['image-file_upload']['tmp_name'];
  $mysqli ="UPDATE admins SET name='$name',contact='$contact',email='$email',image='$new_image',city='$city',gender='$gender' WHERE id='$update'";
  move_uploaded_file($tem_name,"images/".$new_image);
  $objc =mysqli_query($conn,$mysqli);
  if ($objc) {
		echo "<script>
		alert('success')
		window.location.href='select.php'
		</script>";
	}
	else
	{
		echo "<script>
		alert('eroor')
		window.location.href='select.php'
		</script>";
	}
}
}



?>


<!DOCTYPE>
<html lang="eng">
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				
			</div>
			<div class="col-lg-4">
			<form style="font-family: initial;" action="" method="post" enctype="multipart/form-data">
				<table>
					<div class="form-group">
						<label>name</label>
						<input type="text" name="name" class="form-control" value="<?php echo $fetch['name'];?>">
					</div>
					<div class="form-group">
						<label>contact</label>
						<input type="text" name="contact"  class="form-control" value="<?php echo $fetch['contact']   ;  ?>">
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email"  class="form-control" value="<?php echo $fetch['email'] ;      ?>">
					</div>
					
					<div class="form-group">
						<label>image</label><br>
                        <img src="images/<?php echo $fetch['image']    ?>" height=80px widht=80px>
						<input type="file" name="image-file_upload" class="form-control">
						<input type="hidden" name="old_image" class="form-control" value="<?php echo $fetch['image'] ;?>">
                        
					</div>
					
					<div class="form-group">
						<label>city</label>
						<select class="form-control" name="city">
							<option value=""> select city</option>
							<option value="neemuch" <?php if ($fetch['city']=="neemuch") {
								echo "selected=='selected'";
							};  ?>>neemuch</option>
						    <option value="indore" <?php if ($fetch['city']=="indore") {
								echo "selected='selected'";
							};  ?>>indore</option>
						    <option value="ujjain" <?php if ($fetch['city']=="ujjain") {
								echo "selected='selected'";
							};  ?>>ujjain</option>
						</select>
					</div>
					<div class="form-group">
						<label>gender:</label>
						male<input type="radio" name="gender" value="male" <?php if ($fetch['gender']=="male") {
								echo "checked='checked'";
							};  ?>>female<input type="radio" name="gender" value="female" <?php if ($fetch['gender']=="female") {
								echo "checked='checked'";
							};  ?>>
					</div>
					<input class="center-block btn btn-success" type="submit" name="submit" value="update">
				</table>
			</form>
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>

</body>
</html>