<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'name', 'description'
    ];

    public function users()
    {
        //relación muchos a muchos
        return $this->belongsToMany(User::class)->withTimestamps(); //Se actualizan las fechas en la tabla pivote
    }
}
