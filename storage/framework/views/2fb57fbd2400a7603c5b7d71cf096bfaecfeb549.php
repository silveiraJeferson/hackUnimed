<?php $__env->startSection('lista'); ?>

<ul class="collection">
    <li class="collection-item avatar">
        <img src="<?php echo e(url('/imagem/arquivo/pessoa.jpg')); ?>" alt="" class="circle">
        <span class="title">Fulano de Tal</span><br/>
        
        <a href="#" class="btn white black-text">Histórico de consultas</a>
        <a href="#" class="btn white black-text">Histórico de doenças</a>
        <a href="#" class="btn white black-text">Histórico de exames</a>
            
    </li>
    <li class="collection-item avatar">
        <img src="<?php echo e(url('/imagem/arquivo/mulher.jpg')); ?>" alt="" class="circle">
        <span class="title">Esposa de Tal</span><br/>
        
        <a href="#" class="btn white black-text">Histórico de consultas</a>
        <a href="#" class="btn white black-text">Histórico de doenças</a>
        <a href="#" class="btn white black-text">Histórico de exames</a>
            
    </li>
    <li class="collection-item avatar">
        <img src="<?php echo e(url('/imagem/arquivo/crianca1.jpg')); ?>" alt="" class="circle">
        <span class="title">Filho 1 de Tal</span><br/>
        
        <a href="#" class="btn white black-text">Histórico de consultas</a>
        <a href="#" class="btn white black-text">Histórico de doenças</a>
        <a href="#" class="btn white black-text">Histórico de exames</a>
        
    </li>
    <li class="collection-item avatar">
        <img src="<?php echo e(url('/imagem/arquivo/crianca2.jpg')); ?>" alt="" class="circle">
        <span class="title">Filho 2 de Tal</span><br/>
        
        <a href="#" class="btn-small white black-text">Histórico de consultas</a>
        <a href="#" class="btn white black-text">Histórico de doenças</a>
        <a href="#" class="btn white black-text">Histórico de exames</a>
        
    </li>
    <li class="collection-item avatar">
        <img src="<?php echo e(url('/imagem/arquivo/mae.jpg')); ?>" alt="" class="circle">
        <span class="title">Title</span>
        <span class="title">Filho 3 de Tal</span><br/>
        
        <a href="#" class="btn white black-text">Histórico de consultas</a>
        <a href="#" class="btn white black-text">Histórico de doenças</a>
        <a href="#" class="btn white black-text">Histórico de exames</a>
        
    </li>
</ul>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('uni.perfil.beneficiario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>