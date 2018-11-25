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
            <span>Lorem ipsum dolor sit amet.</span>
        </div>
    </li>
    <li>
        <div class="collapsible-header"><i class="material-icons">history</i>Meu Histórico</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
</ul>


@endsection