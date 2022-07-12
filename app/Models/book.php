<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $table = 'books';

	protected $fillable = [
		'autor',
        'titulo',
        'edicion',
        'datos_publicacion',
        'tipo_contenido',
        'restricciones',
        'materia',
        'proveedor'
	];
}
