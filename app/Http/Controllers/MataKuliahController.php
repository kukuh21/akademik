<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataKuliah;
use Illuminate\Validation\Rule;
use DB;

class MataKuliahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $matakuliah = MataKuliah::paginate(5);

        $filterKeyword = $request->get('Nama_MK');

        if($filterKeyword){
            $matakuliah = MataKuliah::where('Nama_MK', 'LIKE', "%$filterKeyword%")
                                    ->paginate(5);
        }

        $no = 1;
        return view('matakuliah.index',[
            'matakuliah' => $matakuliah,
            'no' => $no
        ]);
    }

    public function rulesCreate()
    {
        return [
            'Kode_MK' => 'required|min:6|max:6|unique:matakuliah',
            'Nama_MK' => 'required|max:25',
            'Sks' => 'required'
        ];
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rulesCreate());
        $db = new MataKuliah;
        $db->Kode_MK = $request->Kode_MK;
        $db->Nama_MK = $request->Nama_MK;
        $db->Sks = $request->Sks;
        $db->save();
        return redirect()->route('matakuliah.index')->with('status', 'Mata Kuliah Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = MataKuliah::findOrFail($id);
        return view('matakuliah.edit', [
            'data' => $data
        ]);
    }

    public function rulesEdit($id)
    {
        return [
            'Kode_MK' => [
                'required',
                Rule::unique('matakuliah','Kode_MK')->ignore($id,'id'),
            ],
            'Nama_MK' => 'required|max:25',
            'Sks' => 'required'
        ];
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request,$this->rulesEdit($id));
        $db = MataKuliah::find($id);
        $db->Kode_MK = $request->Kode_MK;
        $db->Nama_MK = $request->Nama_MK;
        $db->Sks = $request->Sks;
        $db->save();
        return redirect()->route('matakuliah.index')->with('status', 'Mata Kuliah Berhasil Diupdate');
    }

    public function destroy($id)
    {
      // Cek apakah ada relasi pada target tahunan ini, relasi pada target skp tahunan
      $cekrelasi = DB::table('matakuliah')
                   ->join('perkuliahan','matakuliah.id','=','perkuliahan.id_matakuliah')
                   ->where('perkuliahan.id_matakuliah', $id)
                   ->get();

      // Jika ada relasi
      if($cekrelasi->count()) {
        return redirect()->route('matakuliah.index')->with('status', 'Maaf Data Ini Tidak Dapat Dihapus Karena Terelasi Ke Perkuliahan');
      } else {
        MataKuliah::destroy($id);
        alert()->success('Mata Kuliah Berhasil Dihapus');
        return redirect()->route('matakuliah.index')->with('status', 'Mata Kuliah Berhasil Di Hapus');;
      }
    }
}
