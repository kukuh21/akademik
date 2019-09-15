<!DOCTYPE html>
<html>
  <body>
    <style type="text/css">
    .header {

    }

    .logo {
      border-radius: 100em;
      height: 50px;
      float: left;
    }

    .logokanan {
      border-radius: 100em;
      opacity: 0,5;
      height: 20px;
      float: right;
	    padding-top: 28px;
    }

    .judul {
      border-top: 2px solid black;
	     border-bottom: 2px solid black;
    }

    .title {
      margin-top: 0px;
      font-family: Arial;
    }

    h4 hr {
      border-bottom: 3px solid black;
    }

    .tabel {
      border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%;
    }

    .tabel td {
      font-family:Arial;font-size:12px;border-style:solid;padding:5px 5px;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;
    }

    .tabel th {
      font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;
    }

    .tabel .top {
      font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center
    }

    .tabel .bot {
      font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;
    }
    </style>
    <div>
    		<!-- bagian edit-->
    			<div class="header">
    			<div class="title">
    			   <h4 align="center" style="margin-left: 0%;">
               <a style="color: #000; font-size: 16px; font-weight: bold; margin-left: -25px; margin-top: 10px;">AKADEMIK</a>
               </a>
               <hr style="margin-top: 15px;">
             </h4>
    			</div>
          </div>
      <div class="panel-body" style="margin-top: 0px;">
        <b><center>{{ $title }}</center></b>
        <br>
        @if(count($query) > 0)
          @if($tipe == "Data Mahasiswa")
            <table class="tabel">
              <thead>
                <tr>
                  <th class="top">No</th>
                  <th class="top">Nim</th>
                  <th class="top">Nama</th>
                  <th class="top">Tanggal Lahir</th>
                  <th class="top">Alamat</th>
                  <th class="top">JK</th>
                </tr>
              </thead>
              <tbody>
                @foreach($query as $list)
                    <tr>
                        <td><center>{{ $no++ }}</center></td>
                        <td>{{ $list->Nim }}</td>
                        <td>{{ $list->Nama_Mhs }}</td>
                        <td>{{ $list->Tgl_Lahir }}</td>
                        <td>{{ $list->Alamat }}</td>
                        <td>{{ $list->Jenis_Kelamin }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          @elseif($tipe == "Data Dosen")
          <table class="tabel">
            <thead>
              <tr>
                <th class="top">No</th>
                <th class="top">NIP</th>
                <th class="top">Nama Dosen</th>
              </tr>
            </thead>
            <tbody>
              @foreach($query as $list)
                  <tr>
                      <td><center>{{ $no++ }}</center></td>
                      <td>{{ $list->Nip }}</td>
                      <td>{{ $list->Nama_Dosen }}</td>
                  </tr>
              @endforeach
              </tbody>
          </table>
          @elseif($tipe == "Data Mata Kuliah")
          <table class="tabel">
            <thead>
              <tr>
                <th class="top">No</th>
                <th class="top">Kode MK</th>
                <th class="top">Nama MK</th>
                <th class="top">SKS</th>
              </tr>
            </thead>
            <tbody>
              @foreach($query as $list)
                  <tr>
                      <td><center>{{ $no++ }}</center></td>
                      <td>{{ $list->Kode_MK }}</td>
                      <td>{{ $list->Nama_MK }}</td>
                      <td>{{ $list->Sks }}</td>
                  </tr>
              @endforeach
              </tbody>
          </table>
          @else
          <table class="tabel">
            <thead>
              <tr>
                <th class="top">No</th>
                <th class="top">Mahasiswa</th>
                <th class="top">Dosen</th>
                <th class="top">Mata Kuliah</th>
                <th class="top">Nilai</th>
              </tr>
            </thead>
            <tbody>
              @foreach($query as $list)
                  <tr>
                      <td><center>{{ $no++ }}</center></td>
                      <td>{{ $list->Nim }} - {{ $list->Nama_Mhs }}</td>
                      <td>{{ $list->Nip }} - {{ $list->Nama_Dosen }}</td>
                      <td>{{ $list->Kode_MK }} - {{ $list->Nama_MK }}</td>
                      <td>{{ $list->Nilai }}</td>
                  </tr>
              @endforeach
              </tbody>
          </table>
          @endif
        @else
          Tidak Ada Data
        @endif
      </div>
      <br>
  </body>
</html>
