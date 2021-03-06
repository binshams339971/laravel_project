<!DOCTYPE html>
<html>
<head>
	<title>My profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<style>
		.header1{
			text-align: center;
			padding-top: 5px;
		}
		.form1{
			padding-left: 10px;
			width: 380px;
			float: left;
			box-sizing: border-box; position: fixed; left: 50%; top: 55%; transform: translate(-50%, -50%);
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
		<h1>Order </h1>
		<a href="{{ route('home.home') }}">Back</a>
	</div>

<br>
	<div class="form1">
		<form method="post">
			@csrf
			<table border="0" class="table table-striped" >
				<tr>
					<th>#</th>
					<th>Details</th>
				</tr>
				<tr>
					<td>Seller Email</td>
					<td><input type="text" name="semail" value="{{ $book[0]->email }}" readonly></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="bname" value="{{ $book[0]->bname }}" readonly></td>
				</tr>
				<tr>
					<td>Author Namer</td>
					<td><input type="text" name="aname" value="{{ $book[0]->aname }}" readonly></td>
				</tr>
				<tr>
				<tr>
					<td>Category</td>
					<td><input type="text" name="category" value="{{ $book[0]->category }}" readonly></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="price" value="{{ $book[0]->price }}" readonly></td>
				</tr>
				<tr>
					<td>Delivery Charge</td>
					<td><input type="text" name="delivery" value="{{ 50 }}" readonly></td>
				</tr>
				<tr>
					<td>Total</td>
					<td><input type="text" name="total" value="{{ $book[0]->price + 50}}" readonly></td>
				</tr>
			</table>
				<td><input type="submit" name="submit" value="Order"></td>
		</form>
	</div>
</body>
</html>