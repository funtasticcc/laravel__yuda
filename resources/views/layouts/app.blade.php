@extends('admin-lte::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('admin-lte::layouts.content-wrapper.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home')]
  ]

])
@endsection


@section('sidebar-menu')

<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATOR</li>
  <li class="active">
    <a href="{{ route('home') }}">
      <i class="dropdown fa fa-home"></i>
      <span>Home</span>  
     </a>
     <a href="{{ route('post.create') }}">
      <i class="dropdown fa fa-home"></i>
      <span>create post</span>  
     </a>
      <a href="{{ route('hasil') }}">
      <i class="dropdown fa fa-home"></i>
      <span>output post</span>  
     </a>
   
  </li>
  </li>
</ul>


@endsection
