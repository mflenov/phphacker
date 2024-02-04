<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<form action="l2-16.php" method="post">
 <p>User Name: <input name="UserName"/></p>
 <p><input type="hidden" name="Password" value="qwerty"></p>
</form>

<?php
 if (isset($_POST['UserName']))
  {
     print("<p>Ваше имя: " . $_POST['UserName'] . '</p>');
     print("<p>Пароль: " . $_POST['Password'] . "</p>");
  } 
?>
<p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
    </body>
<html>
