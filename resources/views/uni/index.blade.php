@extends('uni.layout.master')
@section('content')

<div class="parallax-container inicio">

    <div class="white-text titulo_inicio">
        <h3 class="center-align text-center">Experiências que importam <br/>para quem sabe cuidar</h3>
    </div>


    <form action="/sintomas/buscar">
        <div class="row center">
            <div class="col s8 branco"><input type="text" placeholder="Como está se sentindo?" name="param"/></div>
            <div class="col s4 verde green  "><a href="/sintomas/buscar" class="white-text "><i class="material-icons white-text btn_center">search</i>Buscar</a></div>
        </div>
    </form>

    <div class="white-text">
        <h6 class="center-align"> Encontre médicos, clínicas e serviços de saúde que fizeram a diferença na vida <br/>
            de quem mais importa para as operadoras: seus clientes.</h6>
    </div>
</div>
@endsection