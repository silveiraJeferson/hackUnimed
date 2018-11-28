<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cooperado;
use App\Especialidade;

class ColaboradorController extends Controller
{
    public function getLista(){
        $cooperados = Cooperado::all();
        
        return view('uni.cooperados.lista_medicos', compact('cooperados'));
    }
    
    
    public function getBusca(Request $request) {
        $cooperados = Cooperado::where('nome', 'ilike','%'.$request->param.'%')->get();
        
        return view('uni.cooperados.lista_medicos', compact('cooperados'));
    }
    
    public function getShow($param) {
        $cooperado = Cooperado::where('id', $param)->get();
        $especialidade = Especialidade::where('id', $cooperado[0]->especialidade)->get();
        $cooperado->especialidade = $especialidade;
        return view('uni.cooperados.perfil_cooperado',  compact('cooperado'));
    }
    public function getPerfil() {
        
    }
}
