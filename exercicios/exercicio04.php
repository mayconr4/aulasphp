<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exrcicio - 04</title> 
     
    <style> 

  table {
            width: 50%;
            border-collapse: collapse;
        }
        table, td { border: 1px solid black;}
           
        
        th, td {
            padding: 5px;
            text-align: left;
        }        

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

<table> 
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
            <td><?=$id?></td>
            <td><?=$linguagem?></td> 
            <td><?=$descricao?></td>
        </tr>
    

<?php 
$id++;
}
?> 
</tr>
</tbody>
</table>    
    
</body>
</html>