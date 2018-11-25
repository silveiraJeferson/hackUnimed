<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doenca extends Model
{
    public $fillable = ['id', 'nome','id_especialidade','id_sintoma'];
}
