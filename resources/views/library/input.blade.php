@extends('library.layout.master')



@section('content')
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Nhập sách cần thêm vào</h2>
			</div>
			<div class="panel-body">
				<form action="{{route('librarypost')}}" method="post">
                    @csrf
                    <div class="form-group">
				  <label for="STT">ID</label>
				  <input required="true" type="number" class="form-control" id="STT" name="STT" >
				</div>
                    <div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" class="form-control" id="usr" name="name" >
				</div>
				<div class="form-group">
				  <label for="publicyear">publicyear:</label>
				  <input required="true" type="number" class="form-control" id="age" name="publicyear">
				</div>
				<a href="{{route('library')}}"><button class="btn btn-success" name="addbook">add book</button></a>
                </form>
			</div>
		</div>
	</div>
@endsection