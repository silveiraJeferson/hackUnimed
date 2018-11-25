@extends('uni.layout.master')
@section('content')

<div class="row">

    <div class="col s2">
        
        @if(session()->get('logado'))
        <div class="card-image center-align">
            
            
        
        <!-- Grey navigation panel -->

        <div class="collection">
            
            <a href="/perfil/beneficiario" class="collection-item  active">Página Inicial</a>
            <a href="/perfil/doencas" class="collection-item ">Perfil</a>
            <a href="/perfil/dependente" class="collection-item ">Dependentes</a>
            <a href="#!" class="collection-item">Histórico</a>
            <a href="/perfil/especialidades" class="collection-item">Especialidades</a>
        </div>
        
        </div>
        @else
        <div class="card">
            Cadastre-se
        </div>
        @endif

    </div>

    <div class="col s2">

    </div>


    <div class="col s10">
        @yield('lista')


    </div>

</div>

@endsection

