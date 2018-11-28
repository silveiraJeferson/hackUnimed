<style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
/*        flex: 1 0 auto;*/
    }
    .form_log_left{
        border-right: 1px solid #ccc;
    }
    .especialidades_card{

        margin: 5px;
    }

    .estrelas input[type=radio] {
        display: none;
    }
    .estrelas label i.fa:before {
        content:'\f005';
        color: #FC0;
    }
    .estrelas input[type=radio]:checked ~ label i.fa:before {
        color: #CCC;
    }
    .center {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        font-size: 18px;
    }
    .form_inicio{
        background: white;
        padding: 5px;
        width: 50%;
        border-radius: 2;
    }
    .inicio{
        background-image: url('/imagem/arquivo/fundo_degrade.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center; 

    }

    .center{
        position:relative;
        width:400px;
        height:50px;
        background:white;
        left:10px;
        top:200px;
        border-radius: 5px;
        border: 1px solid #222;
    }
    .verde{

        height:48px;
        float: left;
    }
    .btn_center{
        font:12px;
        vertical-align: middle;        
    }
    .titulo_inicio{
        position:relative;
        width: 600px;
        left:470px;
        top:70px;
        
    }

</style>
