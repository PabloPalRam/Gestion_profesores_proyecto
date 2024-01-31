<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formacion;

class Grupo extends Model
{
    use HasFactory;
     protected $fillable=['cursoescolar',
                        'idformacion',
                        'curso',
                        'denominacion',
                        'turno',
                        ];
                        
    protected $table='grupo';
    
    
    public function formacion() {
        return $this->belongsTo (Formacion::class,'idformacion');
    }
    public function lecciones() {
        return $this->hasMany(Grupo::class,'idgrupo');
    }
}
