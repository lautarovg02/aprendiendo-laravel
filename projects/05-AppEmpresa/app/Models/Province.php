<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    // Especifica el nombre de la tabla  
    protected $table = 'province'; // Cambiado a singular  

    // Especifica los campos que son asignables en masa  
    protected $fillable = ['name'];  
}
