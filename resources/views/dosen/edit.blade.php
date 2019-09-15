@extends('layouts.app_backend')

@section('title')
  Edit Dosen
@endsection

@section('breadcrumb')
   @parent
   <li>Dosen</li>
@endsection

@section('content')
<form action="{{route('dosen.update', ['id' => $data->id])}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
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
          <label>NIP</label>
          <input value="{{ $data->Nip }}" type="text" class="form-control {{$errors->first('Nip') ? "is-invalid": ""}}"  name="Nip" id="Nip">
          <div class="invalid-feedback">
              {{$errors->first('Nip')}}
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->

      <div class="col-md-3">
        <div class="form-group">
          <label>Nama Dosen</label>
          <input value="{{ $data->Nama_Dosen }}" type="text" class="form-control {{$errors->first('Nama_Dosen') ? "is-invalid": ""}}"  name="Nama_Dosen" id="Nama_Dosen">
          <div class="invalid-feedback">
              {{$errors->first('Nama_Dosen')}}
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <!-- /.form-group -->
      </div>
  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floppy-o"></i> Simpan </button>
    <a href="{{ route('dosen.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Batal</a>
  </div>
</div>
</form>
<!-- /.box -->
@endsection

@section('active-master')
  active
@endsection

@section('active-dosen')
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