@extends('layouts.app_backend')
@section('title')
  Daftar Mata Kuliah
@endsection

@section('breadcrumb')
   @parent
   <li>Mata Kuliah</li>
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
                  <a href="{{ route('matakuliah.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
              <form action="{{route('matakuliah.index')}}">
              <div class="col-md-4" style="padding-top: 5px;">
                  <center>
                    <input type="text" class="form-control" placeholder="Filter by Mata Kuliah" value="{{Request::get('Nama_MK')}}" name="Nama_MK">
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
              <th class="text-center"><b>Kode MK</b></th>
              <th class="text-center"><b>Nama MK</b></th>
              <th class="text-center"><b>SKS</b></th>
              <th><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($matakuliah as $list)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$list->Kode_MK}}</td>
                <td>{{$list->Nama_MK}}</td>
                <td>{{$list->Sks}}</td>
                <td class="text-center">
                    <a style="margin: 4px; width:55px;" href="{{route('matakuliah.edit', ['id' => $list->id])}}" class="btn btn-info btn-sm">Edit </a>
                    <form class="d-inline" action="{{route('matakuliah.destroy', ['id' => $list->id])}}" method="POST" onsubmit="return confirm('Delete data mata kuliah?')" >
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
                    {{$matakuliah->appends(Request::all())->links()}}
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

@section('active-matakuliah')
  active
@endsection

@section('script')

@endsection