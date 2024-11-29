<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Pessoas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post" action="inserir.php">
            
            Nome: <input type="text" name="nome"/>
            <br>
            E-mail: <input type="email" name="email"/>
            <br>
            Estado Civil: <select name="estado_civil_id">
                
                
       <?php
require_once './conexao.php';
$sql = "select id, nome from estado_civil";
$resultado = pg_query($conexao, $sql);
if ($resultado) {
      while ($linha = pg_fetch_assoc($resultado)) {
        echo " <option value={$linha['id']}>{$linha['nome']}</option>";               
    }
}
     
          ?>
</select>
            <input type="submit" value="Cadastrar"/>
            
        </form>
<a href='index.html'>Voltar</a>




    </body>
</html>
