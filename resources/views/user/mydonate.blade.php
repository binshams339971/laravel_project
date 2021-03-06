<!DOCTYPE html>
<html>
<head>
	<title>All Orders</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		.header1{
			text-align: center;
		}
		.mypost{
			width: 90%;
			padding-left: 220px;
			float: left;
		}
		#abc{
			display: inline-block;
			padding: 9px 12px;
			padding-top: 7px;
			margin-bottom: 0;
			font-size: 14px;
			line-height: 20px;
			color: #5e5e5e;
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			background-color: #d1dade;
			-webkit-border-radius: 3px;
			-webkit-border-radius: 3px;
			-webkit-border-radius: 3px;
			background-image: none !important;
			border: none;
			text-shadow: none;
			box-shadow: none;
			transition: all 0.12s linear 0s !important;
			font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
		}
		
	</style>
</head>
<body>
	<br>
	<p style="text-align: center; padding-top: 0px; font-size: 30px"><strong>All Donated Books</strong></p>
	<div class="header1">
		<a href="{{route('home.index')}}">Back</a> |
		<a href="{{route('logout.index')}}">logout</a>
	</div>
	</div>
<br>
	<div class="mypost">
		<table border="1" class="table table-striped"> 
			<tr>
				<th>ID</th>
				<th>Book Name</th>
				<th>Author Name</th>
				<th>Category No</th>
			</tr>
			@foreach($donatebook as $books)
			<tr>
				<td>{{ $books->id }}</td>
				<td>{{ $books->bname }}</td>
				<td>{{ $books->aname }}</td>
				<td>{{ $books->category }}</td>
			</tr>
			@endforeach
			
		</table>
	</div>
</body>
</html>