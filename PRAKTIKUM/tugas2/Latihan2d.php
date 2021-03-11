<!--  NAMA : GILANG RAMADHAN
      NRP : 203040041
      SHIFT JUMAT 10:00 - 11:00 
-->
<?php
    function hitungDeterminan($a, $b, $c, $d){
        $rumus = (($a * $d) - ($b * $c));
        $tulisan = "Determinan dari matriks tersebut adalah";

    echo "<table style='border-left:1px solid black; border-right:1px solid black;' cellspacing='5' cellpading='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
            </table>";
    echo "<br>";
    echo "$tulisan $rumus";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 D</title>
</head>
<body>
    <?= hitungDeterminan(1,2,3,4); ?>
</body>
</html>