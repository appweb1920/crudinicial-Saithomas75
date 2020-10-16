<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\detalle;
use App\recolectores;
use Illuminate\Support\Facades\DB;

class puntos_reciclaje extends Model
{
    use SoftDeletes;
    protected $table = 'puntos_reciclaje';
    protected $fillable = ['tipo_basura', 'apertura', 'cierre'];

    public function getRecolector(){
        $recolector = DB::select("SELECT recolectores.nombre FROM recolectores
        INNER JOIN detalle ON detalle.r_id = recolectores.id_r
        INNER JOIN puntos_reciclaje ON detalle.pr_id = puntos_reciclaje.id_pr
        WHERE puntos_reciclaje.id_pr=".$this->id_pr);
        return $recolector;
    }
}
