<?php

namespace App\Http\Controllers;

use App\detalle;
use App\puntos_reciclaje;
use App\recolectores;
use Illuminate\Http\Request;
use DB;


class detalleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index3(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('menuRecolector');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $puntos_reciclaje = puntos_reciclaje::all();
        return view('enlistarRelacion')->with('puntos_reciclaje', $puntos_reciclaje);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->user()->authorizeRoles(['user', 'admin']);
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
