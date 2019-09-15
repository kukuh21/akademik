@extends('layouts.app_backend')
@section('title')
  Perkuliahan
@endsection

@section('breadcrumb')
   @parent
   <li>Perkuliahan</li>
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
                  <a href="{{ route('perkuliahan.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
              <form action="{{route('perkuliahan.index')}}">
              <div class="col-md-4" style="padding-top: 5px;">
                  <center>
                    <input type="text" class="form-control" placeholder="Filter by Nama Mahasiswa" value="{{Request::get('Nama_Mhs')}}" name="Nama_Mhs">
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
              <th class="text-center"><b>Mahasiswa</b></th>
              <th class="text-center"><b>Dosen</b></th>
              <th class="text-center"><b>Mata Kuliah</b></th>
              <th class="text-center"><b>Nilai</b></th>
              <th width="100"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $list)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$list->Nim}} - {{ $list->Nama_Mhs }}</td>
                <td>{{$list->Nip}} - {{ $list->Nama_Dosen }}</td>
                <td>{{$list->Kode_MK}} - {{ $list->Nama_MK }}</td>
                <td>{{$list->Nilai}}</td>
                <td class="text-center">
                    <a style="margin: 4px; width:55px;" href="{{route('perkuliahan.edit', ['id' => $list->id_perkuliahan])}}" class="btn btn-info btn-sm">Edit </a>
                    <form class="d-inline" action="{{route('perkuliahan.destroy', ['id' => $list->id_perkuliahan])}}" method="POST" onsubmit="return confirm('Delete data perkuliahan?')" >
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
                    {{$data->appends(Request::all())->links()}}
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

@section('active-perkuliahan')
  active
@endsection

@section('script')

@endsection