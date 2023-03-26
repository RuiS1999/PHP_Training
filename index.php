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
            //条件否定文を用いる際は
            // if (!(条件分)) {}
            $sum = 1*9;
            if (!($sum > 10 )) {
                echo '10未満';
            }
        ?>
        <br>
        <?php
        ?>
        <br>
    </body>
</html>
