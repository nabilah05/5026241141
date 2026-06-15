<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    public function index()
    {
        $data = DB::table('nilai_peserta')->get();

    	return view('index_peserta', ['data' => $data]);
    }

    public function tambah()
    {
        return view('nilaipeserta_tambah');
    }
    
    public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek
        ]);

        return redirect('/eas');
    }
}