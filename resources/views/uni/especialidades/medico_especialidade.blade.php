@extends('uni.perfil.beneficiario')
@section('lista')

<h5>{{($return->especialidade[0]->nome)}}</h5>


<div class="collection">   

    <div class="row">
        @forelse($return->cooperados as $cooperado)
        <div class="col s4 card">
            <a class="collection-item modal-trigger" href="#modal1">{{$cooperado->nome}}</a>
            <!--            <a href="#!" class="collection-item"></a>-->
            <div class="progress">

                <div class="determinate tooltipped  #fff176 yellow lighten-2"  data-position="top" data-tooltip="Avaliação {{$cooperado->score}}%"style="width: {{$cooperado->score}}%"></div>
            </div>
            @include('uni.estrelinhas')

            <a href="#">
                <div class="right blue-text">
                    {{rand(1,9)}} Comentários
                </div>
            </a>
        </div>
        @empty
        nada
        @endforelse
    </div>

</div>




@endsection

<div id="modal1" class="modal">
    <div class="modal-content center-align">
        <img src="{{url('/imagem/arquivo/modal.png')}}" alt="" height="350px" >
    </div>
    <!--    <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>-->
</div>