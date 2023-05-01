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
        <form action="" method="get">
                    <input type="number" name="giaithua" placeholder="nhập số cần tính" value="{{$giaithua}}">
                    <button name="tinh">Tính</button>
                   
        </form>
        <br>
        <p>Kết quả là: {{$result}} </p>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Danh sách sinh viên</h2>
			</div>
			<div class="panel-body">
				<table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $item)
                        <tr>
                            <td>{{$item['STT']}}</td></td>
                            <td>{{$item['fullname']}}</td>
                            <td>Nam</td>
                            <td>{{{$item['birthdate']}}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
               
			</div>
		</div>
	</div>
</body>
</html>