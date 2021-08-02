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
		<a href="/countries/create">New</a>	
		<table class="table">
			<tr>
				<td>Name</td>  
				<td>Capital</td>  
				<td>Population</td>  
				<td>is_nato</td> 
				<td>Action</td> 
			</tr>
			@foreach($countries as $country)	
			<tr>
				<td>{{ $country->name }}</td>  <!-- amen angam echo chgrelu hamar " { { } } " -->
				<td>{{ $country->capital }}</td>
				<td>{{ $country->population }}</td>
				<td>{{ $country->is_nato ? "Yes" : "No" }}</td>
				<td class="row">
					<a href="/countries/edit/{{ $country->id }}" class="btn btn-warning mr-2">Edit</a>
					<form action="/countries/destroy/{{ $country->id }}" method="POST">
						@csrf
						<input type="submit" class="btn btn-danger" value="Delete">
					</form>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>