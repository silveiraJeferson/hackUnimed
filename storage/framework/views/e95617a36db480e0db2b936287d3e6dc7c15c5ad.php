<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col s2">
        
        <?php if(session()->get('logado')): ?>
        <div class="card-image center-align">
            
            
        
        <!-- Grey navigation panel -->

        <div class="collection">
            
            <a href="/perfil/beneficiario" class="collection-item  active">Página Inicial</a>
            <a href="/perfil/doencas" class="collection-item ">Perfil</a>
            <a href="/perfil/dependente" class="collection-item ">Dependentes</a>
            <a href="#!" class="collection-item">Histórico</a>
            <a href="/perfil/especialidades" class="collection-item">Especialidades</a>
        </div>
        
        </div>
        <?php else: ?>
        <div class="card">
            Cadastre-se
        </div>
        <?php endif; ?>

    </div>

    <div class="col s2">

    </div>


    <div class="col s10">
        <?php echo $__env->yieldContent('lista'); ?>


    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('uni.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>