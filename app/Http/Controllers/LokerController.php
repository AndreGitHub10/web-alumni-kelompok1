<?php

namespace App\Http\Controllers;

use App\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $loker = loker::all();

        return view('loker', ['loker' => $loker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createloker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loker = new Loker;
        $loker->nama = $request->nama;
        $loker->pekerjaan = $request->pekerjaan;
        $loker->email = $request->email;
        $loker->alamat = $request->alamat;
        if ($request->hasFile('foto')){
            $loker->foto = substr($request->file('foto')->store('public/loker_image'), 7);
            $request->foto->move(public_path('loker_image'), $loker->foto);
        }
        if ($request->hasFile('fotoloker')){
            $loker->fotoloker = substr($request->file('fotoloker')->store('public/loker_image'), 7);
            $request->fotoloker->move(public_path('loker_image'), $loker->fotoloker);
        }

        $loker->save();

        return redirect('/loker');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loker $loker)
    {
        return view('showloker', ['lkr' => $loker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Loker $loker)
    {
        return view('updateloker', compact('loker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loker $loker)
    {
        $loker->nama = $request->nama;
        $loker->pekerjaan = $request->pekerjaan;
        $loker->email = $request->email;
        $loker->alamat = $request->alamat;
        $loker->alamat = $request->alamat;
        if ($request->hasFile('foto')){
            $loker->foto = substr($request->file('foto')->store('public/loker_image'), 7);
            $request->foto->move(public_path('loker_image'), $loker->foto);
        }
        if ($request->hasFile('fotoloker')){
            $loker->fotoloker = substr($request->file('fotoloker')->store('public/loker_image'), 7);
            $request->fotoloker->move(public_path('loker_image'), $loker->fotoloker);
        }

        $loker->save();

        return redirect('/loker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loker $loker)
    {
        $loker->delete();

        return redirect(route('loker'));
    }
}
