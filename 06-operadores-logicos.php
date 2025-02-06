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
    echo "<p>Aprovado!</p>";
} else {
    echo "<p>reporvado!</p>";
}


?>
    <!-- O SIMBOLO É CHAMADO DE PIPE -->
    <h2>|| (OU/OR)</h2> 

    <h2>! (NÃO/NOT)</h2> 

</body>
</html>