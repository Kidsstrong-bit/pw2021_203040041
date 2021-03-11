<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php
    function tumpukanBola($tumpukan){
        for( $i = 1; $i <= $tumpukan; $i++){
            echo "<br>";
            for( $x = 1; $x <= $i; $x++){
                echo "<div class='bola'>$i</div>";
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 C</title>
    <style>
        .bola{
            background-color: salmon;
            width: 35px;
            height: 35px;
            margin: 0 5px 10px 0;
            display: inline-block;
            line-height: 35px;
            text-align: center;
            border: 2px solid black;
            border-radius: 100%;
        }
    </style>
</head>
<body>
 <?= tumpukanBola(5) ?>   
</body>
</html>