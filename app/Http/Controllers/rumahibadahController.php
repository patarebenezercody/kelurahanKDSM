<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\DPRumahIbadah;

class rumahibadahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
        
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
        $data =[
            'nama' => $request['nama'],
            'nik' => $request['nik'],
            // 'jkelamin' => $request['jkelamin']
        ];

        return DPRumahIbadah::create($data);
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
        $pengurus = DPRumahIbadah::find($id);
        return $pengurus;
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
        $pengurus = DPRumahIbadah::find($id);
        $pengurus->namajalan = $request['namajalan'];
        $pengurus->ujungjalan = $request['ujungjalan'];
        // $balita->umur = $request['umur'];
        $pengurus->update();

        return $pengurus;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengurus = DPRumahIbadah::find($id);
        $pengurus->destroy($id);
    }

    public function apiRumahIbadah(){
        $pengurus = DPRumahIbadah::all();
        return DataTables::of($pengurus)
        ->addColumn('action', function($pengurus){
            return '<a onclick = "editPengurus('. $pengurus->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deletePengurus('. $pengurus->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
