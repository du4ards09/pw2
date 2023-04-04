<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vetor</title>
    </head>
    <body>
        <?php
            
            //declarar um vetor
            $vetorA = Array();
            $vetorB = Array();
            $vetorC = Array();           
            
            //atribuir um valor a uma posição do vetor
            $vetorA[0] = 2;
            $vetorA[1] = 1;
            $vetorA[2] = 9;
            $vetorA[3] = 7;
            $vetorA[4] = 6;
            
            $vetorB[5] = 4;
            $vetorB[6] = 9;
            $vetorB[7] = 9;
            $vetorB[8] = 8;
            $vetorB[9] = 2;
            
            //exibir o vetor c
            $total = count($vetorA + $vetorB);
            echo "Total de elementos do vetor C: $total";
            $vetorC = $vetorA + $vetorB;
        
            echo "<br> <br> O vetor C é:" ;
            for($i=0; $i<count($vetorA+$vetorB);$i++){
                echo "<p> $vetorC[$i] </p>";
            }
        ?>
    </body>
</html>

