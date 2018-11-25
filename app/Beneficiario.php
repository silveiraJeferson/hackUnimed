<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $fillable = ['nome', 'idade', 'cpf','cartao', 'cidade','email'];
}
