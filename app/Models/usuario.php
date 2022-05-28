<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'usuario',
        'nombre',
        'apellidos',
        'tipide',
        'f_nac',
        'passw'
    ];

   

}
