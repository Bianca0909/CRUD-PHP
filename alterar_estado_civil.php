<?php
require_once 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];

$sql = "UPDATE estado_civil SET nome = $1 WHERE id = $2";
$resultado = pg_query_params($conexao, $sql, array($nome, $id));
if (!$resultado) {
    die("Erro ao atualizar registro");
}

echo "Registro atualizado com sucesso! <a href='index.html'>Voltar</a>";



