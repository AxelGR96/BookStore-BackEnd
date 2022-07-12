<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public  function insert(Request $request){

        $data = json_decode($request->data);

        //Fill Data in database
        $book = new book();
        $book->autor = $data->autor;
        $book->titulo = $data->titulo;
        $book->edicion = $data->edicion;
        $book->materia = $data->materia;
        $book->proveedor = $data->proveedor;
        $book->restricciones = $data->restriccion;
        $book->datos_publicacion = $data->datos;
        $book->tipo_contenido = $data->tipo;
        $book->save();
    }

    public function show(){
        $books = book::all();
        return response()->json([
            'status' => true,
            'books' => $books
        ], 200);
    }

    public function edit(Request $request){
        $data = $request->data;
        $book = book::where('id',$data['id'])->first();
        $book->autor = $data['autor'];
        $book->titulo = $data['titulo'];
        $book->edicion = $data['edicion'];
        $book->materia = $data['materia'];
        $book->proveedor = $data['proveedor'];
        $book->restricciones = $data['restricciones'];
        $book->datos_publicacion = $data['datos_publicacion'];
        $book->tipo_contenido = $data['tipo_contenido'];
        $book->save();
    }

    public function delete(Request $request){
        $data = $request->data;
        $book = book::where('id',$data['id'])->first();
        $book->delete();
    }
}
