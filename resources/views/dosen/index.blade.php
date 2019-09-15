@extends('layouts.app_backend')
@section('title')
  Daftar Dosen
@endsection

@section('breadcrumb')
   @parent
   <li>Dosen</li>
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
      <div class="box-header">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('dosen.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
            <form action="{{route('dosen.index')}}">
            <div class="col-md-4" style="padding-top: 5px;">
                <center>
                  <input type="text" class="form-control" placeholder="Filter by Nama Dosen" value="{{Request::get('Nama_Dosen')}}" name="Nama_Dosen">
                </center>
            </div>
            <div class="col-md-2" style="padding-top: 5px;">
                <center>
                  <input type="submit" value="Filter" class="btn btn-primary">
                </center>
            </div>
            </form>
        </div>
      </div>
      <div class="box-body">
        <div class="table-responsive">
        <table class="table table-bordered table-hover" id="data-tables">
        <thead>
          <tr>
              <th width="20"><center>No</center></th>
              <th class="text-center"><b>NIP</b></th>
              <th class="text-center"><b>Nama Dosen</b></th>
              <th><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $list)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$list->Nip}}</td>
                <td>{{$list->Nama_Dosen}}</td>
                <td class="text-center">
                    <a style="margin: 4px; width:55px;" href="{{route('dosen.edit', ['id' => $list->id])}}" class="btn btn-info btn-sm">Edit </a>
                    <form class="d-inline" action="{{route('dosen.destroy', ['id' => $list->id])}}" method="POST" onsubmit="return confirm('Delete data dosen?')" >
                    @csrf
                        <input type="hidden" value="DELETE" name="_method">
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colSpan="10">
                    {{$dosen->appends(Request::all())->links()}}
                </td>
            </tr>
        </tfoot>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('active-master')
  active
@endsection

@section('active-dosen')
  active
@endsection

@section('script')

@endsection