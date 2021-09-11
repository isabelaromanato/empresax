
<?php 

require("./funcoes.php");

$funcionarios = lerArquivo("empresaX.json");

 echo count($funcionarios);

if (isset($_GET["buscarFuncionario"])) {
    $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"]);
}


?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Empresa X</title>
</head>
<body>
<form>
    <input type="text"  name="buscarFuncionario" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : "" ?>" placeholder="Buscar Funcionario">
    <button>Buscar</button>
</form>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Endereço IP</th>
        <th>País</th>
        <th>Departamento</th>
    </tr>

    <?php

foreach ($funcionarios as $fucionario) :
?>
    <tr>
        <td><?= $fucionario->id ?></td>
        <td><?= $fucionario->first_name ?></td>
        <td><?= $fucionario->last_name ?></td>
        <td><?= $fucionario->email ?></td>
        <td><?= $fucionario->gender ?></td>
        <td><?= $fucionario->ip_address ?></td>
        <td><?= $fucionario->country ?></td>
        <td><?= $fucionario->department ?></td>
    </tr>
<?php

endforeach;
?>
</table>

    
</body>
</html>




