<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competidor;
use App\Alumno;
class CompetidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competidor = Competidor::select('alumno.nombre as alumno_nombre', 'alumno.apellido as alumno_apellido' ,
                                    'alumno.fecha_nac as fecha_nac' , 'competidor.*')
                                  ->join('alumno', 'alumno.id', '=', 'competidor.alumno_id')
                                  ->get();


        return view('competidor.index', compact('competidor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = Alumno::select('id' , 'nombre' , 'apellido', 'sexo')->get();
        return view('competidor.crear', compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $competidor = new Competidor;
      $competidor->alumno_id = $request->get('id_alumno');
      $competidor->cat_kata = $request->get('cat_kata');
      $competidor->cat_kumite = $request->get('cat_kumite');
      $competidor->peso = $request->get('peso');
      $competidor->save();
      return response()->json(['msg' => 'Competidor Registrado'], 200);
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
      $competidor = Competidor::select('alumno.nombre as nombre' , 'alumno.apellido as apellido' , 'alumno.id as id' , 'competidor.id as compet_id' , 'alumno.sexo as sexo',
                                  'competidor.peso as peso')
                                ->join('alumno', 'alumno.id', '=', 'competidor.alumno_id')
                                ->where('competidor.id' ,'=' , $id)
                                ->first();

       return response()->json([
           'view' => view('competidor.editar',['competidor' => $competidor])->render(),
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
              Competidor::where('id', $id)
                    ->update([
                      'peso' => $request->get('peso'),
                      'cat_kumite' => $request->get('cat_kumite'),
                      'cat_kata' => $request->get('cat_kata')
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
      $alumnos = Competidor::where('id',$id)->delete();
      $mensaje = "Competidor Borrado";
      return json_encode($mensaje);
    }
}
