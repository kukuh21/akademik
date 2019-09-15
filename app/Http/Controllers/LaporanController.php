<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Dosen;
use App\Mahasiswa;
use App\MataKuliah;
use App\Perkuliahan;
use PDF;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = '';
        if($request->get('Mahasiswa')) {
            $data = Mahasiswa::all();
        } else if($request->get('Dosen')) {
            $data = Dosen::all();
        } else if($request->get('Mata Kuliah')) {
            $data = MataKuliah::all();
        } else {

        }

        return view('laporan.index', [
            'data' => $data
        ]);
    }

    public function print(Request $request)
    {
        if($request->laporan == 'Mahasiswa') {
            $tipe = 'Data Mahasiswa';
            $query = Mahasiswa::all();
        } else if($request->laporan == 'Dosen') {
            $tipe = 'Data Dosen';
            $query = Dosen::all();
        } else if($request->laporan == 'Mata Kuliah') {
            $tipe = 'Data Mata Kuliah';
            $query = MataKuliah::all();
        } else {
            $tipe = 'Data Perkuliahan';
            $query = DB::table('perkuliahan')
                ->join('dosen','perkuliahan.id_dosen','=','dosen.id')
                ->join('mahasiswa','perkuliahan.id_mahasiswa','=','mahasiswa.id')
                ->join('matakuliah','perkuliahan.id_matakuliah','=','matakuliah.id')
                ->orderBy('mahasiswa.id','asc')
                ->get();
        }

        $no = 1;
        $title = "Laporan $tipe";

        $pdf = PDF::loadView('laporan.laporan_pdf', compact('title','no', 'query','tipe'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream("laporan.pdf", array("Attachment" => false));
        exit(0);
    }

}
