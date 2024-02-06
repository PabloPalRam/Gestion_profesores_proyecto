<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formacion;
use App\Models\Leccion;

class Modulo extends Model
{
    use HasFactory;
    protected $fillable=['idformacion',
                        'denominacion',
                        'siglas',
                        'curso',
                        'horas',
                        'especialidad'
                        ];
                        
    protected $table='modulo';
    
    
    public function formacion() {
        return $this->belongsTo (Formacion::class,'idformacion');
    }
    public function lecciones() {
        return $this->hasMany(Leccion::class,'idmodulo');
    }
}
