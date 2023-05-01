
<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sinh viên</title>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
</head>
<body>
	{{-- @yield('header')
   <div class="container">
    @yield('content')
   </div> --}}
   <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Màn hình quản lý điểm danh</h2>
			</div>
			<div class="panel-body">
				<table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Lớp học</th>
                            <th>Giáo viên</th>
                            <th>Môn học</th>
                            <th>Điểm danh</th>
                            <th>Thống kê</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lichday as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->class_name}}</td>
                            <td>{{$item->teacher_name}}</td>
                            <td>{{$item->subject_name}}</td>
                            <td><button class="btn btn-primary btn-sm" onclick="window.open('{{route('qlsinhvien')}}?id={{$item->id}}','_self')">Điểm danh</button></td>
                            <td><button class="btn btn-success btn-sm">Thống kê</button></td>

                           


                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
          
               
			</div>
		</div>
	</div>
</body>
</html>