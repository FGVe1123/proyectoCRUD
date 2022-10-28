<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;



class ProductoController extends Controller
{
    /**
     * Muestra lista de los recursos
     * Muestra vista, se necesita acceso a los elementos almacenados ($productos)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.productosIndex', compact('productos'));
    }



    /**
     * Muestra formulario para la creación de nuevos recursos
     * Vista con formulario (el almacenamiento va aparte)
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$producto = Producto::all();
        return view('productos.productosCreate');//, compact('producto'));
    }



    /**
     * almacena el nuevo recurso
     * Se aplican validaciones (en caso de ser necesarias, tener en cuenta las validaciones hechas en las migraciones)
     *  los elementos del formulario tiene que almacenarse en la base de datos
     *  mandar a una vista
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'existencia' => 'required|integer',
            'nombre' => 'required|max:255',
            'modelo' => ' required|max:255',
            'precio' => 'required|integer',
        ]);
    

        Producto::create($request->all());

        return redirect('/producto');
    }




    /**
     * Se muestran los detalles del recurso (descripción*)
     * Se espera algún parámetro en la URL (ID*)
     * la manera de activar este método dependerá del diseño de la página
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.productosShow', compact('producto'));
    }



    /**
     * Se muestra el formulario para editar un recurso, puede ser un solo formulario para crear y editar
     *  cada formulario debe actuar de manera distinta por la acción que realizan
     * 
     * Requiere agregar @ method('patch') para su funcionamiento.
     * tener alguna forma de activar el método (botón, enlace...)
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.productosEdit', compact('producto'));
    }



    /**
     * Guarda los cambios realizados en el formulario editar.
     * se pueden aplicar las mismas reglas de validacion si se requieren
     * por ser actualización de datos se utiliza "save" (no es creación de recurso)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        
        $request -> validate([
            'existencia' => 'required',
            'nombre' => 'required|max:255',
            'modelo' => 'required|max:255',
            'precio' => 'required',
        ]);


/*  
        
        $producto->existencia = $request->existencia;
        $producto-> nombre= $request->nombre;
        $producto-> modelo= $request->modelo;
        $producto-> precio= $request->precio;

        $producto->save();
*/
        Producto::where('id', $producto->id)->update($request->except('_token', '_method' ,'editar'));

        return redirect ('/producto');

    }



    /**
     * Remover algún recurso (eliminar)
     * Se tiene que hacer la petición POST
     *      Requiere el metodo @ csrf
     *      requiere @ method('delete')
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect('/producto');
    }
}
