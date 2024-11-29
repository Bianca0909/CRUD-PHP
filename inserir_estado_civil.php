<?php

require_once './conexao.php';

$nome = $_POST['nome'];

$sql = "insert into estado_civil (nome) values ($1)";

$resultado = pg_query_params($conexao,$sql, array($nome));

if (!$resultado) {
    die("Erro ao inserir registro");
}

echo "Registro inserido com sucesso! <a href='index.html'>Voltar</a>";



