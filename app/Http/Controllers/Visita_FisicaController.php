<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita_Fisica;
use Illuminate\Support\Facades\DB;

class Visita_FisicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$visitas_fisicas=Visita_Fisica::all(); usando eloquent
        $texto=trim($request->get('texto'));
        $visitas_fisicas=DB::table('visitas_fisicas')
                    ->select('id', 'año', 'numero_de_cedula', 'fecha_de_cedula',  'calle', 'colonia', 'alcaldia', 'cuenta_catastral', 'uso', 'superficie_del_terreno', 'folio_de_solicitud', 'oficio_de_solicitud', 'referencia', 'realizo')
                    ->Where('calle', 'LIKE', '%'.$texto.'%')
                    ->orWhere('colonia', 'LIKE', '%'.$texto.'%')
                    ->orWhere('alcaldia', 'LIKE', '%'.$texto.'%')
                    ->orWhere('realizo', 'LIKE', '%'.$texto.'%')
                    ->orderBY('id', 'asc')
                    ->paginate(10);

        return view('visitas_fisicas.index', compact('visitas_fisicas','texto'));
        //return $visitas_fisicas; trae el json con los datos y la paginacion
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visitas_fisicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $visitas_fisicas = new Visita_Fisica;
        $visitas_fisicas->año=$request->input('año');
        $visitas_fisicas->numero_de_cedula=$request->input('numero_de_cedula');
        $visitas_fisicas->fecha_de_cedula=$request->input('fecha_de_cedula');
        $visitas_fisicas->calle=$request->input('calle');
        $visitas_fisicas->colonia=$request->input('colonia');
        $visitas_fisicas->alcaldia=$request->input('alcaldia');
        $visitas_fisicas->cuenta_catastral=$request->input('cuenta_catastral');
        $visitas_fisicas->uso=$request->input('uso');
        $visitas_fisicas->superficie_del_terreno=$request->input('superficie_del_terreno');
        $visitas_fisicas->folio_de_solicitud=$request->input('folio_de_solicitud');
        $visitas_fisicas->oficio_de_solicitud=$request->input('oficio_de_solicitud');
        $visitas_fisicas->referencia=$request->input('referencia');
        $visitas_fisicas->realizo=$request->input('realizo');
        $visitas_fisicas->save();
        return redirect()->route('visitas_fisicas.index');
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
        $visitas_fisicas = Visita_Fisica::findOrFail($id);
        return view('visitas_fisicas.edit', compact('visitas_fisicas'));
        //return $visitas_fisicas;
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
        $visitas_fisicas = Visita_Fisica::findOrFail($id);
        $visitas_fisicas->año=$request->input('año');
        $visitas_fisicas->numero_de_cedula=$request->input('numero_de_cedula');
        $visitas_fisicas->fecha_de_cedula=$request->input('fecha_de_cedula');
        $visitas_fisicas->calle=$request->input('calle');
        $visitas_fisicas->colonia=$request->input('colonia');
        $visitas_fisicas->alcaldia=$request->input('alcaldia');
        $visitas_fisicas->cuenta_catastral=$request->input('cuenta_catastral');
        $visitas_fisicas->uso=$request->input('uso');
        $visitas_fisicas->superficie_del_terreno=$request->input('superficie_del_terreno');
        $visitas_fisicas->folio_de_solicitud=$request->input('folio_de_solicitud');
        $visitas_fisicas->oficio_de_solicitud=$request->input('oficio_de_solicitud');
        $visitas_fisicas->referencia=$request->input('referencia');
        $visitas_fisicas->realizo=$request->input('realizo');
        $visitas_fisicas->save();
        return redirect()->route('visitas_fisicas.index');

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
        $visitas_fisicas = Visita_Fisica::findOrFail($id);
        $visitas_fisicas->delete();
        return redirect()->route('visitas_fisicas.index');

    }
}
