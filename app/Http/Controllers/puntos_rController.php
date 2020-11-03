<?php

namespace App\Http\Controllers;

use App\puntos_reciclaje;
use Illuminate\Http\Request;

class puntos_rController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index3(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('menuPuntoReciclaje');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $puntos_reciclaje = puntos_reciclaje::all();
        return view("enlistarPunto")->with('puntos_reciclaje',$puntos_reciclaje);
    }

    public function index2(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        if($request->user()->getRol('user') == 0){
            $puntos_reciclaje = puntos_reciclaje::all();
            return view("editarPunto")->with('puntos_reciclaje',$puntos_reciclaje);
        }else{
            return "No cuentas con la autorización";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        if($request->user()->getRol('user') == 0){
            return view("crearPuntos");
        }else{
            return "No cuentas con la autorización";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puntos_reciclaje = new puntos_reciclaje;
        $puntos_reciclaje->tipo_basura = $request->tipo;
        $puntos_reciclaje->apertura = $request->apertura;
        $puntos_reciclaje->horaA = $request->horaA;
        $puntos_reciclaje->cierre = $request->cierre;
        $puntos_reciclaje->horaC = $request->horaC;
        $puntos_reciclaje->save();

        return redirect("/PuntoReciclaje");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\puntos_reciclaje  $puntos_reciclaje
     * @return \Illuminate\Http\Response
     */
    public function show(puntos_reciclaje $puntos_reciclaje)
    {
        //
    }

    public function MuestraEdicion($id)
    {
        $puntos_reciclaje = puntos_reciclaje::where('id_pr', $id)->first();
        return view('editaDato')->with('puntos_reciclaje',$puntos_reciclaje);
    }
    public function guardaEdicion(Request $request)
    {
        $puntos_reciclaje = puntos_reciclaje::where('id_pr', $request->id)->update(['tipo_basura' => $request->tipo, 'apertura' => $request->apertura, 'horaA' => $request->horaA, 'cierre' => $request->cierre, 'horaC' => $request->horaC]);
        return redirect('/PuntoReciclaje');
    }
    public function borra($id){
        $puntos_reciclaje=puntos_reciclaje::where('id_pr', $id)->delete();
        return redirect('/PuntoReciclaje');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\puntos_reciclaje  $puntos_reciclaje
     * @return \Illuminate\Http\Response
     */
    public function edit(puntos_reciclaje $puntos_reciclaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\puntos_reciclaje  $puntos_reciclaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, puntos_reciclaje $puntos_reciclaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\puntos_reciclaje  $puntos_reciclaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(puntos_reciclaje $puntos_reciclaje)
    {
        //
    }
}
