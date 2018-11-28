@extends('uni.layout.master')
@section('content')
<div class="container row">
    <div class="col s6 card">
        <h5>Especialidade: {{($cooperado->especialidade[0]->nome)}}</h5>
        <img src="{{url('/imagem/arquivo/medico.jpg')}}" alt="" height="200px;">
        <h5>Dr. {{($cooperado[0]->nome)}}</h5>
    </div>
    <div class="col s6 ">
        <h5>Avalie seu atendimento:</h5>

        <h6>No Agendamento</h6>
        <div class="row">
            <div class="col s8">
                Disponibilidade de Horário:
            </div>
            <div class="col s4">
                @include('uni.estrelinhas')
            </div>
        </div>

        <h6>Antes do atendimento</h6>
        <div class="row">
            <div class="col s8">
                Tempo de espera para a consulta 
            </div>
            <div class="col s4">
                @include('uni.estrelinhas')
            </div>
            <div class="col s8">
                Ambiente do consultório 
            </div>
            <div class="col s4">
                @include('uni.estrelinhas')
            </div>
            <div class="col s8">
                Atendimento da secretária
            </div>
            <div class="col s4">
                @include('uni.estrelinhas')
            </div>
        </div>

        <h6>Durante o atendimento</h6>
        <div class="row">
            <div class="col s8">
                Atendeu as expectativas 
            </div>
            <div class="col s4">
                @include('uni.estrelinhas')
            </div>
            <textarea placeholder="Deixe seu comentário"></textarea>
        </div>

        <h6>Elogios do Paciente</h6>
        <p>
            <label>
                <input class="with-gap" name="group3" type="radio" checked />
                <span>Atencioso</span>
            </label>
            <label>
                <input class="with-gap" name="group3" type="radio" checked />
                <span>Simpático</span>
            </label>
            <label>
                <input class="with-gap" name="group3" type="radio" checked />
                <span>Eficiente</span>
            </label>
        </p>
        <h6>Indicação</h6>
        @include('uni.estrelinhas')
        <textarea placeholder="Outros comentérios"></textarea>
        <button class="btn">Registrar</button>

    </div>
</div>



@endsection