<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\DIHamil;

class ibuhamilController extends Controller
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
            'namaibuhamil' => $request['namaibuhamil'],
            'namasuami' => $request['namasuami'],
            // 'umur' => $request['umur']
        ];

        return DIHamil::create($data);
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
        $ibuhamil = DIHamil::find($id);
        return $ibuhamil;
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
        $ibuhamil = DIHamil::find($id);
        $ibuhamil->nokk = $request['nokk'];
        $ibuhamil->namaibuhamil = $request['namaibuhamil'];
        // $balita->umur = $request['umur'];
        $ibuhamil->update();

        return $ibuhamil;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ibuhamil = DIHamil::find($id);
        $ibuhamil->destroy($id);
    }

    public function apiIbuHamil(){
        $ibuhamil = DIHamil::all();
        return DataTables::of($ibuhamil)
        ->addColumn('action', function($ibuhamil){
            return '<a onclick = "editIbuHamil('. $ibuhamil->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deleteIbuHamil('. $ibuhamil->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
