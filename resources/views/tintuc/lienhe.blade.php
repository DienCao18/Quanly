@extends('library.layout.master')

@section('header')
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('index')}}">Trang chủ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('thegioi')}}">Thế giới</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('lienhe')}}">Liên hệ</a>
    </li>    
  </ul>
</nav>
@endsection

@section('content')

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Registation Form - Input User's Detail Information</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				  <label for="birthday">Birthday:</label>
				  <input type="date" class="form-control" id="birthday">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input required="true" type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Confirmation Password:</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd">
				</div>
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control" id="address">
				</div>
				<button class="btn btn-success">Register</button>
			</div>
		</div>
	</div>

@endsection