@extends('uni.layout.master')
@section('content')
<div class="container">
    <div class="row center-align">


        







        <div class="card col s6 form_log_left">
            <div class="card-content black-text">
                <span class="card-title">Quero me cadastrar</span>
                <div class="row">
                    <form method="post" action="/beneficiario"class="col s12">

                        <div class="input-field">
                            <input id="name" type="text" name="nome"class="validate">
                            <label for="nome">Nome</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="idade" type="text" name="idade"  value="30"class="validate">
                                <label for="idade">Idade</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="cpf" type="text" name="cpf"  value="123123123-12"class="validate">
                                <label for="cpf">CPF</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <input id="cartao" type="text" name="cartao" value="8445.1223.1252.1454" class="validate">
                            <label for="cartao">Nº Cartão</label>
                        </div>
                        <div class="input-field">
                            <input id="cidade" type="text" name="cidade" class="validate">
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="input-field">
                            <input id="email" type="text" name="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        {!! csrf_field() !!}
                        <a href="/beneficiario" class="waves-effect waves-light btn #ff9800 orange">Cadastrar</a><br/>

                    </form>
                </div>








            </div>


        </div>


        <div class="card col s6 ">
            <div class="card-content black-text">
                <span class="card-title">Já sou cadastrado</span>

                <div class="row">
                    <form class="col s12">

                        <div class="row">
                            <div class="input-field col s12">
                                <input  type="text" class="validate">
                                <label for="disabled">CPF</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <a href="/beneficiario" class="waves-effect waves-light btn #ff9800 orange">Entrar</a><br/>
                        <a href="/beneficiario">Esqueci minha senha</a>

                    </form>
                </div>







            </div>

        </div>
    </div>
</div>




@endsection