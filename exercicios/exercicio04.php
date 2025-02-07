<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exrcicio - 04</title> 
     
    <style> 

    table { width: 50%; border-collapse:collapse; }        

    table, td  { border: 1px solid black;}             
     
    th, td  {padding: 5px; text-align:left;}  

    th {background-color:cornflowerblue ;}

    </style>

    
     
</head>
<body>
    <h1>EXERCICIO - 04 </h1>
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
<table border="1"> 
<tbody> 
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
<h2>exemplo de outro array </h2> 
<p>array mais estruturado parecido com as Estruturação do banco de dados.</p>
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

<table border="1"> 
<tbody> 
<tr> 
    <th>ID</th>
    <th>linguagem</th>
    <th>Descrição</th> 
<?php 
foreach ($linguagems as $linguagem ) {
?>                  
        <tr> 
            <td><?=//$linguagem["id"]?></td>
            <td><?=$linguagem["nome"]?></td> 
            <td><?=$linguagem["descricao"]?></td>
        </tr>       
 <?php    
} 
?> 
</tr>
</tbody>
</table> 



    
</body>
</html>