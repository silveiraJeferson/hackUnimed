<?php

namespace App\Http\Controllers;
use App\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class PerfilController extends Controller
{
    public function getBeneficiario(){
        return view('uni.perfil.beneficiario');
    }
    public function getEspecialidades(){
        $especialidades = Especialidade::all();
        return view('uni.especialidades.index',  compact('especialidades'));
    }
    public function getSair(){
        session()->flush();
        return redirect('/');
    }
    public function getDependente(){
        return view('uni.perfil.lista_dependentes');
    }
    
    public function getDoencas(){
        return view('uni.perfil.doencas');
    }
    
    
    
}
