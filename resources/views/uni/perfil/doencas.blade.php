@extends('uni.perfil.beneficiario')
@section('lista')

<img src="{{url('/imagem/arquivo/pessoa.jpg')}}" alt="" height="100px;">

<ul class="collapsible container">
    <li>
        <div class="collapsible-header"><i class="material-icons">group_add</i>Cadastrar Dependente</div>
        <div class="collapsible-body">
            <span>
                <input type="text" placeholder="Nome">
                <input type="text" placeholder="Idade">
                <input type="text" placeholder="Grau Parentesco">

            </span>
        </div>
    </li>
    <li>
        <div class="collapsible-header"><i class="material-icons">check</i>Selecionar Doenças</div>
        <div class="collapsible-body">
            <span>
                <form action="#" class="row">

                    @forelse($doencas as $doenca)


                    <label class="col s6">
                        <input type="checkbox" />
                        <span>{{$doenca->nome}}</span>
                    </label>


                    @empty

                    @endforelse
                    <div class="col s12">
                        <input type="submit" class="btn" value="Registrar">
                    </div>

                </form>
            </span>
        </div>
    </li>
    <li>
        <div class="collapsible-header"><i class="material-icons">history</i>Meu Histórico</div>
        <div class="collapsible-body">
            <span>
                A) HEMOGRAMA. ...<br/>
                1- Hemácias (glóbulos vermelhos) ...<br/>
                2- Leucócitos (glóbulos brancos) ...<br/>
                3- Plaquetas. ...<br/>
                B) Tempo de tromboplastina ativada (PTT ou TTP) e tempo de protrombina (TAP ou TP) ...<br/>
                C) COLESTEROL. ...<br/>
                D) UREIA e CREATININA. ...<br/>
                E) GLICOSE.<br/>
                
            </span>
        </div>
    </li>
</ul>


@endsection