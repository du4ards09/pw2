<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Salário</title>
</head>
<body>
    <div class="wrapper fadeInDown">
    <div class="content-login">
      <h2 class="active">Digite suas Informações:</h2>

        <form class="box-login" method="post" action="resultado-salario.php">
            <input type="text" id="nome" class="campo" name="txtNome" placeholder="Seu Nome:">
            <input type="text" id="s" class="campo" name="txtSalario" placeholder="Seu Sálario:">
            <input type="text" id="total" class="campo" name="txtTotal" placeholder="Total de Vendas:">
            <input type="submit" class="botao" value="Calcular Sálario">
      </form>
    </div><!--Form Content-->
    </div><!--wrapper-->
</body>
</html>