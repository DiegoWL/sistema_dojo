<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Pago;
use App\Evento;
use Carbon\Carbon;
use Jenssegers\Date\Date;
class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
      $pagos =  Pago::select('alumno.nombre as alumno_nombre', 'alumno.apellido as alumno_apellido' ,
                                'alumno.fecha_nac as fecha_nac' , 'pago.*')
                                ->join('alumno', 'alumno.id', '=', 'pago.alumno_id')
                                ->get();
        
        return view('pagos.index' , compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $alumno = Alumno::all();
          $evento = Evento::all();

          return view('pagos.registrar', compact('alumno' , 'evento'));
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
        $pagos = new Pago;
        $pagos->fecha = Carbon::createFromFormat('d/m/Y' , $request->get('fecha_pago'));
        $pagos->concepto = $request->get('concepto');
        $pagos->valor = $request->get('valor');
        $pagos->estado = $request->get('estado');
        $pagos->comentario = $request->get('comentario');
        $pagos->alumno_id = $request->get('alumno');
        $pagos->save();
        return back()->with('flash', 'Pago Registrado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $pagos = Pago::where('id',$id)->delete();
          $mensaje = "Borrado";
          return json_encode($mensaje);
    }
}
