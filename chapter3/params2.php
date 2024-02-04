<html>
    <head>
        <title> Параметры </title>
        </head>

    <body>
        <?php 
            if (ctype_alpha($_GET['str']) == 1) {
                print("Это Строка ");
            }
            print('<br/><br/>');
            if (ctype_alnum($_GET['str']) == 1) {
                print("Это Строка или число");
            }
        ?>
    </body>
<html>
