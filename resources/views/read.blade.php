<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	 @include('layouts.header')
	 <div class="container">
	 	<div class="row">
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile no</th>
			<th>password</th>
			<th>City</th>
			<th>Hobbies</th>
			<th>Gender</th>
			<th>Address</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $d)
		<tr>
			<td>{{$d->name}}</td>
			<td>{{$d->email}}</td>
			<td>{{$d->mobile_no}}</td>
			<td>{{$d->password}}</td>
			<td>{{$d->city}}</td>
			<td>{{$d->hobbies}}</td>
			<td>{{$d->gender}}</td>
			<td>{{$d->address}}</td>
			<td><a href="/delete_user/{{$d->id}}" class="btn btn-danger">DELETE </a>
			<a href="/edit_user/{{$d->id}}" class="btn btn-info">EDIT </a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
</body>
</html>