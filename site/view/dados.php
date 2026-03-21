<?php
require 'sua_conexao.php';

// gere novamente $dados e $totais igual ao principal

echo json_encode([
    "total" => count($listaAlunos),
    "dados" => $dados,
    "totais" => $totais
]);