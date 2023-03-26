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
            $sum = 1*10;
            if ($sum <= 10 ) {
                echo '10以下';
            } elseif ($sum >10 && $sum <= 99) {
                echo '11以上99以下';
            } else {
                echo '100以上';
            }
        ?>
        <br>
        <?php
        ?>
        <br>
    </body>
</html>
