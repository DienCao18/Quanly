@extends('library.layout.master')



@section('content')
<div class="panel-body">
				<table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sách</th>
                            <th>Năm phát hành</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookList as $item)
                        <tr>
                            <td>{{$item->STT}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->publicyear}}</td>  
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
               
			</div>
@endsection