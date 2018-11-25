<?php $__env->startSection('content'); ?>

<div class="parallax-container inicio">

    <div class="white-text">
        <h4 class="center-align">Experiências que importam para quem sabe cuidar.</h4>
    </div>


    <form action="/sintomas/buscar">
        <div class="row center">
            <div class="col s8 branco"><input type="text" placeholder="Como está se sentindo?" name="param"/></div>
            <div class="col s4 verde green  "><a href="/sintomas/buscar" class="black-text "><i class="material-icons black-text btn_center">search</i>Buscar</a></div>
        </div>
    </form>

    <div class="white-text">
        <h6 class="center-align"> Encontre médicos, clínicas e serviços de saúde que fizeram a diferença na vida de quem mais importa para a UNIMED: seus clientes.</h6>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('uni.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>