<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<form method="POST" class="col-4">

				@csrf

				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="">Capital</label>
					<input type="text" class="form-control" name="capital">
				</div>
				<div class="form-group">
					<label for="">Population</label>
					<input type="text" class="form-control" name="population">
				</div>
				<?php

				 ?>
				<div class="form-group">
					<label for="">is_nato</label><br>
					<label>
						Yes
					    <input type="radio" name="is_nato" value='1'>
				  	</label>
				  <label>
					  	No
					    <input type="radio" name="is_nato" value='0'>
				  </label>
									
				</div>
				<div>
					<input type="submit" class="btn btn-danger" value="New">
				</div>
			</form>
		</div>
	</div>
</body>
</html>