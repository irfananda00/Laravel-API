<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = Mahasiswa::all();
        return response()->json($mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa();
        $mhs->nim = $request->input('nim');
        $mhs->nama = $request->input('nama');
        $mhs->save();
        return response()->json($mhs);
    }

   public function find(Request $request)
   {
     if ($request->has('nama') && $request->has('nim')) {
       $mhs = Mahasiswa::where([
         ['nama','like',$request->input('nama').'%'],
         ['nim','like',$request->input('nim').'%']
         ])->get();
     }elseif ($request->has('nama')) {
       $mhs = Mahasiswa::where([
         ['nama','like',$request->input('nama').'%']
         ])->get();
     }elseif ($request->has('nim')) {
       $mhs = Mahasiswa::where([
         ['nim','like',$request->input('nim').'%']
         ])->get();
     }
     return response()->json($mhs);
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
