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

<?php
$j = 1;
do {
?> 
    <div>
        <h3 style="color: cornflowerblue;">Senac....</h3>
        <p style="color: royalblue">maycon...</p>
    </div>
<?php 
    $j++;
} while($j <= 5);
?> 

    <hr>
    <h2>FOR (PARA)</h2>
    <p>Executa ações por uma <b>quantidade determinada</b> de vezes.</p>
    
<?php
for( $i = 1; $i <= 10; $i++ ){
?>
    <p><code>i</code> vale: <b> <?=$i?> </b></p>
<?php
}
?> 

    <hr>
    <h2>Mini-exrcicio</h2>
    <p>Crie um array contendo os 12 meses do ano e usando dos loops que vimos , mostre os nomes dos meses em uma lista ordenada</p> 
    <hr>

<?php
$meses = array(
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);
 
for($e = 0; $e <12 ; $e++){ //quando for exibir os dados do array em uma       estrtura de lopp lembrar de colocar o contador para exibir o array
?> 
  <?=$meses[$e]?> 
<?php
}
?>

</body>
</html>