<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grupo;
use App\Models\Modulo;
use App\Models\Profesor;

class Leccion extends Model
{
    use HasFactory;
    use HasFactory;
     protected $fillable=['idgrupo',
                        'idmodulo',
                        'idprofesor',
                        'horas',
                        ];
                        
    protected $table='leccion';
    
    
    public function grupo() {
        return $this->belongsTo (Grupo::class,'idgrupo');
    }
    public function modulo() {
        return $this->belongsTo(Modulo::class,'idmodulo');
    }
    public function profesor() {
        return $this->belongsTo(Profesor::class,'idprofesor');
    }
}
