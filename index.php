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
            // 文字列はピリオド(.)で連結
            $name = '楓';
            $hello = 'こんにちは';
        ?>
        <br>
        <?php
            echo $name.$hello;
        ?>
        <br>
    </body>
</html>
