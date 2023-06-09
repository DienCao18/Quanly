<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Registation Form - Input User's Detail Information</h2>
			</div>
			<div class="panel-body">
				<form action="{{route('postuser')}}" method="post">
                    @csrf
                    <div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" class="form-control" id="usr" name="name">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
				  <label for="birthday">Birthday:</label>
				  <input type="date" class="form-control" id="birthday" name="birthday">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input required="true" type="password" class="form-control" id="pwd" name="password">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Confirmation Password:</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="xacnhan">
				</div>
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control" id="address" name="address">
				</div>
				<button class="btn btn-success" name="register">Register</button>
                </form>
			</div>
		</div>
	</div>
</body>
</html>