@extends('uni.layout.master')
@section('content')

<div class="container">
    <form action="/colaborador/busca">
        <div class="row">
            <h5 class="col s3">Cooperados </h5>
            <input class="col s6" placeholder="Nome do Cooperado" value="{{@$_GET['param']}}" type="text" name="param"/>
            <input class="btn" type="submit" value="Buscar"/>
        </div>
    </form>
    <div class="row">
        @forelse($cooperados as $cooperado)
        <div class="col s4">
            <a href="/colaborador/show/{{$cooperado->id}}">
                {{$cooperado->nome}}
            </a>
        </div>
        @empty

        @endforelse
    </div>

</div>


@endsection