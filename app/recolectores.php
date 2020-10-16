<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class recolectores extends Model
{
    use SoftDeletes;
    protected $table = 'recolectores';
    protected $fillable = ['nombre', 'dia'];
}
