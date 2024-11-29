<?php
require_once './conexao.php';


$sql = "select id, nome from estado_civil";

$resultado = pg_query($conexao, $sql);

if ($resultado) {

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>X</th><th>U</th></tr>";

    while ($linha = pg_fetch_assoc($resultado)) {
        echo "<tr>
            <td>{$linha['id']}</td>
            <td>{$linha['nome']}</td>
            <td><a href='excluir_estado_civil.php?id={$linha['id']}'>X</a></td>
            <td><a href='form_alterar_estado_civil.php?id={$linha['id']}'>U</a></td>
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







