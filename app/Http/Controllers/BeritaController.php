<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = berita::all();

        return view('berita', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('createberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->nama = $request->nama;
        $berita->link = $request->link;
        if ($request->hasFile('gambar')){
            $berita->gambar = substr($request->file('gambar')->store('public/berita_image'), 7);
            $request->gambar->move(public_path('berita_image'), $berita->gambar);
        }

        $berita->save();

        return redirect('/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $beritum)
    {
          return view('updateberita', ['berita' =>$beritum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $beritum)
    {
        
        $beritum->nama = $request->nama;
        $beritum->link = $request->link;
        if ($request->hasFile('gambar')){
            $beritum->gambar = substr($request->file('gambar')->store('public/berita_image'), 7);
            $request->gambar->move(public_path('berita_image'), $beritum->gambar);
        }

        $beritum->save();

        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
          $beritum->delete();

        return redirect(route('berita'));
    }

    public function indexHome()
    {
        $berita = berita::all();

        return view('welcome', ['berita' => $berita]);
    }
}
