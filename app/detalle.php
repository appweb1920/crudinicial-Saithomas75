<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalle extends Model
{
    use SoftDeletes;
    protected $table = 'detalle';
    protected $fillable = ['pr_id', 'r_id'];
}
