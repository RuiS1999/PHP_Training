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
            $scores = array(
                '国語' => 80,
                '数学' => 78,
                '生物' => 95,
                '社会' => 68
            );
            echo $scores['国語'];
        ?>
        <br>
        <?php
            $scores['国語'] += 8;
            echo '更新後: '.$scores['国語'];
        ?>
        <br>
        <?php
        ?>
    </body>
</html>
