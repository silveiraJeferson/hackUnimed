<?php
$cor_principal = '#4a148c purple darken-4';
$cor_btn = '#ff9800 orange';
?>

<!DOCTYPE html>


<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <?php echo $__env->make('uni.css.uni', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <title>UniHacka</title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <header>
            <?php echo $__env->make('uni.partes.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </header>


        
            
        
        
        <main>
            <!-- Page Layout here -->
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <footer>
            <?php echo $__env->make('uni.partes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </footer>





















        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <?php echo $__env->make('uni.scripts.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </body>
</html>