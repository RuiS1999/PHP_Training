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
            $names = array('Kaede', 'Natsuki', 'Sakura');
            echo $names[1];
        ?>
        <br>
        <?php
            $names[] = 'Kyouka';
            echo $names[3];
        ?>
        <br>
        <?php
            $names[1] = 'Momiji';
            echo $names[1];
        ?>
    </body>
</html>
