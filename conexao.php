<?php

$conexao = pg_connect("host=localhost dbname=p2 user=postgres password=ifsc");
if (!$conexao) {
    die("Erro ao conectar ao banco de dados");
}
