<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;
use App\MataKuliah;
use App\Perkuliahan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::count();
        $dosen = Dosen::count();
        $matakuliah = MataKuliah::count();
        $perkuliahan = Perkuliahan::count();
        return view('home',[
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen,
            'matakuliah' => $matakuliah,
            'perkuliahan' => $perkuliahan
        ]);
    }
}
