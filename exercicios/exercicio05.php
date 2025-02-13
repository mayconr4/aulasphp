<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP - </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>  
        <h1 class=" text-center bg-info">exercicio - 05</h1>
/<?php
$noticeUm = 5 ;
$noticeDois = 4 ;
$noticeTres = 3;  
$mediaAluno = ($noticeUm + $noticeDois + $noticeTres) /3 ; 
if ($mediaAluno < 7) {
?>
    <!-- <p>Reprovado</p> -->
<?php
} else { 
?> 
    <!-- <p>Aprovado</p>  -->
/<?php    
}
?>  

<?php
function calcularMedia(float $notaUm ,float $notaDois,float $notaTres){ 

    return ($notaUm + $notaDois + $notaTres) /3;

}
?>  
 
 <!-- <P>media = <//?=//calcularMedia(4, 6, 3)?></P>  -->

<?php 

//echo verificarSituacao($mediaAluno)
function verificarSituacao(float $media ):string {
   if ( $media <7 ) {
        return "<p class= 'badge text-bg-danger'>Reprovado</p>";
   } else {
        return "<p class= 'badge text-bg-primary'>Aprovado</p>";
   }
   
};
?>   
    <!-- <p>Voce foi <//?=//verificarSituacao(7)?></p>   -->
    <hr>

<?php
 $listaDealunos = [   
        [ 
            "nome" => "maycon",
            "nota1" => 5, 
            "nota2" => 4,
            "nota3" => 3

        ], 
        [
            "nome" => "Henrique",
            "nota1" => 3 , 
            "nota2" => 6,
            "nota3" => 2
        ], 
        [
            "nome" => "Silva",
            "nota1" => 7 , 
            "nota2" => 8,
            "nota3" => 9     
        ], 
        [
            "nome" => "Santos",
            "nota1" => 9 , 
            "nota2" => 5,
            "nota3" => 3    
        ], 
        [ 
            "nome" => "Lebron",
            "nota1" => 6 , 
            "nota2" => 1,
            "nota3" => 8   
        ],                                            
    
        ];   
                  
foreach ($listaDealunos as $aluno ) {    
$media = calcularMedia($aluno["nota1"],$aluno["nota2"],$aluno["nota3"]);   
$situacao = verificarSituacao($media);      
?>            
    <ul class=" list-group container">             
    <li  class=" list-group-item list-group-item-primary">aluno(a) <?=$aluno["nome"]?></li> 
    <li  class=" list-group-item">nota <?=$aluno["nota1"]?></li> 
    <li  class=" list-group-item">nota <?=$aluno["nota2"]?></li> 
    <li  class=" list-group-item">nota <?=$aluno["nota3"]?></li> 
    <li class=" list-group-item">Media: <b><?=number_format($media, 2, ",")?></b></li>
    <li class="list-group-item"><?=$situacao?></li>  
    
    </ul>
<?php
}
?>        


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>