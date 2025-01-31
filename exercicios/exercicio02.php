<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>

    <style>
        .container {
            display: flex;
            justify-content: space-evenly;
            width: 1000px;
            width: 100%;
            color: white;

        }

        .box1 {
            background-color: cornflowerblue;
            border-radius: 6px;
        }

        .box2 {
            background-color: cornflowerblue;
            border-radius: 6px;
        }

        .lista1 {
            padding: 4px;
            margin-left: 20px; 
            line-height: 25px;
        }

        .lista2 {
            padding: 4px;
            margin-left: 20px; 
            line-height: 25px;
        } 
        .artigo{
            text-align: center;
        }
    </style>

</head>

<body>


    <?php
    //pessoa 1
    $pessoaUm = ["lebron James", "lebron@gmail.com", "goat1234", 43, "masculino", "Los angeles"];

    //pessoa 2 
    $pessoaDois = ["Rayssa leal", "leal@gmail.com", "skate1234", 16, "feminino", "Rio de Janeiro"]; 

    // $pessoaUm = [
    //     "nome" => "james_01",
    //     "email" => "lebron@gmail.com",
    //     "senha" => "goat1234", 
    //     "sexo" => "masculino",
    //     "cidade" => "Los angeles"


    // ]; 

    // $pessoaDois
    ?>

    <article >

        <h1>Exercicio 2</h1>
        <hr>

        <div class="container">
            <section class="box1">
              <h2>dados pessoa um</h2>
                <ul class="lista1">
                    <li>nome: <?= $pessoaUm["nome"] ?></li>
                    <li>email: <?= $pessoaUm["email"] ?></li>
                    <li>idade: <?= $pessoaUm[] ?></li>
                    <li>sexo: <?= $pessoaUm["sexo"] ?></li>
                </ul>
            </section>

            <section class="box2">
                <h2>dados pessoa dois</h2>
                <ul class="lista2">
                    <li>nome: <?= $pessoaDois[0] ?></li>
                    <li>email: <?= $pessoaDois[1] ?></li>
                    <li>idade: <?= $pessoaDois[3] ?></li>
                    <li>sexo: <?= $pessoaDois[4] ?></li>
                </ul>
            </section>
        </div>



    </article>

</body>

</html>