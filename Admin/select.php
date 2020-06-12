<?php
include("connect.php");
$mysql = "SELECT * FROM admins ";
$my =mysqli_query($conn,$mysql);
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

table{
	margin-top: 20px;
	border-collapse: collapse;
	width: 100%;
	color:#d96459;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
}
th{
	background-color: #d96459;
	color: white;
}
</style>

</head>
<body>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="select.php">Admins</a></li>
  <li><a href="restaurant.php">Add Resturant</a></li>
</ul>

	 <table border="" width="100%" style="text-align: center;">
	 	<tr>
	 		<th style="text-align: center;">sn</th>
	 		<th style="text-align: center;">name</th>
	 		<th style="text-align: center;">contact</th>
	 		<th style="text-align: center;">email</th>
	 		<th style="text-align: center;">password</th>
	 		<th style="text-align: center;">image</th>
	 		<th style="text-align: center;">city</th>
	 		<th style="text-align: center;">gender</th>
	 		<th style="text-align: center;">delete</th>
	 		<th style="text-align: center;">update</th>
	 		<th style="text-align: center;">status</th>
	 	</tr>
	 	
	 		<?php
	 		$sn ='1';
           while($data=mysqli_fetch_assoc($my))
            {
          $id=$data['id'];
	 		?>
	 		<tr>
	 		<td><?php echo $sn;  ?></td>
	 		<td><?php echo $data['name'];   ?></td>
	 		<td><?php echo $data['contact'];   ?></td>
	 		<td><?php echo $data['email'];   ?></td>
	 		<td><?php echo $data['password'];   ?></td>
	 		<!-- <td><?php echo $data['image'];   ?></td> -->
	 		<td><img src="images/<?php echo $data['image'] ;  ?>" height=50px widht=50px></td>
	 		<td><?php echo $data['city'];   ?></td>
	 		<td><?php echo $data['gender'];   ?></td>

	 		<td><a href="delete.php?deleteid=<?php echo $data['id']; ?>">delete</a></td>
	 		<td><a href="update.php?updateid=<?php echo $data['id']; ?>">update</a></td>
	 		<?php  
            if($data['status']=="active")
            {?>
<td><a href="active.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Active</a></td>
          <?php  } else{?>
<td><a href="dective.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Deactive</a></td>
        <?php  }
	 		?>
	 		<!-- <?php
            if ($data['status']=="active") 
            	{?>
            <td><a href="active.php?useract<?php echo $data['id'];?>" class="btn btn-success">Active</a></td>
            	
            <?php }
            else{
             ?>
            <td><a href="dective.php?useract<?php echo $data['id'];    ?>" class="btn btn-danger">Dective</a></td>
             <?php
            }
             ?> -->



        <?php
        $sn++;
         }
        ?>
	 	</tr>
	 </table>

</body>
</html>