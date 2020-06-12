<?php
$conn=mysqli_connect("localhost","root","","database");
$name   =$_POST['name'];
$address    =$_POST['address'];
$foodcategory        =$_POST['foodcategory'];
$minprice        =$_POST['minprice'];
$foodquality      =$_POST['foodquality'];
$sql="INSERT INTO res(name,address,foodcategory,minprice,foodquality) VALUES('$name','$address','$foodcategory','$minprice','$foodquality')";
$objc=mysqli_query($conn, $sql);
if($objc)
{
	echo "<script>
	alert('Entry Created Successfully')
	</script>";
}
else
{
	echo "Error";
}

?>