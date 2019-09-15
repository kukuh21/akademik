@extends('layouts.app_backend')

@section('title')
  Tambah Perkuliahan
@endsection

@section('breadcrumb')
   @parent
   <li>Perkuliahan</li>
@endsection

@section('content')
<form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('perkuliahan.store')}}" method="POST">
  @csrf
 <div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"></h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-3" style="padding-right: 50px;">
        <div class="form-group">
          <label>Mahasiswa</label>
          <select name="id_mahasiswa" id="id_mahasiswa" class="form-control js-example-basic-single">
            <option value="">Pilih Mahasiswa</option>
            @foreach ($mahasiswa as $list)
              <option value="{{ $list->id }}">{{ $list->Nim }} - {{ $list->Nama_Mhs}}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">
              {{$errors->first('id_mahasiswa')}}
          </div>
        </div>
      </div>

      <div class="col-md-3" style="padding-right: 50px;">
        <div class="form-group">
          <label>Dosen</label>
          <select name="id_dosen" id="id_dosen" class="form-control js-example-basic-single">
            <option value="">Pilih Dosen</option>
            @foreach ($dosen as $list)
              <option value="{{ $list->id }}">{{ $list->Nip }} - {{ $list->Nama_Dosen}}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">
              {{$errors->first('id_dosen')}}
          </div>
        </div>
      </div>

      <div class="col-md-3" style="padding-right: 50px;">
        <div class="form-group">
          <label>Mata Kuliah</label>
          <select name="id_matakuliah" id="id_matakuliah" class="form-control js-example-basic-single">
            <option value="">Pilih Mata Kuliah</option>
            @foreach ($matakuliah as $list)
              <option value="{{ $list->id }}">{{ $list->Kode_MK }} - {{ $list->Nama_MK}}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">
              {{$errors->first('id_matakuliah')}}
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label>Nilai</label>
          <input value="{{old('Nilai')}}" type="text" class="form-control {{$errors->first('Nilai') ? "is-invalid": ""}}"  name="Nilai" id="Nilai">
          <div class="invalid-feedback">
              {{$errors->first('Nilai')}}
          </div>
        </div>
      </div>
      <!-- /.col -->


      </div>
  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floppy-o"></i> Simpan </button>
    <a href="{{ route('perkuliahan.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Batal</a>
  </div>
</div>
</form>
<!-- /.box -->
@endsection

@section('active-perkuliahan')
  active
@endsection

@section('script')
<script>
  $(document).ready(function() {
      $('.js-example-basic-single').select2();
  });
</script>
@endsection