@extends('layouts.app_backend')

@section('title')
  Edit Mata Kuliah
@endsection

@section('breadcrumb')
   @parent
   <li>Mata Kuliah</li>
@endsection

@section('content')
<form action="{{route('matakuliah.update', ['id' => $data->id])}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
  @csrf
  <input type="hidden" value="PUT" name="_method">
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
      <div class="col-md-3">
        <div class="form-group">
          <label>Kode Mata Kuliah</label>
          <input value="{{ $data->Kode_MK }}" type="text" class="form-control {{$errors->first('Kode_MK') ? "is-invalid": ""}}"  name="Kode_MK" id="Kode_MK">
          <div class="invalid-feedback">
              {{$errors->first('Kode_MK')}}
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->

      <div class="col-md-3">
        <div class="form-group">
          <label>Nama Mata Kuliah</label>
          <input value="{{ $data->Nama_MK }}" type="text" class="form-control {{$errors->first('Nama_MK') ? "is-invalid": ""}}"  name="Nama_MK" id="Nama_MK">
          <div class="invalid-feedback">
              {{$errors->first('Nama_MK')}}
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="form-group">
          <label>SKS</label>
          <input value="{{ $data->Sks }}" type="text" class="form-control {{$errors->first('Sks') ? "is-invalid": ""}}"  name="Sks" id="Sks">
          <div class="invalid-feedback">
              {{$errors->first('Sks')}}
          </div>
        </div>
        <!-- /.form-group -->
      </div>

      <!-- /.form-group -->
      </div>
  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floppy-o"></i> Simpan </button>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Batal</a>
  </div>
</div>
</form>
<!-- /.box -->
@endsection

@section('active-master')
  active
@endsection

@section('active-matakuliah')
  active
@endsection

@section('script')
  <script>
  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
  //Datemask2 mm/dd/yyyy
  $('#datemask2').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
  //Money Euro
  $('[data-mask]').inputmask()
  </script>
@endsection