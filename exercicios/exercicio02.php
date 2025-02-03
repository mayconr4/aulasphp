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

    $pessoaUm = [
        "nome" => "james_01",
        "email" => "lebron@gmail.com",
        "senha" => "goat1234", 
        "sexo" => "masculino", 
        "idade" => 43,
        "cidade" => "Los angeles"

    ];           

    $pessoaDois =[
        "nome"   => "Rayssa leal",
        "email" => "leal@gmail.com",
        "senha" => "skate1234",
        "sexo" => "feminino",
        "idade" =>  16,
        "cidade" => "Rio de janeiro"
    

    ]; 
    
    
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
                    <li>idade: <?= $pessoaUm["idade"] ?></li>
                    <li>sexo: <?= $pessoaUm["sexo"] ?></li>
                </ul>
            </section>

            <section class="box2">
                <h2>dados pessoa dois</h2>
                <ul class="lista2">
                    <li>nome: <?= $pessoaDois["nome"] ?></li>
                    <li>email: <?= $pessoaDois["email"] ?></li>
                    <li>idade: <?= $pessoaDois["idade"] ?></li>
                    <li>sexo: <?= $pessoaDois["sexo"] ?></li>
                </ul>
            </section>
        </div>



    </article>

</body>

</html>