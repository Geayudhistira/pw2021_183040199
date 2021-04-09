
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .warna-baris{
            background-color: coral;
        }
    
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
      <?php 
        for($i = 1; $i <= 3; $i++){
            echo"<tr>";
                for($a = 1; $a <= 5; $a++){
                    echo "<td>$i,$a </td>";
                }
            echo"</tr>";
        }
      ?>
    </table>
    <br>
    <!-- cara kedua -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <=5; $i++) : ?>
            <?php if($i  % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                    <tr>
            <?php endif ; ?>
                    <?php for($a = 1; $a <= 5; $a++) : ?>
                        <td><?= "$i , $a"; ?></td>
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>

</body>
</html>