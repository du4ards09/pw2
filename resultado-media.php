<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$n1, initial-scale=1.0">
    <title>achou?</title>
</head>
<body>
    <?php
        $n1 = $_POST['txNota1'];
        $n2 = $_POST['txNota2'];
        $n3 = $_POST['txNota3'];
        $n4 = $_POST['txNota4'];

        $media = ($n1 + $n2 + $n3 + $n4)/4;

        echo "$media";

        if($media >6){
            echo "Aprovado";
        }
        else{
            echo "Reprovado";
        }
    ?>
</body>
</html>