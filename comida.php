<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Comida</title>
</head>
    <body>
        <table class="table table-striped" >
            <tbody style=" border-radius: 5px;">
                <?php
                    echo "<tr>";
                        echo "<th >Código</th>";
                        echo "<th >Especificaçao</th>";
                        echo "<th >Preço</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<th >1</th>";
                        echo "<th >Cachorro Quente</th>";
                        echo "<th >R$ 4,00</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<th >2</th>";
                        echo "<th >X-Salada</th>";
                        echo "<th >R$ 4,50</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<th >3</th>";
                        echo "<th >X-Bacon</th>";
                        echo "<th >R$ 5,00</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<th >4</th>";
                        echo "<th >Torrada Simples</th>";
                        echo "<th >R$ 2,00</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<th >5</th>";
                        echo "<th >Refrigerante</th>";
                        echo "<th >R$ 1,50</th>";
                    echo "</tr>";

                ?> 
            </tbody> 
        </table>
        <br><br>
        <form class="formulario" action="resultado-comida.php" method="post">
            <div class="formulario">
            <label for="exampleFormControlInput1" class="texto">Digite o Código:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="txtCodigo" placeholder="Ex:1">
            </div>
            <div class="formulario">
            <label for="exampleFormControlInput1" class="texto">Digite a Quantidade que Deseja:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="txtQtde" placeholder="Ex:2">
            </div>
            <br>
            <input type="submit"  class="submit" value="Calcular o Valor">
        </form>  
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
