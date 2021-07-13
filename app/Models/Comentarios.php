<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
    	'nombre_c',
    	'apellidos_c',
    	'email_c',
    	'mensaje_c'
    ];
}
