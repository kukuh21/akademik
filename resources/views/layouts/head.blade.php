<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Akademik') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <!-- Header -->
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>AK</b></span>
     <span class="logo-lg"><b>Akademik </b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('images/avatar.png') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                    <img src="{{ asset('images/avatar.png') }}" class="img-circle" alt="User Image">
                    <p>
                      {{ Auth::user()->name }}
                    </p>
                </li>
                <li class="user-footer">
                    <div class="pull-left">
                        {{-- <a class="btn btn-default btn-flat" href="">Edit Profil</a> --}}
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- End Header -->