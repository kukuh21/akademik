<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perkuliahan;
use App\Mahasiswa;
use App\Dosen;
use App\MataKuliah;
use Illuminate\Validation\Rule;
use DB;

class PerkuliahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $data = DB::table('perkuliahan')
                ->join('dosen','perkuliahan.id_dosen','=','dosen.id')
                ->join('mahasiswa','perkuliahan.id_mahasiswa','=','mahasiswa.id')
                ->join('matakuliah','perkuliahan.id_matakuliah','=','matakuliah.id')
                ->orderBy('mahasiswa.id','asc')
                ->paginate(5);

        $filterKeyword = $request->get('Nama_Mhs');

        if($filterKeyword){
          $data = DB::table('perkuliahan')
                ->join('dosen','perkuliahan.id_dosen','=','dosen.id')
                ->join('mahasiswa','perkuliahan.id_mahasiswa','=','mahasiswa.id')
                ->join('matakuliah','perkuliahan.id_matakuliah','=','matakuliah.id')
                ->orderBy('mahasiswa.id','asc')
                ->where('Nama_Mhs', 'LIKE', "%$filterKeyword%")
                ->paginate(5);
        }

        $no = 1;
        return view('perkuliahan.index', [
            'data' => $data,
            'no' => $no
        ]);
    }

    public function rulesCreate()
    {
        return [
            'id_mahasiswa' => 'required',
            'id_dosen' => 'required',
            'id_matakuliah' => 'required',
            'Nilai' => 'required|max:1'
        ];
    }

    public function create()
    {
        return view('perkuliahan.create',[
            'mahasiswa' => Mahasiswa::all(),
            'dosen' => Dosen::all(),
            'matakuliah' => MataKuliah::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rulesCreate());
        $db = new Perkuliahan;
        $db->id_dosen = $request->id_dosen;
        $db->id_mahasiswa = $request->id_mahasiswa;
        $db->id_matakuliah = $request->id_matakuliah;
        $db->Nilai = $request->Nilai;
        $db->save();
        return redirect()->route('perkuliahan.index')->with('status', 'Perkuliahan Berhasil Ditambahkan');
    }

    public function rulesEdit()
    {
        return [
            'id_mahasiswa' => 'required',
            'id_dosen' => 'required',
            'id_matakuliah' => 'required',
            'Nilai' => 'required'
        ];
    }

    public function edit($id)
    {
        $data = Perkuliahan::findOrFail($id);
        return view('perkuliahan.edit', [
          'data' => $data,
          'mahasiswa' => Mahasiswa::all(),
          'dosen' => Dosen::all(),
          'matakuliah' => MataKuliah::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request,$this->rulesEdit());
        $db = Perkuliahan::find($id);
        $db->id_dosen = $request->id_dosen;
        $db->id_mahasiswa = $request->id_mahasiswa;
        $db->id_matakuliah = $request->id_matakuliah;
        $db->Nilai = $request->Nilai;
        $db->save();
        return redirect()->route('perkuliahan.index')->with('status', 'Perkuliahan Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $db = Perkuliahan::findOrFail($id);
        $db->delete();
        return redirect()->route('perkuliahan.index')->with('status', 'Perkuliahan Berhasil Dihapus');
    }
}
