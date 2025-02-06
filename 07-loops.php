<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - loops</title>
</head>
<body>
    <h1>Trabalhando com comandos de repetição</h1>
    <hr>

    <h2>WHILE (ENQUANTO)</h2>
    <p>Executa ações <b>enquanto a condição for verdadeira</b>. Se a condiçãoinicialmente não é verdadeiro, o loop não funciona nenhuma vez.</p> 

<?php
$i = 1;
while ($i <= 5){
?>
    <p><?=$i." noia"?></p>
<?php
    $i++;
}
?>
    <h2>DO/WHILE (parecido com Repita)</h2>
    <p>Rpete  <b>pelo menos uma vez</b> as ações e, caso a condição continue
verdadeira, segue fazendo outros ciclos de repetição até a condição se tornae falsa.</p>

    <h2>FOR (PARA)</h2>
    <p>Executa ações por uma <b>quantidade determinada</b> de vezes.</p>    
</body>
</html>