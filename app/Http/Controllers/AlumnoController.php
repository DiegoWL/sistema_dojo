<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use Carbon\Carbon;
class AlumnoController extends Controller
{
    /**
     * Display a listing; of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno::all();

        return view('alumno.ver_alumnos' , compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'rut' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'fecha_nac' => 'required',
        'direccion' => 'required',
        'email' => 'required|email',
        'actividad' => 'required',
        'telefono' => 'required',
        'fecha_ingreso' => 'required',
        'observacion' => 'required',
      ]);
       $alumno = new Alumno;
       $alumno->rut = $request->get('rut');
       $alumno->nombre = $request->get('nombre');
       $alumno->apellido = $request->get('apellido');
       $alumno->sexo = $request->get('sexo');
       $alumno->fecha_nac = Carbon::createFromFormat('d/m/Y' , $request->get('fecha_nac'));
       $alumno->direccion = $request->get('direccion');
       $alumno->actividad = $request->get('actividad');
       $alumno->telefono = $request->get('telefono');
       $alumno->fono_emerg = $request->get('fono_emerg');
       $alumno->email = $request->get('email');
       $alumno->apoderado = $request->get('apoderado');
       $alumno->fecha_ingreso = Carbon::createFromFormat('d/m/Y' , $request->get('fecha_ingreso'));
       $alumno->observacion = $request->get('observacion');
       $alumno->save();
       return back()->with('flash', 'Alumno Guardado');
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
      $alumno = Alumno::find($id);
       return response()->json([
           'view' => view('alumno.edit',['alumno' => $alumno])->render(),
       ]);
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
      Alumno::where('id', $id)
            ->update([
              'rut' => $request->get('rut'),
              'nombre' => $request->get('nombre'),
              'apellido' => $request->get('apellido'),
              'sexo' => $request->get('sexo'),
              'fecha_nac' =>  Carbon::createFromFormat('d/m/Y' ,  $request->get('fecha_nac')),
              'direccion' => $request->get('direccion'),
              'actividad' => $request->get('actividad'),
              'telefono' => $request->get('telefono'),
              'fono_emerg' => $request->get('fono_emerg'),
              'email' => $request->get('email'),
              'apoderado' => $request->get('apoderado'),
              'fecha_ingreso' => Carbon::createFromFormat('d/m/Y' , $request->get('fecha_ingreso')),
              'observacion' => $request->get('observacion')
          ]);
          return response()->json(['msg' => 'Datos Actualizados'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $alumnos = Alumno::where('id',$id)->delete();
          $mensaje = "Alumno Borrado";
          return json_encode($mensaje);
    }
}
