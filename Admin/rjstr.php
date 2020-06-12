<!DOCTYPE>
<html lang="eng">
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Admin Registration Panel</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				
			</div>
			<div class="col-lg-4">
			<form style="font-family: initial;" action="rjstcode.php" method="post" enctype="multipart/form-data" >
				<table>
					<div class="form-group">
						<label>name</label>
						<input type="text" name="name" placeholder="enter name" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>contact</label>
						<input type="text" name="contact" placeholder="enter contact" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email" placeholder="enter email" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" placeholder="enter password" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>image</label>
						<input type="file" name="image-file_upload" required="" class="form-control">
					</div>
					
					<div class="form-group">
						<label>city</label>
						<select class="form-control" name="city">
							<option value=""> select city</option>
							<option value="neemuch">neemuch</option>
						    <option value="indore">indore</option>
						    <option value="ujjain">ujjain</option>
						</select>
					</div>
					<div class="form-group">
						<label>gender:</label>
						male<input type="radio" name="gender" value="male">female<input type="radio" name="gender" value="female">
					</div>
					<input class="center-block btn btn-success" type="submit" name="login" value="login">
				</table>
			</form>
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
</body>
</html>