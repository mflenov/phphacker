<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php
    $access = $_COOKIE["access"] + 1;
    setcookie("access", $access);
    print("Вы видите эту страницу $access раз");
?>

<p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>

    </body>
<html>
