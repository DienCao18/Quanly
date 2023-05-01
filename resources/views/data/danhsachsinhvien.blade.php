<!DOCTYPE html>
<html>
<head>
	<title>Danh sách sinh viên</title>
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
				<h2 class="text-center">Danh sách sinh viên</h2>
			</div>
			<div class="panel-body">
				<form action="{{route('postsinhvien')}}" method="post">
                    @csrf
                    <div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" class="form-control" id="usr" name="name" value="{{$name}}">
				</div>
				<div class="form-group">
				  <label for="age">Age:</label>
				  <input required="true" type="number" class="form-control" id="age" name="age" value="{{$age}}">
				</div>
				
				<div class="form-group">
				  <label for="pwd">Gender:</label>
				  <input required="true" type="text" class="form-control" id="pwd" name="gender" value="{{$gender}}">
				</div>
				
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control" id="address" name="address" value="{{$address}}">
				</div>
				<button class="btn btn-success" name="register">{{$id !="" ? 'Update' : "register"}}</button>
                </form>
			</div>
		</div>
	</div>
</body>
</html>