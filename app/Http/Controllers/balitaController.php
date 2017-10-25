<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\DBalitaPuskes;

class balitaController extends Controller
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
        $data=
        [

            'namaanak' => $request['namaanak'],
            'ttl' => $request['ttl'], 
            // 'umur' => $request['umur'] 
        ];

        return DBalitaPuskes::create($data);
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
        $balita = DBalitaPuskes::find($id);
        return $balita;
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
        $balita = DBalitaPuskes::find($id);
        $balita->namaanak = $request['namaanak'];
        $balita->ttl = $request['ttl'];
        // $balita->umur = $request['umur'];
        $balita->update();

        return $balita;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $balita = DBalitaPuskes::find($id);
        $balita->destroy($id);
    }

    public function apiBalita(){
        $balita = DBalitaPuskes::all();
        return DataTables::of($balita)
        ->addColumn('action', function($balita){
            return '<a onclick = "editBalita('. $balita->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deleteBalita('. $balita->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
