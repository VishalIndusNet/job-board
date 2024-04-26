<nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light"  href="/">job-board</a>
      </li>
    </ul>
  
  </nav>
  
@extends('layouts.app')

@section('content')


<h1>Home : {{ Auth::user()->name }}</h1>


@endsection