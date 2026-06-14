<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    public function index()
    {
        $agen = DB::table('agen')->get();

        return view('agen_index', [
            'agen' => $agen
        ]);
    }

    public function tambah()
    {
        return view('agen_tambah');
    }

    public function store(Request $request)
    {
        DB::table('agen')->insert([
            'namaagen' => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/agen');
    }
}