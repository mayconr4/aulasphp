<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP - </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>  
    <div class="container">
        <h1>Usando funções nativas</h1>
        <hr>

    <h2>Strings</h2>
    <h3><code>trim()</code></h3> 
    <p>Remove espaços antes e depois de strings</p>
<?php
$texto = "  Paulo Henrique está me devendo paçocas    ";
$textoSemEspaco = trim($texto);
?>
<pre><?=var_dump($texto)?></pre> 
<pre><?=var_dump($textoSemEspaco)?></pre> 

    <hr>

    <h3><code>str_replace()</code></h3>
    <p>Permite subistituir partes de uma string.</p> 
<?php
$fraseFeia = "Esse Paulo é um bobão e xarope";
$fraseBunitinha = str_replace( 
    ["bobão", "xarope"],
    ["🤬💩", "🫷🫸"], 
    $fraseFeia
);
?> 
        <pre><?=var_dump($fraseFeia)?></pre>
        <pre><?=var_dump($fraseBunitinha)?></pre>


    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>