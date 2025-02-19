<?php
// Definindo o cabeçalho para o tipo de resposta JSON
header('Content-Type: application/json');

// Banco de dados simulado (um array associativo em PHP)
$livros = [
    "harry_potter" => [
        "titulo" => "Harry Potter e a Pedra Filosofal",
        "autor" => "J.K. Rowling",
        "ano_publicacao" => 1997
    ],
    "senhor_dos_aneis" => [
        "titulo" => "O Senhor dos Anéis: A Sociedade do Anel",
        "autor" => "J.R.R. Tolkien",
        "ano_publicacao" => 1954
    ]
];

// Pega o título do livro que vem como parâmetro na URL (por exemplo, ?titulo=harry_potter)
$titulo = isset($_GET['titulo']) ? strtolower($_GET['titulo']) : '';

// Verifica se o título foi fornecido e se existe no banco de dados
if ($titulo && isset($livros[$titulo])) {
    // Retorna as informações do livro como JSON
    echo json_encode($livros[$titulo]);
} else {
    // Caso o livro não seja encontrado
    echo json_encode(["erro" => "Livro não encontrado"]);
}
?>
