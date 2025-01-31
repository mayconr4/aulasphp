<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - manipular dados na memória</title>
</head>

<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>

    <?php
    //VARIÁVEIS
    $curso = "Téc. em Iformática para internet"; //string
    $ano = 2025; // inteiro
    $preco = 25000.25; // real (float, decimal)

    echo "<h2>Saida de dados usando echo na sintaxe COMPLETA</h2>";

    //usando concatenação
    echo "<p>Estamos no curso <b>" . $curso . "</b> no ano letivo de " . $ano . "</p>";
    echo '<p>Estamos no curso ' . $curso . ' no ano letivo de ' . $ano . '</p>';

    // Interploração (  OBTIGATÓRIO ASPAS DUPLAS)
    echo "<p>Estamos no curso $curso no ano letivo de $ano</p>";

    // Com aspas simples, interploração NÃO FUNCIONA (vira texto )
    echo '<p>Estamos no curso $curso no ano letivo de $ano</p>';
    ?>

    <hr>

    <h2>Saida de dados usando echo na sintaxe ABREVIADA/CURTA</h2>
    <p>Estamos no curso <b class="cor"><?= $curso ?> </b> no ano letivo de <?= $ano ?></p>

    <hr>

    <?php
    //constantes (recomenda-se nomeá-las usando MAIUSCULAS)

    //sintaxe 1 (mais antigas): usando a função define()
    define("MEU_NOME", "Maycon Henrique Silva Santos");

    // Sintaxe 2 (mais moderna): usando a palavra-chave const
    const UNIDADE = "Penha";
    ?>

    <h2>saida de dados constantes</h2>
    <p>Me chamo <?= MEU_NOME ?> e estou no senac <?= UNIDADE ?> </p>

    <h2>Sintaxe heredoc e nowdoc</h2>
    <p><i>úteis para strings de multiplas linhas</i></p>

    <?php
    //Exemplo usando heredoc
    $nome = "Fulano da silva";

    // obs : NÃO DEVE TER NEHUM ESPAÇO ANTES OU DEPOIS DO HEREDOC
    $textoHeredoc = <<<TEXTO
    <ul>
        <li>Nome: $nome</li>
        <li style="color:red">Texto com CSS</li>
    </ul> 
TEXTO;
// exemplo Nowdoc
// (somente para string/texto... não interpretava variáveis)
$comida = "Lasanha";

$textoNowdoc = <<<'TEXTO'
    Olá Bem vindo(a) ao PHP.
    Estamos tstando a sintaxe <b>nowdoc</b>.
    Eu adoro $comida.
TEXTO;

    ?>
    <div>
        <h3>Saída com heredoc</h3>
        <?= $textoHeredoc ?>
    </div>

    <div>
        <h3>Saída com nowdoc</h3>
         <?=$textoNowdoc?> 
    </div>


</body>

</html>