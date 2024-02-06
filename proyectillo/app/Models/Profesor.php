<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Leccion;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable=['userseneca','nombre','apellido1','apellido2','especialidad'];
    protected $table='profesor';
    
    
    public function lecciones() {
        return $this->hasMany (Leccion::class,'idprofesor');
    }

}
