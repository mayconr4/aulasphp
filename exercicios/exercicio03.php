<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exrcicio-03</title>
</head>
<body>
    <h1>Exrcicio-03</h1> 


<?php
$valorDaCompra = 8000;  

if ($valorDaCompra > 5000) {
   $desconto = 0.15 ;
} elseif ($valorDaCompra > 3000 ) {
  $desconto = 0.10;
} elseif ($valorDaCompra > 1000) {
    $desconto = 0.5; 
} else  {
    $desconto = 0;
}

 $valorFinal = $valorDaCompra - $valorDaCompra * $desconto; 
 //$valorFinal = $valorDaCompra - $desconto;   

?>  

<p>Valor da compra (sem desconto): R$ 
    <?= number_format($valorDaCompra, 2, ",", ".")?>

</p>

<p>O valor da compra (com desconto): R$
    <?=number_format($valorFinal, 2, ",", ".")?>
</p> 

<p>Foi dado um desconto de :
    <?=$desconto * 100?>% 
    (<?=$valorDaCompra - $valorFinal?>)
</p>
    
</body>
</html>