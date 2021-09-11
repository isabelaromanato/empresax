<?php
function lerArquivo(string $nomeArquivo) {

    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

function buscarFuncionario($funcionarios, $nome) {

    $funcionariosFiltro= [];

    foreach ($funcionarios as $funcionario) {
        if ($funcionario->first_name == $nome) {
            $funcionariosFiltro[] = $funcionario;
        }
    }
    return $funcionariosFiltro;
}

function addNovoUsuario (array $user) {
    $db = json_decode(file_get_contents('empresaX.json'), true);
    $db = $user;
    file_put_contents('empresaX.json', json_encode($db));
}