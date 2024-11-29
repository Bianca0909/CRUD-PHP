<?php
require_once './conexao.php';


$sql = "select pessoa.id, pessoa.nome, pessoa.email, estado_civil.nome as nome_estado_civil "
        . "from pessoa join estado_civil "
        . "on estado_civil.id = pessoa.estado_civil_id";

$resultado = pg_query($conexao, $sql);

if ($resultado) {

    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Email</th><th>Estado Civil</th><th>X</th><th>U</th></tr>";

    while ($linha = pg_fetch_assoc($resultado)) {
        echo "<tr>
            <td>{$linha['nome']}</td>
            <td>{$linha['email']}</td>
            <td>{$linha['nome_estado_civil']}</td>
            <td><a href='excluir.php?id={$linha['id']}'>X</a></td>
            <td><a href='form_alterar.php?id={$linha['id']}'>U</a></td>
          </tr>";
    }

    echo "</table>";
} else {

    echo "Erro ao executar a consulta.";
}

if (!$resultado) {
    die("Erro ao atualizar registro");
}

echo "<a href='index.html'>Voltar</a>";







