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
            $coin = 1;
        ?>
        <?php
            if ($coin == 0) {
                echo '表です';
            } elseif ($coin == 1) {
                echo '裏です';
            } else {
                echo 'コインがたった!?';
            }
        ?>
        <br>
        <?php
            $coin = 3;
        ?>
        <?php
            switch ($coin) {
                case 0:
                    echo '表です';
                    break;
                case 1:
                    echo '裏です';
                    break;
                // else = default
                default:
                    echo 'コインがたった!?';
                    break;
            }
        ?>
        <br>
    </body>
</html>
