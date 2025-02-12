<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP - </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>  
        <h1>exercicio - 05</h1>
//<?php
//$noticeUm = 5 ;
//$noticeDois = 4 ;
//$noticeTres = 3;  
//$mediaAluno = ($noticeUm + $noticeDois + $noticeTres) /3 ; 
//if ($mediaAluno < 7) {
//?>
    <p>Reprovado</p>
//<?php
//} else { 
//?> 
    <p>Aprovado</p> 
//<?php    
//}
//?>  

<?php
function calculoMedia($notaUm ,$notaDois,$notaTres){ 

    return ($notaUm + $notaDois + $notaTres) /3;

}
?>  
 
 <P>media = <?=calculoMedia(3, 6, 3)?></P> 

<?php 

//echo verificarSituacao($mediaAluno)
function verificarSituacao(int $media ) {
   if ( $media <7 ) {
        echo "<p class= 'badge text-bg-danger'>Reprovado</p>";
   } else {
        echo "<p class= 'badge text-bg-primary'>Aprovado</p>";
   }
   
};
?>   
    <p>Voce foi <?=verificarSituacao(7)?></p> 

    <p></p>

    








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>