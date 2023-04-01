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
            function printTriArea($radius1, $radius2) {
                return $radius1 * $radius2 / 2;
            }
            $answer = printTriArea(1, 3);
            echo $answer;
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
