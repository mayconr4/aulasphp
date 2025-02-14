<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php
    $pagina = basename($_SERVER["PHP_SELF"]);
    switch ($pagina) {
        case 'index.php':
            $titulo = "'Pagina inicial";
            break;
        case 'cursos.php':
            $titulo = "Treinamentos";
            break;
        case 'duvidas.php':
            $titulo = "Duvidas";
            break;
        default:
            $titulo = "Contato";
            break;
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $titulo ?> -Site com PHP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <header>
            <h1>Site com PHP</h1>

            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cursos.php">Treinamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="duvidas.php">duvidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">contato</a>
                    </li>

                </ul>
            </nav>
            <hr>
        </header>
        <main>