@extends('layouts.app_backend')

@section('title')
  Tambah Mahasiswa
@endsection

@section('breadcrumb')
   @parent
   <li>Mahasiswa</li>
@endsection

@section('content')
<form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('mahasiswa.store')}}" method="POST">
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
      <div class="col-md-3">
        <div class="form-group">
          <label>NIP</label>
          <input value="{{old('Nim')}}" type="text" class="form-control {{$errors->first('Nim') ? "is-invalid": ""}}"  name="Nim" id="Nim">
          <div class="invalid-feedback">
              {{$errors->first('Nim')}}
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->

      <div class="col-md-3">
        <div class="form-group">
          <label>Nama</label>
          <input value="{{old('Nama_Mhs')}}" type="text" class="form-control {{$errors->first('Nama_Mhs') ? "is-invalid": ""}}"  name="Nama_Mhs" id="Nama_Mhs">
          <div class="invalid-feedback">
              {{$errors->first('Nama_Mhs')}}
          </div>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->

      <div class="col-md-3">
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input required type="text" value="{{old('Tgl_Lahir')}}" class="form-control" name="Tgl_Lahir" id="Tgl_Lahir" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
          </div>
        </div>
      </div>
      <!-- /.col -->

      <div class="col-md-3">
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select required class="form-control" style="width: 100%;" name="Jenis_Kelamin" id="Jenis_Kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
      </div>
      <!-- /.form-group -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="">Alamat</label>
          <input value="{{old('Alamat')}}" type="text" name="Alamat" class="form-control {{$errors->first('Alamat') ? "is-invalid" : ""}}">
          <div class="invalid-feedback">
              {{$errors->first('Alamat')}}
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floppy-o"></i> Simpan </button>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Batal</a>
  </div>
</div>
</form>
<!-- /.box -->
@endsection

@section('active-master')
  active
@endsection

@section('active-mahasiswa')
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