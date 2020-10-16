<?php

namespace App\Http\Controllers;

use App\detalle;
use App\puntos_reciclaje;
use App\recolectores;
use Illuminate\Http\Request;
use DB;


class detalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle = detalle::all();
        $detalle = DB::table('detalle')->join('puntos_reciclaje', 'detalle.pr_id', '=', 'puntos_reciclaje.id_pr')->join('recolectores', 'detalle.r_id', '=', 'recolectores.id_r')->select('puntos_reciclaje.tipo_basura', 'recolectores.nombre')->get();
        #return view("enlistarRelacion")->with('detalle', $detalle);

        print_r($detalle);
        #print_r($detalle['items:protected'][0]['tipo_basura']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puntos_reciclaje = puntos_reciclaje::all();
        $recolectores = recolectores::all();
        return view("crearRelacion")->with('puntos_reciclaje',$puntos_reciclaje)->with('recolectores',$recolectores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = new detalle;
        $detalle->pr_id = $request->punto;
        $detalle->r_id = $request->rec;
        $detalle->save();

        return redirect("/Detalle");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function show(detalle $detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle $detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle $detalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle $detalle)
    {
        //
    }
}
