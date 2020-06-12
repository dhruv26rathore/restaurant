<?php
include("connect.php");
$date =$_GET['deleteid'];
$mysql ="DELETE FROM admins WHERE id='$date'";
$obj =mysqli_query($conn,$mysql);
if($obj)
 {
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