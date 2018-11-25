<?php

namespace App\Http\Controllers;
use App\Sintoma;
use App\Doenca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class SintomaController extends Controller
{
    public function getBuscar(){
        $return = new \stdClass();
        $return->sintomas = DB::table('sintomas')->where('nome', 'ilike','%dor%')->get();
        
        $return->doenca = DB::table('doencas')->where('id_sintoma', $return->sintomas[0]->id)->get();
        $return->especialidade = DB::table('especialidades')->where('id', $return->doenca[0]->id_especialidade)->get();
        return view('uni.sintomas.resultado', compact('return'));
    }
}
