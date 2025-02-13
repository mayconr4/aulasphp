<?php require "recursos.php"; ?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP - Modularização e inclusão de recursos </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>  
    <div class="container">
        <h1>Modularização e inclusão de recursos</h1>
        <hr> 
    <!-- Acessando a constante -->
        <h2> <?=ESCOLA?> </h2> 
        <!-- Acessando a variavel -->
        <p> Estamos fazendo o curso de <?=$curso?> </p> 
        <ul> 
            <!-- Acessando o array -->
            <?php foreach($tecnologias as $tecnologia) { ?>
                <li><?=$tecnologia?></li>
          <?php  }   ?>
        </ul>  

        <hr> 

        <p> O fulano de tal tem 20 anos e é <?=verificarIdade(20)?>de idade</p> 

        <hr> 

        <article>
            <h2>Titulo qualquer...</h2> 

            <!-- Incluindo fragmento de HTML -->
            <?php include "textos.php"; ?>
        </article>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>