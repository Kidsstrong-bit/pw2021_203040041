    <!-- 
        NAMA : GILANG RAMADHAN
        NRP : 203040041
        SHIFT JUMAT 10:00 - 11:00 
     -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 B</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <tr>
    <td></td>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <th> Kolom <?= $i; ?></th>
        <?php endfor; ?>

    </tr>
    <?php
    for( $i = 1; $i <=5; $i++) : ?>
        <tr>
            <th>Baris <?= $i; ?></th>
       <?php for( $b = 1; $b <=5; $b++) : ?>
            <td><?= "Baris $i, Kolom $b"; ?></td>
    
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
    
</body>
</html>