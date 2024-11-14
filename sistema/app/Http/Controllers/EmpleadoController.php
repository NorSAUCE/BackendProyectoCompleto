<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class EmpleadoController extends Controller
{
    /**
     * Mostramos una lista de los empleados que estan en base de datos.
     *@return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        //obtenemos todos los empleados de la base y pasamos a la vista
        $empleados = Empleado::all();
        return view('empleado.index',compact('empleados'));
       
    }

    /**
     * Mostramos el formulario de creacion de un empleado.
     */
    public function create()
    {
        //retornamos la vista del formulario de create
        return view('empleado.create');
    }

    /**
     * Guardamos en base de datos
     */
    public function store(Request $request)
    {
        //validar los datos de entrada
        $request->validate([
            'Nombre'=>'required|string|max:255',
            'Apellido'=>'required|string|max:255',
            'Correo'=>'required|email|max:255',
            'Foto'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //Procesar la carga de la imagen
        $datosEmpleados = $request->except('token');
        if($request->hasFile('Foto')){
            //guardar la imagen en la carpeta public y almaceno la url en la base
            $datosEmpleados['Foto']= $request->file('Foto')->store('empleados','public');
        }
     
    //insertar el nuevo empleado en la base de datos
    Empleado::create($datosEmpleados);
    return redirect()->route('empleado.index')->with('succes','Empleado creado con exito');
    }

    /**
     * Para visualizar un empleado 
     */
    public function show($id)
    {
        //Mostrar un empleado especifico
        $empleado = Empleado::findOrFail($id);
        return view('empleado.show', compact('empleado'));
    }

    /**
     * Para editar un empleado.
     */
    public function edit($id)
    {
        //Obtener el empleado a editar
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit',compact('empleado'));

    }

    /**
     * Guardamos en base de dato la informacion editada.
     */
    public function update(Request $request,$id)
    {
        //Actualizar los datos ingresados en la base
        $datosEmpleados = $request->except(['_token', '_method']);
        Empleado::where('id','=',$id)->update($datosEmpleados);
        return redirect()->route('empleado.index')->with('success','Empleado Actualizado');
    }

    /**
     * Para borrar de la base de datos un empleado.
     */
    public function destroy($id)
    {
        //Eliminar un empleado de la base
        Empleado::destroy($id);
        return redirect()->route('empleado.index')->with('success','Empleado eliminado');
    }
}
