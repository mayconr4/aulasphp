<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>  
    <div class="container">
        <h1 class=" text-center">Trabalhando com funções</h1>
        <hr> 


        <h2>Função como procedimento (ou sub-rotina)</h2>
        <p><i>Procedimentos <b>não retornam</b> nada.</i></p>
<?php
function exibirDadosDoAutor(){
    echo "<h4>kyrie irving</h4>";
    echo "<p><time>".date("d/m/Y")."</time></p>";
}        
?> 

    <h3>Chamada de procedimento</h3> 
    <?php
    $valor = 500;
    if ($valor > 1000) {
        exibirDadosDoAutor();
    }
    ?>
    <div> <?=exibirDadosDoAutor();?> </div> 

    <h3>Outras chamdas</h3>
    <div><?=exibirDadosDoAutor()?></div>
    <ul>
        <li><?=exibirDadosDoAutor()?></li>
        <li><b><?=exibirDadosDoAutor()?></b></li>
    </ul>

    <hr> 

    <h2>Função com parametros (ou argumentos)</h2> 
<?php
function somar($valorUm, $valorDois){ 
    /*variavel de escopo local 
    este tipo de variavel existe somente dentro da função em que foi declarada.*/
  //$total =  $valorUm + $valorDois;

  /*Retornamos o resultado ou seja , "mandamos para fora" da função o resultado do que ela fez. */ 
  //return $total; 

  // podemos também aplicar o return direto na expressão (sem uso de variavel local)
  return $valorUm + $valorDois;
}
?>  

    <h3>Chamadas / retornos da função somar</h3> 
    <p>Resultado: 1 =<?=somar(10, 5)?> </p>
    <p>Resultado: 2 = <?=somar(23, 107)?> </p>

<?php
// chamanado a função e guardando o resultado numa variavel global
$resultadoTres = somar(1250, 788.85);    
?>  
    <p>Resultado: 3 = <?=$resultadoTres?></p> 

<?php if($resultadoTres > 2000){ ?>
    <p class=" alert alert-success">O resultado 3 é maior que 2000</p>

<?php } else { ?>
    <p class=" alert alert-danger">Resultado 3 não é maior que 2000</p>
<?php } ?> 
 

    <!-- usando uma funçao como parte de uma condição:
     Primeiro, a fuunção é chamada (e aí ela calcula e retorna),
     Depois o resultado que ela retornou é comparado com a condição --> 
<?php if( somar(10, 50) < 500){ ?>
    <p class=" alert alert-danger">João pedro reprovado.....</p> 
<?php } ?>       
    
    <h3>Função com parametros opcionais</h3> 
<?php 
/*Parametros opcionais possuem algum tipo de atribuição com um valor
alterbativo para o caso de não serem passados na camada da função
. obs.: sempre devem estar por ultimo na relação de prãmetros da função. */
function exibirSaudacao($mensagem, $pessoa = ""){
    return "Olá, $mensagem $pessoa";
}
?>
     <p>Mensagem 1: <?=exibirSaudacao("bom dia ", "João Pedro")?> </p> 
     <p>Mensagem 1: <?=exibirSaudacao("boa tarde ")?> </p>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>