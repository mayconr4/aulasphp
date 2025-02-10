<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exrcicio - 04</title>       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
    <style> 

    table { width: 50%; border-collapse:collapse; }        

    table, td  { border: 1px solid black;}             
     
    th, td  {padding: 5px; text-align:left;}  

    th {background-color:cornflowerblue ;} 

    .container{
        max-width: 600px;
    }

    </style>

    
     
</head>
<body>
    <h1 class="text-center">EXERCICIO - 04 </h1>
<?php
$linguagems = [
    "HTML" => "Estruturação",
    "CSS"  => "Estilos",
    "JS"   => "Comportamentos",
    "PHP"  => "Back-end",
    "SQL"  => "Manipulação de dados",
    "JAVA" => "Softwares" 
];      
?>  
<table class="col-6 mx-auto table table-info table-striped table-hover  container" > 
<tbody > 
<tr> 
    <th>ID</th>
    <th>linguagem</th>
    <th>Descrição</th>        
        
<?php 
$id = 1;
foreach ($linguagems as $linguagem => $descricao) {
?>                   
        <tr> 
            <td><?=$id++;?></td>
            <td><?=$linguagem?></td> 
            <td><?=$descricao?></td>
        </tr>       
<?php  
}
?> 
</tr>
</tbody>
</table> 

<hr> 
<h2 class="text-center">exemplo de outro array </h2> 
<p class="text-center">array mais estruturado parecido com as Estruturação do banco de dados.</p>
<?php
$linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
    [
        "id" => 6,
        "nome" => "Java",
        "descricao" => "Softwares"
    ],
]; 
?>

<table class="col-6 mx-auto table table-primary table-striped container"> 
<tbody > 
<tr> 
    <th>ID</th>
    <th>linguagem</th>
    <th>Descrição</th> 
<?php 
foreach ($linguagens as $linguagem) {
?>                  
        <tr> 
            <td><?=$linguagem["id"]?></td>
            <td><?=$linguagem["nome"]?></td> 
            <td><?=$linguagem["descricao"]?></td>
        </tr>       
 <?php    
} 
?> 
</tr>
</tbody>
</table> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
    
</body>
</html>