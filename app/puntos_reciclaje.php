<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class puntos_reciclaje extends Model
{
    use SoftDeletes;
    protected $table = 'puntos_reciclaje';
    protected $fillable = ['tipo_basura', 'apertura', 'cierre'];
}
