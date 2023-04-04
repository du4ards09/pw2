<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua média</title>
</head>
<body>
    <h1>Digite suas Notas :</h1>
    <form action="resultado-media.php" method="post">
        <div>
            <input type="text" placeholder="Nota 1" name="txNota1"  />
        </div>
        <div>
            <input type="text" placeholder="Nota 2" name="txNota2"  />
        </div> 
        <div>
            <input type="text" placeholder="Nota 3" name="txNota3"  />
        </div>  
        <div>
        <input type="text" placeholder="Nota 4" name="txNota4"  />
        </div>
            

            <input type="submit" value="Calcular" />
    </form> 
</body>
</html>