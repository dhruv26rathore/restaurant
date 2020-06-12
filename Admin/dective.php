<?php
include("connect.php");
$active =$_GET['id'];
$select ="UPDATE admins SET status='active' WHERE id='$active'";
$mysql =mysqli_query($conn,$select);
if ($mysql) {
	echo "<script>
	alert('success')
	window.location.href='select.php'
	</script>";
}
else
{
	echo "<script>
	alert('error')
	window.location.href='select.php'
	</script>";
}



?>