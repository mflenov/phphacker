<html>
    <head>
        <meta charset="utf-8">
        <title> Test page </title>
    </head>
<body>
<form action="env.php" method="get">
 <B>Введите какой-нибудь текст</B>
 <BR>Текст: <input name="server">
 <BR><input type="submit" value="OK">
</form>

<?php
 print($_SERVER['HTTP_REFERER']);
 if (!ereg("^http://phpbook/", $_SERVER['HTTP_REFERER']))
  {
   die("Referer неверный");
  }
?>

</body>
</html>
