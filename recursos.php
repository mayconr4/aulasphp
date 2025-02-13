<?php
define("ESCOLA", "Senac");
$curso = "Téc. Informática para Interenet";
$tecnologias = ["HTML", "CSS", "JS"];

function verificarIdade(int $valorDaIdade):string{
    return $valorDaIdade >= 18 ? "maior" : "menor";
};