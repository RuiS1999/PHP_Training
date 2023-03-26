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
            $x = 0;
            $y = 10;
            $a = 8;
            $b = 4;
        ?>
        <br>
        <?php
            $x += 4;
            echo $x;
        ?>
        <br>
        <?php
            $y += $x;
            echo $y;
        ?>
        <br>
        <?php
            $x++;
            echo $a;
        ?>
        <br>
        <?php
            $b--;
            echo $b;
        ?>
        <br>
    </body>
</html>
