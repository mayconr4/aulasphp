<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - condicionais VERSÃO 2</title>

    <style>
        .comprar{color: red;}

        .urgente{   
            background-color: yellow;
            color: red;
        }

        .normal{  color: darkgreen; }                    

    </style>
</head>
<body>
    <h1>VERSÃO 2 Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>
   
<?php
$numero = 5;  
if($numero > 1){
?>
   <p><?=$numero?> é maior que 1</p>
<?php
}   
?> 
    <h2>Composta usando <code>if/else</code></h2> 
    <hr>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 10; // o que temos
$qtdCritica = 5; // minimo necessário
?> 

    <h3><?=$produto?></h3>
    <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

<?php
if ($qtdEmEstoque < $qtdCritica) {
?>
    <p class="comprar">É necessario comprar!</p>

<?php
    // Condicional ANINHADA     
    if($qtdEmEstoque === 0){
?>        
    <p class="urgente"><strong>👹URGENTE👹</strong></p>
<?php        
    }  

} else {         
?>          
    <p class="normal">Estoque normal</p> 
<?php
} 
?>


    <hr>
    <h2>Encadeada usando <code>if/elseif/else</code></h2>
    <!-- Verificar a idade de uma pessoa e determinaar se ela é uma criança, adolescente, adulta ou idosa. -->

<?php
$idade = 38;
if ($idade <= 12) {
    $texto = "Criança 😈";
} elseif($idade <= 17) {
    $texto = "Adolescente ☠️";
} elseif($idade <= 59) {
    $texto = "Adulto 💩"; 
} else {
    $texto = "Idoso 👨‍🦳";
}
?> 
<p><?=$texto?></p>

</body>
</html>