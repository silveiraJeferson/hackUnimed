<?php $__env->startSection('lista'); ?>

<h5><?php echo e(($return->especialidade[0]->nome)); ?></h5>


<div class="collection">   

    <div class="row">
        <?php $__empty_1 = true; foreach($return->cooperados as $cooperado): $__empty_1 = false; ?>
        <div class="col s4 card">
            <a class="collection-item modal-trigger" href="#modal1"><?php echo e($cooperado->nome); ?></a>
<!--            <a href="#!" class="collection-item"></a>-->
            <div class="progress">
                <div class="determinate tooltipped  #fff176 yellow lighten-2"  data-position="top" data-tooltip="Avaliação <?php echo e($cooperado->score); ?>%"style="width: <?php echo e($cooperado->score); ?>%"></div>
            </div>

        </div>
        <?php endforeach; if ($__empty_1): ?>
        nada
        <?php endif; ?>
    </div>

</div>




<?php $__env->stopSection(); ?>

<div id="modal1" class="modal">
    <div class="modal-content center-align">
        <img src="<?php echo e(url('/imagem/arquivo/modal.png')); ?>" alt="" height="350px" >
    </div>
<!--    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>-->
</div>
<?php echo $__env->make('uni.perfil.beneficiario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>