<?php
require_once 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE pessoa SET nome = $1, email = $2 WHERE id = $3";
$resultado = pg_query_params($conexao, $sql, array($nome, $email, $id));
if (!$resultado) {
    die("Erro ao atualizar registro");
}

echo "Registro atualizado com sucesso! <a href='index.html'>Voltar</a>";



