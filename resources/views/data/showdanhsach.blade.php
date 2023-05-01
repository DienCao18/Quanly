
<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function Deletestudent(id) {
            $.post('{{route('deletestudent')}}',
  {
    '_token': $('[name=_token]').val(),
    id:id;
    
  },
  function(data, status){
    location.reload();
  });
        }
    </script>
</head>
<body>
   {{ csrf_field()}}
	<div class="container">
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
                            <th>Tuổi</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Thao tác</th>
                            <th>Sửa</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studenlist as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->address}}</td>
                            <td><a href="{{route('getsinhvien')}}?id={{$item->id}}"><button  class="btn btn-success">Edit</button></a></td>
                            <td><button onclick="Deletestudent({{$item->id}})" class="btn btn-primary">Delete</button></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
               
			</div>
		</div>
	</div>
</body>
</html>