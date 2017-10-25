<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\DRJalanKD;

class ruasjalanController extends Controller
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
            'namajalan' => $request['namajalan'],
            'pangkaljalan' => $request['pangkaljalan'],
            // 'badanjalan' => $request['badanjalan']
        ];

        return DRJalanKD::create($data);
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
        $ruasjalan = DRJalanKD::find($id);
        return $ruasjalan;
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
        $ruasjalan = DRJalanKD::find($id);
        $ruasjalan->namajalan = $request['namajalan'];
        $ruasjalan->pangkaljalan = $request['pangkaljalan'];
        // $balita->umur = $request['umur'];
        $ruasjalan->update();

        return $ruasjalan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruasjalan = DRJalanKD::find($id);
        $ruasjalan->destroy($id);
    }

    public function apiRuasJalan(){
        $ruasjalan = DRJalanKD::all();
        return DataTables::of($ruasjalan)
        ->addColumn('action', function($ruasjalan){
            return '<a onclick = "editRuasJalan('. $ruasjalan->id .')" class="btn btn-primary"></i>Edit</a> ' .
            ' <a onclick = "deleteRuasJalan('. $ruasjalan->id .')" class="btn btn-danger"></i>Delete</a>';
        })->make(true);
    }
}
