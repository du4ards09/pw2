<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da tabuada</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section style=" display:table; width:50%;  border-radius: 10px; ">
        <?php
            $codigo = $_POST['txtCodigo'];
            $qtde = $_POST['txtQtde'];


            switch($codigo) {
                case '1':
                    echo "Cachorro Quente";
                    break;
                case '2':
                    echo "X-Salada";
                    break;
                case '3':
                    echo " X-Bacon";
                    break;
                case '4':
                    echo "Torrada Simples";
                    break;
                case '5':
                    echo "Refrigerante";
                    break;
                default:
                    echo "Código Inválido!!!!";
                
            }

            $pagamento = ($qtde*$codigo);
            
            echo "<br> Total da compra R$:" . $pagamento;
        
        ?>
        </selection>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </body>
</html>

