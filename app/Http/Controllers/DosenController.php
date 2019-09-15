<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Illuminate\Validation\Rule;
use DB;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $dosen = Dosen::paginate(5);

        $filterKeyword = $request->get('Nama_Dosen');

        if($filterKeyword){
            $dosen = Dosen::where('Nama_Dosen', 'LIKE', "%$filterKeyword%")
                            ->orWhere('Nip', 'LIKE', "%$filterKeyword%")
                            ->paginate(5);
        }

        $no = 1;
        return view('dosen.index',[
            'dosen' => $dosen,
            'no' => $no
        ]);
    }

    public function rulesCreate()
    {
        return [
            'Nip' => 'required|min:12|max:12|unique:dosen',
            'Nama_Dosen' => 'required|max:25',
        ];
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rulesCreate());
        $db = new Dosen;
        $db->Nip = $request->Nip;
        $db->Nama_Dosen = $request->Nama_Dosen;
        $db->save();
        return redirect()->route('dosen.index')->with('status', 'Dosen Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = Dosen::findOrFail($id);
        return view('dosen.edit', [
            'data' => $data
        ]);
    }

    public function rulesEdit($id)
    {
        return [
            'Nip' => [
                'required',
                Rule::unique('dosen','Nip')->ignore($id,'id'),
            ],
            'Nama_Dosen' => 'required|max:25',
        ];
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request,$this->rulesEdit($id));
        $db = Dosen::find($id);
        $db->Nip = $request->Nip;
        $db->Nama_Dosen = $request->Nama_Dosen;
        $db->save();
        return redirect()->route('dosen.index')->with('status', 'Dosen Berhasil Diupdate');
    }

    public function destroy($id)
    {
      // Cek apakah ada relasi pada target tahunan ini, relasi pada target skp tahunan
      $cekrelasi = DB::table('dosen')
                   ->join('perkuliahan','dosen.id','=','perkuliahan.id_dosen')
                   ->where('perkuliahan.id_dosen', $id)
                   ->get();

      // Jika ada relasi
      if($cekrelasi->count()) {
        return redirect()->route('dosen.index')->with('status', 'Maaf Data Ini Tidak Dapat Dihapus Karena Terelasi Ke Perkuliahan');
      } else {
        Dosen::destroy($id);
        alert()->success('Dosen Berhasil Dihapus');
        return redirect()->route('dosen.index')->with('status', 'Dosen Berhasil Di Hapus');;
      }
    }
}
