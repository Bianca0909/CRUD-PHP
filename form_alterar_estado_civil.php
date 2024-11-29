<?php

require_once 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT id, nome FROM estado_civil WHERE id = $1";
$resultado = pg_query_params($conexao, $sql, array($id));
if (!$resultado) {
    die("Erro ao buscar registro");
}

$linha = pg_fetch_assoc($resultado);
if (!$linha) {
    die("Registro não encontrado");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Estado Civil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Alterar Estado Civil</h1>
<form method="post" action="alterar_estado_civil.php">
    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" />
    Nome: <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" required />
    <br>
    <input type="submit" value="Salvar Alterações" />
</form>
</body>
</html>

<?php

pg_close($conexao);
?>
