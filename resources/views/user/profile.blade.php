<!DOCTYPE html>
<html>
<head>
	<title>My profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<style>
		.header1{
			text-align: center;
			padding-top: 20px;
		}
		.form1{
			padding-left: 10px;
			width: 380px;
			float: left;
			box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);
		}
		.form1 th{
			text-align: center;
		}
		
		input[type="submit"]{width: 100px; margin-left: 140px;}
		input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}

		
	</style>
</head>
<body>
	<div class="header1">
		<h1>Profile </h1>

		<a href="{{route('home.index')}}">Back</a> |
		<a href="{{route('logout.index')}}">logout</a>
	</div>

<br>
	<div class="form1">
		<form method="post">
			@csrf
			<table border="0" class="table table-striped" >
				<tr>
					<th>Title</th>
					<th>Details</th>
				</tr>
				<tr>
					<td>Email</td>
					<td><p>{{ session('email') }}</p>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{ $user[0]->name }}" required="required"></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="phone" value="{{ $user[0]->phone }}" required="required"></td>
				</tr>
				<tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="{{ $user[0]->password }}" required="required"></td>
				</tr>
				<tr>
					<td>Location</td>
					<td><input type="text" name="location" value="{{ $user[0]->location }}" required="required"></td>
				</tr>
			</table>
				<td><input type="submit" name="submit" value="Save"></td>
		</form>
	</div>
</body>
</html>