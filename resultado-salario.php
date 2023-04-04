<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>
</head>
<body>
    <?php

     $nome = $_POST['txtNome'];
     $s = $_POST['txtSalario'];
     $total = $_POST['txtTotal'];


     $valorTotal = $s + ($total * 0.15);
     echo "$nome seu total recebibo será de R$:" . $valorTotal;
    
    ?>
</body>
</html>