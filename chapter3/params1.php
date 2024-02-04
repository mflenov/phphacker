<html>
    <head>
        <title> Параметры </title>
    </head>

    <body>
        <?php 
            if ((int)$_GET['id']) {
                print("Параметр id = " . $_GET['id']);
            }
            else {
                print("Ошибка");
            }
        ?>
    </body>
<html>
