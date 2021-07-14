<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nrp = $request->nrp;
        $mahasiswa->email = $request->email;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->motivasi = $request->motivasi;
        $mahasiswa->pekerjaan = $request->pekerjaan;
        $mahasiswa->tempatPekerjaan = $request->tempatPekerjaan;
        $mahasiswa->telepon = $request->telepon;
        if ($request->hasFile('gambar')){
            $mahasiswa->gambar = substr($request->file('gambar')->store('public/mahasiswa_image'), 7);
            $request->gambar->move(public_path('mahasiswa_image'), $mahasiswa->gambar);
        }

        $mahasiswa->save();

        return redirect('/mahasiswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('update', compact('mahasiswa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nrp = $request->nrp;
        $mahasiswa->email = $request->email;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->motivasi = $request->motivasi;
        $mahasiswa->pekerjaan = $request->pekerjaan;
        $mahasiswa->tempatPekerjaan = $request->tempatPekerjaan;
        $mahasiswa->telepon = $request->telepon;
        if ($request->hasFile('foto')){
            $mahasiswa->foto = substr($request->file('foto')->store('public/mahasiswa_image'), 7);
            $request->foto->move(public_path('mahasiswa_image'), $mahasiswa->foto);
        }

        $mahasiswa->save();

        return redirect('/mahasiswa');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect(route('mahasiswa'));
    }
}