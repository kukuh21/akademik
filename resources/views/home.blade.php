@extends('layouts.app_backend')

@section('title')
  Dashboard
@endsection

@section('breadcrumb')
   @parent
   <li>Dashboard</li>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        @if(session('status'))
        <div class="alert alert-success">
        {{session('status')}}
        </div>
        @endif
        <div class="box">
        <div class="box-body">
            <center><img src="{{ asset('images/logo.png') }}" width="150"></center>
           <center><h2>APLIKASI SISTEM INFORMASI AKADEMIK</h2></center>
           <a href="{{ route('mahasiswa.index') }}">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $mahasiswa }}</h3>
                            <p>Total Mahasiswa</p>
                    </div>
                        <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            </a>
            <a href="{{ route('dosen.index') }}">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $dosen }}</h3>
                            <p>Total Dosen</p>
                    </div>
                        <div class="icon">
                        <i class="fa fa-user-secret"></i>
                    </div>
                </div>
            </div>
            </a>
            <a href="{{ route('matakuliah.index') }}">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $matakuliah }}</h3>
                            <p>Total Mata Kuliah</p>
                    </div>
                        <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
            </div>
            </a>
            <a href="{{ route('perkuliahan.index') }}">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ $perkuliahan }}</h3>
                            <p>Total Perkuliahan</p>
                    </div>
                        <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
        </div>
    </div>
</div>
@endsection

@section('active-home')
  active
@endsection

@section('script')

@endsection