<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responde extends Model
{
    use HasFactory;
    public function respuestas(){
    return $this->hasMany(Respuesta::class);
}
protected $guarded = [];

}
