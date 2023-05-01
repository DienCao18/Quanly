
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
				<h2 class="text-center">Danh sách sinh viên</h2>
			</div>
			<div class="panel-body">
				<table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Lớp học</th>
                            <th>MSSV</th>
                            <th>Học sinh</th>
                            <th>Vắng mặt</th>
                            <th>Đi học</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($attendence != null)
                        @foreach ($attendence as $item)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$item->class_name}}</td>
                            <td>{{$item->rollno}}</td> 
                            <td>{{$item->fullname}}</td>
                            <td>
                                <input type="radio" name="{{$item->rollno}}" value="0" class="form-check-input " >
                            </td>
                            <td>
                                <input type="radio" name="{{$item->rollno}}" value="1" class="form-check-input" checked=true>
                            </td>
                            <td><input type="text" name="note_{{$item->rollno}}"  class="form-control"></td>          
                        </tr>
                        @endforeach
                        @endif


                        @if ($edit != null && count($edit)>0)
                        @foreach ($edit as $item)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$item->class_name}}</td>
                            <td>{{$item->rollno}}</td> 
                            <td>{{$item->fullname}}</td>
                            <td>
                                <input type="radio" name="{{$item->rollno}}" value="0" 
                                class="form-check-input"  checked="{{($item->status==0? 'true' : 'false')}}">
                            </td>
                            <td>
                                <input type="radio" name="{{$item->rollno}}" value="1" 
                                class="form-check-input" checked="{{($item->status==1? 'true' : 'false')}}">
                            </td>
                            <td><input type="text" name="note_{{$item->rollno}}"  
                                class="form-control" value="{{$item->note}}">
                            </td>          
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
               <button class="btn btn-primary" onclick="submitData()">Save</button>
               
			</div>
		</div>
	</div>
    <script type="text/javascript">
        function submitData() {
            statusList=jQuery('input[type="radio"]:checked')
            data=[]
            
            for (i=0;i<statusList.length;i++) {
                std={
                    'rollno':jQuery(statusList[i]).attr('name'),
                    'status':jQuery(statusList[i]).val(),
                    'note':jQuery('[name=note_'+jQuery(statusList[i]).attr('name')+']').val()
                }
                data.push(std)
            }
            console.log(data)
            $.post('{{route('qlpost')}}',{
                 "_token": "{{ csrf_token() }}",
                'id_lichday':{{$lichgiaovien->id}},
                'data':JSON.stringify(data)
            },function(dt) {
                location.reload()
            })
        }
    </script>
</body>
</html>