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
    <title>Tugas 1</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            display: inline-block;
            border: 3px solid black; 
        }
        
        .salmon{
            background-color: salmon;
        }

        .lb{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    
    <?php for( $i = 1; $i <= 6; $i++ ) :
        for( $x = 1; $x <= 6; $x++ ) :


            if( $i % 2 == !0 ) :
                if( $x % 2 == !0 ) : ?>
                    <div class="kotak salmon"></div>
                <?php else : ?>
                    <div class="kotak lb"></div>
                <?php endif; ?>

                <?php else :
                if( $x % 2 == !0) : ?>
                    <div class="kotak lb"></div>
                <?php else : ?>
                    <div class="kotak salmon"></div>
                <?php endif; ?>
            <?php endif; ?>


        <?php endfor; ?>
            <br>
    <?php endfor; ?>
    
</body>
</html>