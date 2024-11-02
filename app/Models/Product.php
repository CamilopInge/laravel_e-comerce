<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Si la tabla no sigue la convención de nombres, especifica el nombre de la tabla
    // protected $table = 'nombre_de_tu_tabla';

    // Si no usas el campo de timestamps, descoméntalo
    // public $timestamps = false;

    // Especifica los campos que pueden ser llenados masivamente (opcional)
    protected $fillable = ['name', 'price', 'stock', 'category', 'image']; // Agrega 'image' aquí
}
