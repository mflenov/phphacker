<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="l2-14.php" method="get">
         имя пользователя: <input name="username">
        </form>

        <?php
         if (isset($_GET['username']) <> "")
          {
           print("<p>ваше имя пользователя: ");
           print($_GET['username']);
          } 
        ?>
        <p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
    </body>
<html>
