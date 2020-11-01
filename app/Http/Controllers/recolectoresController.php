<?php

namespace App\Http\Controllers;

use App\recolectores;
use Illuminate\Http\Request;

class recolectoresController extends Controller
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
        $recolectores = recolectores::all();
        return view("enlistarRecolector")->with('recolectores',$recolectores);
    }
    public function index2()
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $recolectores = recolectores::all();
        return view("editarRecolector")->with('recolectores',$recolectores);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view("crearRecolector");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recolectores = new recolectores;
        $recolectores->nombre = $request->nombre;
        $recolectores->dia = $request->dia;
        $recolectores->save();

        return redirect("/Recolector");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function show(recolectores $recolectores)
    {
        //
    }
    public function MuestraEdicion($id)
    {
        $recolectores = recolectores::where('id_r', $id)->first();
        return view('editaDatoR')->with('recolectores',$recolectores);
    }
    public function guardaEdicionR(Request $request)
    {
        $recolectores = recolectores::where('id_r', $request->id)->update(['nombre' => $request->nombre, 'dia' => $request->dia]);
        return redirect('/Recolector');
    }
    public function borra($id){
        $recolectores=recolectores::where('id_r', $id)->delete();
        return redirect('/Recolector');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function edit(recolectores $recolectores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recolectores $recolectores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function destroy(recolectores $recolectores)
    {
        //
    }
}
