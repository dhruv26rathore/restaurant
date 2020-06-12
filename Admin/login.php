<!DOCTYPE>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				
			</div>
			<div class="col-lg-4">
				<table>
					<h1>Admin Login</h1>
					<form action="logincode.php" method="post" enctype="multipart/form-data"> 
						<div class="form-group">
						<label>email</label>
						<input type="text" name="email" placeholder="enter email" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" placeholder="enter password" required="" class="form-control">
					</div>
					<input class="center-block btn btn-success" type="submit" name="login" value="login">
					</form>
				</table>
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>

</body>
</html>