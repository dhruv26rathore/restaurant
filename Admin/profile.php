<?php
include("connect.php");
$start =$_SESSION['user'];
$myslq ="SELECT * FROM reg WHERE id='$start'";
$query =mysqli_query($conn,$myslq);
$fetch = mysqli_fetch_assoc($query);
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="" width="400px">
		
		<tr>
			<td>name</td>
			<td><?php echo $fetch['name'];?></td>
		</tr>
		<tr>
			<td>contact</td>
			<td><?php echo $fetch['contact'];?></td>
		</tr>
        <tr>
            <td>email</td>
			<td><?php echo $fetch['email'];?></td>
		</tr>
		<tr>
            <td>password</td>
			<td><?php echo $fetch['password'];?></td>
		</tr>
		<tr>
            <td>image</td>
			<td><?php echo $fetch['image'];?></td>
		</tr>
		<tr>
            <td>city</td>
			<td><?php echo $fetch['city'];?></td>
		</tr>
		<tr>
            <td>gender</td>
			<td><?php echo $fetch['gender'];?></td>
		</tr>
	</table>

</body>
</html>