<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Illuminate\Validation\Rule;
use DB;
use Alert;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::paginate(5);

        $filterKeyword = $request->get('Nama_Mhs');

        if($filterKeyword){
            $mahasiswa = Mahasiswa::where('Nama_Mhs', 'LIKE', "%$filterKeyword%")
                                    ->orWhere('Nim', 'LIKE', "%$filterKeyword%")
                                    ->orWhere('Jenis_Kelamin', 'LIKE', "%$filterKeyword%")
                                    ->paginate(5);
        }

        $no = 1;
        return view('mahasiswa.index',[
            'mahasiswa' => $mahasiswa,
            'no' => $no

        ]);
    }

    public function rulesCreate()
    {
        return [
            'Nim' => 'required|min:9|max:9|unique:mahasiswa',
            'Nama_Mhs' => 'required|max:25',
            'Alamat' => 'required|max:50',
            'Jenis_Kelamin' => 'required'
        ];
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rulesCreate());
        $db = new Mahasiswa;
        $db->Nim = $request->Nim;
        $db->Nama_Mhs = $request->Nama_Mhs;
        $db->Tgl_Lahir = $request->Tgl_Lahir;
        $db->Alamat = $request->Alamat;
        $db->Jenis_Kelamin = $request->Jenis_Kelamin;
        $db->save();
        return redirect()->route('mahasiswa.index')->with('status', 'Mahasiswa Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', [
            'data' => $data
        ]);
    }

    public function rulesEdit($id)
    {
        return [
            'Nim' => [
                'required',
                Rule::unique('mahasiswa','Nim')->ignore($id,'id'),
            ],
            'Nama_Mhs' => 'required|max:25',
            'Alamat' => 'required|max:50',
            'Jenis_Kelamin' => 'required'
        ];
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request,$this->rulesEdit($id));
        $db = Mahasiswa::find($id);
        $db->Nim = $request->Nim;
        $db->Nama_Mhs = $request->Nama_Mhs;
        $db->Tgl_Lahir = $request->Tgl_Lahir;
        $db->Alamat = $request->Alamat;
        $db->Jenis_Kelamin = $request->Jenis_Kelamin;
        $db->save();
        return redirect()->route('mahasiswa.index')->with('status', 'Mahasiswa Berhasil Di Update');
    }

    public function destroy($id)
    {
      // Cek apakah ada relasi pada target tahunan ini, relasi pada target skp tahunan
      $cekrelasi = DB::table('mahasiswa')
                   ->join('perkuliahan','mahasiswa.id','=','perkuliahan.id_mahasiswa')
                   ->where('perkuliahan.id_mahasiswa', $id)
                   ->get();

      // Jika ada relasi
      if($cekrelasi->count()) {
        return redirect()->route('mahasiswa.index')->with('status', 'Maaf Data Ini Tidak Dapat Dihapus Karena Terelasi Ke Perkuliahan');
      } else {
        Mahasiswa::destroy($id);
        alert()->success('Mahasiswa Berhasil Dihapus');
        return redirect()->route('mahasiswa.index')->with('status', 'Mahasiswa Berhasil Di Hapus');;
      }
    }


}
