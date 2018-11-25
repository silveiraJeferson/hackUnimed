<?php $__env->startSection('lista'); ?>
<div class="row">
    <form action="/especialidades">
        <div class="col s12">
            <div class="row">
                <div class="input-field col s8">
                    <i class="material-icons prefix">search</i>

                    <input type="text" name="param" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Busca Especialidade</label>

                </div>
                <button type="submit" class="waves-effect waves-light btn-large s2 #ff9800 orange">Buscar</button>
                
                
                
            </div>
        </div>
    </form>
</div>



    <?php $__empty_1 = true; foreach($especialidades as $especialidade): $__empty_1 = false; ?>
    <div class="col s3"> 
        <a href="/especialidades/<?php echo e($especialidade->id); ?>" class="black-text" ><?php echo e($especialidade->nome); ?></a>
    </div>


    <?php endforeach; if ($__empty_1): ?>
    nada
    <?php endif; ?>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('uni.perfil.beneficiario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>