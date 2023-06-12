<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locales extends Model
{
    use HasFactory;
    protected $fillable=['direccion','universidad','precio','descripcion','telefono','correo'];//autrizacion de la base de datos
    protected $table='_locales';
}
