<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Http\Requests\AlumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   


    public function index()
    {
        $alumnos = Alumno::orderByDesc('id')->get();
        return view('alumno.index', compact('alumnos'));
        //return view('alumno.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumno.create');

       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlumnoRequest $request)
    {
        $datos =$request->validated(

        );
        //dd($datos);
        $alumno = Alumno::create($datos);
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumno.show', ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumno.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlumnoRequest $request, Alumno $alumno)
    {
        $datos = $request->validated();
        //dd($datos);
        $alumno->update($datos);
        return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
       $alumno->delete();
        return redirect()->route('alumno.index');
    }
    
   
    public function buscar(Request $request)
    {
        $query = $request->input('query');

        $alumnos = Alumno::where('primerNombre', 'LIKE', "%$query%")
                            ->orWhere('primerApellido', 'LIKE', "%$query%")
                            ->orWhere('correo', 'LIKE', "%$query%")
                            ->orderByDesc('id')
                            ->get();

        return view('alumno.index', compact('alumnos'));
    }
}





