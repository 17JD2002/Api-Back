<?php

namespace App\Http\Controllers;

use App\Models\Cantante;
use Illuminate\Http\Request;

class CantantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cantantes = Cantante::all();
        return $cantantes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cantante = new Cantante();
        $cantante->name = $request->nombres;
        $cantante->lastname = $request->apellidos;
        $cantante->birthday = $request->birthday;

        $cantante->save();
        return $cantante;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cantantes  $cantantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cantante = Cantante::findOrFail($id);
        return $cantante;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cantantes  $cantantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Cantante $cantantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cantantes  $cantantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cantante = Cantante::findOrFail($id);

        $cantante->name = $request->nombres;
        $cantante->lastname = $request->apellidos;
        $cantante->birthday = $request->birthday;

        $cantante->save();

        return $cantante;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cantantes  $cantantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cantante = Cantante::destroy($id);
        return $cantante;
    }
}
