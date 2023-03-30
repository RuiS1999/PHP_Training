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
            $language = 'PHP';
            echo $language.'<br>';
            echo '文字数は'.strlen($language);
        ?>
        <br>
        <?php
            $date = array('Hinata', 'Asuka', 'Kaede');
            echo count($date);
        ?>
        <br>
        <?php
            echo rand(10, 90);
        ?>
    </body>
</html>
