<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modulo;
use App\Models\Grupo;

class Formacion extends Model
{
    use HasFactory;
    protected $fillable=['denominacion','siglas'];
    protected $table='formacion';
    
    
    public function modulos() {
        return $this->hasMany (Modulo::class,'idformacion');
    }
    public function grupos() {
        return $this->hasMany (Grupo::class,'idformacion');
    }
}
