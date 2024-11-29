<?php

require_once 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT id, nome, email FROM pessoa WHERE id = $1";
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
    <title>Alterar Pessoa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Alterar Pessoa</h1>
<form method="post" action="alterar.php">
    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" />
    Nome: <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" required />
    <br>
    E-mail: <input type="email" name="email" value="<?php echo $linha['email']; ?>" required />
    <br>
    <input type="submit" value="Salvar Alterações" />
</form>
</body>
</html>

<?php

pg_close($conexao);
?>
