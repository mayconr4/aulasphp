<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP - Objetos</title>
</head>
<body>
    <h1 class="text-center">Trabalhando com objetos genéricos</h1>
    <hr>

<?php
// Criando uma instancia de uma classe genérica chamada stdClass (Stander Class)
$usuario = new stdClass(); //instancia ou objeto 

// adicionando propriedades/atributos ao objeto
$usuario ->nome = "Chapolin colorado";
$usuario ->idade = 25;
$usuario ->email = "chapolin@gmail.com";
$usuario->telefones = ["11 97504-0149", "11 90000-9999"]; 

echo $usuario->nome;

// pode ser usado {} ao redor do objeto/propriedade na interploração
echo "<p><mark>$usuario->nome</mark></p>"; //interploração
?>


    <h2>Analisando a estrtura do objeto</h2>
    <pre><?=var_dump($usuario)?>></pre>    
    <hr>

    <h2>saida de dados</h2>
    <p>Nome: <?=$usuario->nome?></p>
    <p>idade: <?=$usuario->idade?> anos</p>
    <p>celular: <?=$usuario->telefones[1] ?></p>

    <hr>

    <h2>convertendo  (fazendo um casting) um objeto em um array associativo</h2>

<?php $arrayUsuario = (array) $usuario; ?>

    <h3>Analisando o array gerado a partir de um objeto</h3>
    <pre><?=var_dump($arrayUsuario)?></pre> 

    <h2>Convertendo (fazendo um casting) array associativo em objeto</h2>

<?php
// array associativo com duas chaves (nome e sobrenome)
$aluno = ["nome" => "Fulano", "sobrenome" => "dos Santos"];

$objAluno = (object) $aluno;
?>
    <h3>Analisando o objeto gerado a partir de um array</h3>
    <pre><?=var_dump($objAluno)?></pre> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>