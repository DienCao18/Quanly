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