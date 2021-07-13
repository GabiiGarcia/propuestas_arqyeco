<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuestas extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
    	'nombre_p',
    	'autor',
    	'descripcion_p'
	];
}

