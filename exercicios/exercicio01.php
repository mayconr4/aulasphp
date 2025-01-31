<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 1 </title>

    <style>
        .cor {
            color: cornflowerblue;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>

</head>

<body>

    <h1>Exercicio 1 </h1>
    <hr>

    <?php 
    // definindo o timezone (fuso horario)
    date_default_timezone_set("America/Sao_Paulo");


    //$data = "30/01/2025";
    $curso = "python";
    $data = date("d/m/Y");
    $hora = date("H:i"); 
    echo $data. "-". $hora;


    const NOME = "maycon";
    $cargaHoraria = 60;

    $limiteFaltas = $cargaHoraria / 4;       

    ?>
    <p>oi <?= NOME ?> você quer saber o limite de faltas do seu <b class="cor">curso</b> </p>

    <script>
        const saida = document.querySelector(".cor");

        saida.addEventListener("click", function() {
            alert(" <?php echo "no dia de $data no  curso de $curso que tem a ch de $cargaHoraria horas,  o limite de faltas é $limiteFaltas "; ?> ");
        });
    </script> 

    <hr>

    <?php
    // diferenças entre constantes/define e variavel
    $exemplo = 10;
    echo $exemplo;

    echo "<br></br>";

    $exemplo = 150;
    echo $exemplo;  

    echo "<br></br>";

    // CONSTANTE
    const EXEMPLO = 10;
    echo EXEMPLO;

    //EXEMPLO = 200;  DA ERRO POIS CONSTANTES não podem ser modificadas
    //echo EXEMPLO;
    ?>


</body>

</html>