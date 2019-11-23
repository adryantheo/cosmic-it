<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        //
        return response()->json(Soal::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $soal = new Soal;
        $soal->pertanyaan = $request->pertanyaan;
        $soal->benar = $request->benar;
        $soal->salah1 = $request->salah1;
        $soal->salah2 = $request->salah2;
        $success = $soal->save();

        if($success)
            return response()->json($success, 201);
        else
            return response()->json('gagal simpan', 400);
    }

    public function show(Soal $soal)
    {
        //
        return response()->json($soal, 200);
    }

    public function edit(Soal $soal)
    {
        //
    }

    public function update(Request $request, Soal $soal)
    {
        //
    }

    public function destroy(Soal $soal)
    {
        //
    }
}
