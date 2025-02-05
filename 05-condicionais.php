<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - condicionais</title>

    <style>
        .comprar{color: red;}

        .urgente{   
            background-color: yellow;
            color: red;
        }

        .normal{        
            color: darkgreen;
        }

    </style>
</head>
<body>
    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>
   
<?php
$numero = 5;


if($numero > 1){
    echo "<p>$numero é maior que 1</p>";
} 

// sintaxe omitindo as chaves
if($numero > 1) echo "<p>$numero é maior que 1</p>";
?>

    <h2>Composta</h2> 
    <hr>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 10; // o que temos
$qtdCritica = 5; // minimo necessário

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

if ($qtdEmEstoque < $qtdCritica) {
    echo "<p class='comprar'>É necessario comprar!</p>"; 

    // Condicional ANINHADA
    if($qtdEmEstoque === 0){
        echo "<p class='urgente'><strong>👹URGENTE👹</strong></p>";
    }

} else {
    echo "<p class='normal'>Estoque normal</p>";
}

?>

    <h2>Encadeada</h2>

</body>
</html>