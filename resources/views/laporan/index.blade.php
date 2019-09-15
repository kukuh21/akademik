@extends('layouts.app_backend')

@section('title')
  Laporan
@endsection

@section('breadcrumb')
   @parent
   <li>Laporan</li>
@endsection

@section('content')
<form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('laporan.print')}}" method="POST" target="_blank">
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
          <label>Data Laporan</label>
          <select required class="form-control js-example-basic-single" style="width: 100%;" name="laporan" id="laporan">
            <option value="">Pilih Data Laporan</option>
            <option value="Mahasiswa">Data Mahasiswa</option>
            <option value="Dosen">Data Dosen</option>
            <option value="Mata Kuliah">Mata Kuliah</option>
            <option value="Perkuliahan">Perkuliahan</option>
          </select>
      </div>
      <!-- /.form-group -->
      </div>
    </div>
  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-success btn-save"><i class="fa fa-print"></i> Print </button>
  </div>
</div>
</form>
<!-- /.box -->
@endsection

@section('active-laporan')
  active
@endsection

@section('script')
<script>
  $(document).ready(function() {
      $('.js-example-basic-single').select2();
  });
</script>
@endsection