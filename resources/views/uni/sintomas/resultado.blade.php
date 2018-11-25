@extends('uni.layout.master')
@section('content')
<div class="container">
    <i>Você pesquisou por "DOR" o  que pode ser...</i>
    <h5>Resultados:</h5>
    
    <table>
        <thead>
            <tr>
                <th>Sintomas</th>
                <th>Doenças possíveis</th>
                <th>Especialidade</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$return->sintomas[0]->nome}}</td>
                <td>
                    @forelse($return->doenca as $doenca)
                    {{($doenca->nome)}}<br/>
                    @empty
                    nenhuma cadastrada
                    @endforelse
                </td>
                <td>
                    @forelse($return->especialidade as $especialidade)
                    <a href="/especialidades/{{($especialidade->id)}}">{{($especialidade->nome)}}</a>
                    <br/>
                    @empty
                    nenhuma cadastrada
                    @endforelse
                </td>
            </tr>
            
        </tbody>
    </table>


</div>



@endsection