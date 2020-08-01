<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>The Hunting Jungle</title>
  <meta charset="utf-8">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/util.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.min.css">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          The Hunting Jungle
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} {{ Auth::user()->surname }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container-fluid">
  <div class="row">
    <div class="aside">
      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-dark">
            <p class="text-white text-center"><small>ADMIN : <strong>{{ ucfirst(Auth()->user()->name) }}
                  {{ ucfirst(Auth()->user()->surname) }}</strong></small></p>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-warning" href="{{url('home')}}">
              <strong>Dash Board</strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-warning" href="{{url('home')}}">
              <strong>Job Applications </strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-warning" href="{{url('promote')}}">
              <strong>Advertise my CV</strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-warning" href="{{url('edit_details')}}/{{ ucfirst(Auth()->user()->id) }}">
              <strong> Edit Profile </strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-warning" href="{{url('listed_jobs')}}">
              <strong>Listed Jobs</strong> </a>
          </li></strong>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-warning" href="{{url('support')}}">
              <i class="fa fa-cart fa-xl"></i><strong>Support Tickets</strong></a>
          </li>
          <li class="list-group-item bg-dark">
            <a class="btn btn-link btn-block text-light" href="{{url('logout')}}">
              <i class="fas fa-lock fa-xl"></i> <strong>Sign Out</strong></a>
          </li>
      </div>
    </div>