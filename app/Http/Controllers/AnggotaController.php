<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::orderBy('id','desc')->get();
        $data =[
        'judul'=>'Data Anggota',
        'index'=> $anggota
        ];
        
        return view('v_anggota.index',$data);

        // return view ('v_anggota.index',[
        //     'judul'=>'Data Anggota',
        //     'index'=> $anggota]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v_anggota.creatye', [
            'judul'=> 'Tambah Anggota'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
