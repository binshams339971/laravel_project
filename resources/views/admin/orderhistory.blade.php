<!DOCTYPE html>
<html>
<head>
	<title>Order History</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		.header1{
			text-align: center;
		}
		.mypost{

			width: 90%;
			padding-left: 200px;
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
	<p style="text-align: center; padding-top: 0px; font-size: 30px;"><strong>All Completed Orders</strong></p>
	<div class="header1">
			<a class="btn" id="abc"href="/admin"><i class="fa fa-home"></i></a> |
			<a href="/admin/post" class="btn btn-success">All Post</a> |
			<a href="/admin/order" class="btn btn-success">All Orders</a> |
			<a href="/admin/donate" class="btn btn-info">All Donate</a> |
			<a href="/admin/request" class="btn btn-warning">Request</a> |
			<a href="/admin/addadmin" class="btn btn-info">Add Admin</a> |
			<a href="/logout" class="btn btn-danger">Logout</a>
	</div>
<br>
	<div class="mypost">
		<table border="1" class="table table-striped"> 
			<tr>
				<th>Order ID</th>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Author Name</th>
				<th>Category No</th>
				<th>Price</th>
				<th>Buyer Email</th>
				<th>Seller Email</th>
			</tr>
			@foreach($orders as $u)
			<tr>
				<td>{{ $u->orderid }}</td>
				<td>{{ $u->bid }}</td>
				<td>{{ $u->bname }}</td>
				<td>{{ $u->aname }}</td>
				<td>{{ $u->category }}</td>
				<td>{{ $u->price }}</td>
				<td>{{ $u->bemail }}</td>
				<td>{{ $u->semail }}</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>