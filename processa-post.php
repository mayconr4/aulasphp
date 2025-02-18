<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Processamneto POST </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h1>Processamento usando POST</h1>
        <hr>

    
     

  <?php if ( empty($_POST["nome"]) || empty($_POST["email"]) ) { ?> 
    <p class=" alert alert-danger">por favor prencha os campos de <b>NOME</b> e <b>EMAIL</b></p> 

    <?php     
   }else {   
   // Capturando os dados transmistidos
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $mensagem = $_POST["mensagem"];
    
    // capturando os options 

    //solução 1: aplicar um ternario checando se existe algum interesse
    //$interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : []; 

    // Solução 2 : usando operador de coalescência nula ?? 
    /* Se houver interesses, os armezene. Caso contrário, guarde um array vazio.*/  
   ?>
    <?php
    $interesses = $_POST["interesses"] ??  []; 

    // capturando o radio
    $informativos = $_POST["informativo"] ?? []; 
    ?>
    <!-- Exibindo: -->
    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?= $nome ?></li>
        <li>E-mail <?= $email ?></li>
        <li>Idade: <?= $idade ?> anos</li>  
        <?php if(  !empty($interesses) ) {?>
        
        <li>Receber informativos: <?=$informativos?></li>
        <?php } ?>
    
        <!-- Usamos o empty com inversão de lógica (operador ! de navegação). 
         Portanto, se NÃO ESTÁ vazio, mostre os interesses. -->
<?php if(  !empty($interesses) ) {?>
        <li>Interesses (usando <code>implode()</code>)
            <!-- TRanfrmando o array em string -->
            <?=implode(", ", $interesses)?>
        </li>

        <li> Interesses- usando <code>foreach()</code>
            <ul>
                <?php foreach ($interesses as $interesse) { ?>
                    <li><?=$interesse?></li> 
                <?php  } ?>

            </ul>
        </li>  
        
        <?php } ?>  

   <li>Mensagem: <?= $mensagem ?></li>  
        
   </ul>
<?php 
 }  
?>

</div>
       



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>