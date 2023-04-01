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
        ?>
        <br>
        <?php
            function printCircleArea($radius1, $radius2) {
                echo $radius1 * $radius2 / 2;
                echo '<br>';
            }
            printCircleArea(3, 5);
            printCircleArea(5, 10);
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
