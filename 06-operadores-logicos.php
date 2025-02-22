<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - operadores</title>
</head>
<body>
    <h1>Relembrando Operadores lógicos</h1>

    <h2>&& (E/AND)</h2>
    <p><i>Todas as condições precisam ser <b>Verdadeiras/True</b></i></p> 
<?php
// avaliar um aluno mediantes a media e faltas
$media = 9.5;
$faltas = 10;

if ($media >= 7 && $faltas <= 10 ) { 
?>
    <p>Aprovado!</p>
<?php
} else {
?>
    <p>reporvado!</p>
<?php
}  
?>
    <!-- O SIMBOLO É CHAMADO DE PIPE -->
    <h2>|| (OU/OR)</h2>
    <p><i>Basta que apenas uma condição seja <b>VERDADEIRA/TRUE</b></i></p>  
<?php
// dar um desconto a um cliente que seja vip ou que tenha cupom
$clienteVip = true; // valor/tipo lógico/boolean 
$temCupom = false;

if ($clienteVip || $temCupom) { 
?>
     <p>Desconto aplicado</p>
<?php
} else {
?>  
    <p>Sem desconto</p>
<?php
}

?>

    <h2>! (NÃO/NOT)</h2> 
    <p><i>è um inversão de lógica: VERDADEIRO  vira <b>FALSO</b>, FALSO  vira <b>VERDADEIRO</b></i></p>
<?php
// SE o usuario não estiver logado, exibir p link/botão de login.
//caso contrário, exibir uma saudação.
$usuarioLogado = false;

if (!$usuarioLogado) { 
?>
    <a href="login.php">Login</a>
<?php
} else {
?>  
    <span>Bem-vindo ao sistema!</span>
<?php
}       
?> 

<hr>
<h2>Usando os 3 operadores combinados par uma lógica mais elaborada</h2>
<?php
// para entrar numa festa é necessario atender os seguintes criterios:
//- idade mínima de 18 anos
//- Ous estar acompanhado dos pais
//- e não estar bebado 

$idadeMinima = 20;
$acompanhadoDosPais = true;
$estaBebado = true;

if (($idadeMinima >= 18 || $acompanhadoDosPais) && !$estaBebado) { 
?>
    <p>Entrada permitida</p> 
<?php
} else {
?>     
    <p>Entrada negada</p>
<?php
}

?>
</body>
</html>