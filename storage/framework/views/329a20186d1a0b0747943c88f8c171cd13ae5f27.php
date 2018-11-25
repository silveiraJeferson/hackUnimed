<?php $__env->startSection('content'); ?>
<div class="container">
    <i>Você pesquisou por "DOR" o  que pode ser...</i>
    <h5>Resultados:</h5>
    
    <table>
        <thead>
            <tr>
                <th>Sintomas</th>
                <th>Doenças possíveis</th>
                <th>Especialidade</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo e($return->sintomas[0]->nome); ?></td>
                <td>
                    <?php $__empty_1 = true; foreach($return->doenca as $doenca): $__empty_1 = false; ?>
                    <?php echo e(($doenca->nome)); ?><br/>
                    <?php endforeach; if ($__empty_1): ?>
                    nenhuma cadastrada
                    <?php endif; ?>
                </td>
                <td>
                    <?php $__empty_1 = true; foreach($return->especialidade as $especialidade): $__empty_1 = false; ?>
                    <a href="/especialidades/<?php echo e(($especialidade->id)); ?>"><?php echo e(($especialidade->nome)); ?></a>
                    <br/>
                    <?php endforeach; if ($__empty_1): ?>
                    nenhuma cadastrada
                    <?php endif; ?>
                </td>
            </tr>
            
        </tbody>
    </table>


</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('uni.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>