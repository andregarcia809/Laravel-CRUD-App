<!--The View-->
@extends('layouts.app')

@section('title')
Laravel-CRUD App
@endsection

@section('sidebar')
This is the side menu
@endsection

@section('content')
  @foreach ($post as $post)
    <a href="/post/title" class="nav-link">
      <h1>Title of Post</h1>
    </a>
    <p>Paragraph</p>
  @endforeach
@endsection
