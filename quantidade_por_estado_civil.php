<?php
require_once './conexao.php';


$sql = " select estado_civil.nome, count(pessoa.id) as quantidade from
    pessoa join estado_civil 
	   on estado_civil.id = pessoa.estado_civil_id
	      group by estado_civil.nome 
		     having count(pessoa.id) >= 2
		    order by estado_civil.nome";

$resultado = pg_query($conexao, $sql);

if ($resultado) {

    echo "<table border='1'>";
    echo "<tr><th>Estado Civil</th><th>Quantidade</th></tr>";

    while ($linha = pg_fetch_assoc($resultado)) {
        echo "<tr>
            <td>{$linha['nome']}</td>
            <td>{$linha['quantidade']}</td>
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







