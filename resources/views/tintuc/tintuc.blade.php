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
<div class="container pt-1">
	<div class="container">
        <div class="row">

            <div class="col-md-3">
                <img src="https://antimatter.vn/wp-content/uploads/2022/04/hinh-nen-hoa-1-800x500.jpg" alt="" style="width:100%">
                <h5 class="text-center">Hoa đẹp </h5>
            </div>
            <div class="col-md-3">
                <img src="https://antimatter.vn/wp-content/uploads/2022/04/hinh-nen-hoa-1-800x500.jpg" alt="" style="width:100%">
                <h5 class="text-center">Hoa đẹp </h5>
            </div>
            <div class="col-md-3">
                <img src="https://antimatter.vn/wp-content/uploads/2022/04/hinh-nen-hoa-1-800x500.jpg" alt="" style="width:100%">
                <h5 class="text-center">Hoa đẹp </h5>
            </div>
            <div class="col-md-3">
                <img src="https://antimatter.vn/wp-content/uploads/2022/04/hinh-nen-hoa-1-800x500.jpg" alt="" style="width:100%">
                <h5 class="text-center">Hoa đẹp </h5>
            </div>
            <div class="col-md-3">
                <img src="https://antimatter.vn/wp-content/uploads/2022/04/hinh-nen-hoa-1-800x500.jpg" alt="" style="width:100%">
                <h5 class="text-center">Hoa đẹp </h5>
            </div>
            <div class="col-md-3">
                <img src="https://antimatter.vn/wp-content/uploads/2022/04/hinh-nen-hoa-1-800x500.jpg" alt="" style="width:100%">
                <h5 class="text-center">Hoa đẹp </h5>
            </div>
        </div>
	</div>
</div>
@endsection