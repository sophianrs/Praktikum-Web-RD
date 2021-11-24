<?php

namespace App\Http\Controllers;

use App\Models\beauty;
use Illuminate\Http\Request;

class BeautyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ORM
        $beauty = \App\Models\beauty::all();
        // return view('beauty.index', ['kecantikans'=>$cantik]);
        return view('beauty.index', ['beauty'=>$beauty]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('beauty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // beauty::create([
        //     'judul'=> $request->judul,
        //     'penulis'=> $request->penulis,
        //     'deskripsi'=> $request->deskripsi
        // ]);
        $request->validate([
            'judul'=> 'required',
            'penulis'=> 'required',
            'deskripsi'=> 'required'
        ]);


        beauty::create($request->all());
        return redirect('/beauty')->with('status','Selamat! Data telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\beauty $beauty)
    {
        //
        return view('beauty.show', compact('beauty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\beauty $beauty)
    {
        //
        return view('beauty.edit', compact('beauty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Models\beauty $beauty)
    {
        //
        $request->validate([
            'judul'=> 'required',
            'penulis'=> 'required',
            'deskripsi'=> 'required'
        ]);


        beauty::where('id', $beauty->id)
            ->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect('/beauty')->with('status','Selamat! Data telah berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\beauty $beauty)
    {
        //
        beauty::destroy($beauty->id);
        return redirect('/beauty')->with('status','Selamat! Data telah berhasil dihapus.');
    }
}
