<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php
  session_start();
  if (!$_SESSION['user'])
   {
    die("Требуется авторизация");    
   }
  print("Hello: " . $_SESSION['user']);
?>

<p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>

    </body>
<html>
