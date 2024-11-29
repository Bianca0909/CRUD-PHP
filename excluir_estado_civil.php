<?php

require_once 'conexao.php';


    $id = $_GET['id'];

    $sql = "DELETE FROM estado_civil WHERE id = $1";
    $resultado = pg_query_params($conexao, $sql, array($id));

    if (!$resultado) {
        die("Erro ao atualizar registro");
    }

    echo "Registro excluído com sucesso! <a href='index.html'>Voltar</a>";




