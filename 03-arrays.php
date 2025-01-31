<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>

<body>
    <h1>Trabalhando com arrays</h1>
    <hr>

    <h2>Arrays numéricos/indexados</h2>

<?php  
 // Sintaxe com colchetes
    $bandas = ["Savatage", "Rush", "Slayer", "Pink Floyd"];

    //sintaxe com a função array()
    $cursos = array("HYML5", "Node.js", "PHP", "SQL");

    //sintaxe de atribuição manual usando os indices
    $comidas[0] = "Bolinho de Bacalhau";
    $comidas[1] = "Pastel";
    $comidas[2] = "Coxinha";

    //constantes de array
    define("UNIDADES", ["Penha", "Tatuapé"]);
    const FRUTAS = ["Morango", "Abacaxi"];   

?>      

    <h3>Acessando os dados</h3>
    <ul>
        <li>Banda que mais curto: <?= $bandas[1] ?></li>
        <li>EM breve vou lançar um curso de <?= $cursos[2] ?></li>
        <li>Quero comer <?= $comidas[2] ?></li>
        <li>Estamos no Senac <?= UNIDADES[0] ?></li>
        <li>Vou fazer uma caipirinha de <?= FRUTAS[1] ?></li>
    </ul>

    <h3>Arrays associativos</h3>
<?php
$curso = [
    //chave associativa: indentificação => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 200,
    "descricao" => "Aprender a esquentar água e fazer ovo cuzido..."

];
?> 

    <h3>Acessando os dados</h3>
    <p>Nome do curso: <?=$curso["titulo"]?></p>
    <p>Carga horaria: <?=$curso["carga_horaria"]?></p>
    <p>Descrição: <?=$curso["descricao"]?></p> 

<?php
define("EMPRESA", //array sociativo com define 
    [
      "nome" => "biribinha informatica",
        "ano_fundacao" => 2021
    ]
);

echo EMPRESA["nome"];

echo "<br></br>";

const OUTRA_EMPRESA = ["nome" => "ABC TI", "ano_fundação" => 2022];
echo  OUTRA_EMPRESA["nome"];

?> 

<h2>Matriz (array dentro de array)</h2>
<?php
$planoDeEstudos = [
    ["JS Avamçado", "Node.js", "Next.js"],
    ["PHP", "Orientção a Objetos"],
    ["Teoria de cores", "Photoshop", "UX/UI", "Motion Design"]
];
?>
   
    <h3>Acessando os dados</h3> 
    <p>Vou estudar nos proximos meses: <!--o [] é usado para navegar entre as posições dos arrays exemplo abaixo  -->
        <?=$planoDeEstudos[0][2]?>, <?=$planoDeEstudos[1][0]?> e 
        <?=$planoDeEstudos[2][3]?>         
    </p>
    
    <hr>

    <h2>Funções de amlise/depuração/debug de estrutura de dados</h2>

    <h3><code>print_r()</code></h3>
    <pre> <?=print_r($bandas)?> </pre>
    

    <h3><code>var_dump()</code></h3> 
    <pre> <?=var_dump($bandas)?> </pre> <!-- var_dump ve a tipagens dos elementos o print_r -->
    <pre> <?=var_dump($curso)?> </pre>
     
</body>

</html>
