    <!-- 
        NAMA : GILANG RAMADHAN
        NRP : 203040041
        SHIFT JUMAT 10:00  - 11:00
     -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 C</title>
    <style>
        .bulat{
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
    <?php for ( $i=1; $i<=3; $i++ ) : ?>
        <?php for ( $g = 1; $g <= $i; $g++ ) : ?>
            <div class="bulat"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>