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
            $radius1 = 3;
            echo $radius1 * $radius1 * 3;
            $radius2 = 5;
            echo $radius2 * $radius2 * 3;
        ?>
        <br>
        <?php
            function printCircleArea($radius) {
                echo $radius * $radius * 3;
            }
            printCircleArea(3);
            printCircleArea(5);
        ?>
        <br>
        <?php
            function hello() {
                echo 'Hello World';
            }
            echo hello();
        ?>
    </body>
</html>
