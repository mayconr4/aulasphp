<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
</head>
<body>
    <h1>Trabalhando com objetos genéricos</h1>
    <hr>

<?php
// Criando uma instancia de uma classe genérica chamada stdClass (Stander Class)
$usuario = new stdClass(); //instancia ou objeto
?>


    <h2>Analisando a estrtura do objeto</h2>
    <pre><?=var_dump($usuario)?>></pre>    
</body>
</html>