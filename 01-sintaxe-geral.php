<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - sintaxe geral</title>
    <style>
        .exemplo {
            color: royalblue;
            border: solid 4px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>


    <?php
       //Geração de strings/textos
       echo "Hoje o Corinthas joga!";

       //Gerção de tags e atributos
       echo "<p>Vai perder de goleada!</p>";

       //asplas duplas fora, aspas simples dentro (CORRETO)
       echo "<p><abbr title='Santos futebol clube'>SFC</abbr></p>"; 
       
       //Aspas simples fora , aspas duplas dentro (CORRETO)
       echo '<p><abbr title="Santos futebol clube">SFC</abbr></p>';

       //aspas duplas/simples dentro e fora (ERRADO)
     //    echo "<p><abbr title="Sport Club Corinthas Paulista">SCCP</abbr></p>"; 
         
       //Aspa usando escape \ (CORRETO)
       echo "<p><abbr title=\"Santos futebol clube\">SFC</abbr></p>";

        echo "<h2>Brincando <span class=\"exemplo\">PHP</span> </h2>"; 

         $saudacao = "Olá!";
    ?>

    <script>
        const exemplo = document.querySelector(".exemplo");

        exemplo.addEventListener("click", function(){
            alert( "<?php echo $saudacao; ?>" );
        });
    </script>

    
</body>
</html>