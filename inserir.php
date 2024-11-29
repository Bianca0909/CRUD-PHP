<?php

require_once './conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$estado_civil_id = $_POST['estado_civil_id'];

$sql = "insert into pessoa (nome, email, estado_civil_id) values ($1, $2, $3)";

$resultado = pg_query_params($conexao,$sql, array($nome, $email, $estado_civil_id));

if (!$resultado) {
    die("Erro ao inserir registro");
}

echo "Registro inserido com sucesso! <a href='index.html'>Voltar</a>";



