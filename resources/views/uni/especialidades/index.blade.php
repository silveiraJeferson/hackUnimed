@extends('uni.perfil.beneficiario')
@section('lista')
<div class="row">
    <form action="/especialidades">
        <div class="col s12">
            <div class="row">
                <div class="input-field col s8">
                    <i class="material-icons prefix">search</i>

                    <input type="text" name="param" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Busca Especialidade</label>

                </div>
                <button type="submit" class="waves-effect waves-light btn-large s2 #ff9800 orange">Buscar</button>
                
                
                
            </div>
        </div>
    </form>
</div>



    @forelse($especialidades as $especialidade)
    <div class="col s3"> 
        <a href="/especialidades/{{$especialidade->id}}" class="black-text" >{{$especialidade->nome}}</a>
    </div>


    @empty
    nada
    @endforelse








@endsection