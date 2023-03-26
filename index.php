<!-- php -S localhost:8000をコマンドに入力 -->
<!-- http://localhost:8000/にアクセス -->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    </head>
    <title>文字列の出力</title>
    <body>
        <?php
            for ($x = 1; $x < 10; $x++) {
                for ($y = 1; $y <10; $y++) {
                    echo $x*$y.' ';
                }
                echo "<br/>\n";
            }
        ?>
        <br>
        <?php
        ?>
        <br>
        <?php
        ?>
    </body>
</html>
