<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperado extends Model
{
    public $fillable = ['id', 'nome', 'especialidade', 'score'];
}
