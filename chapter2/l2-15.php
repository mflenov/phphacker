<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>
    
<?php
  session_start();
  if (isset($_POST['UserName'])) {
    $_SESSION["user"] = $_POST['UserName'];
  }
  print('Текущее имя пользователя:' . $_SESSION["user"]);
?>

<form action="l2-17.php" method="post">
 Имя пользователя: <input name="UserName" />
 <input type="submit" name="sub" value="Go">
</form>

<a href="l2-17-readsession.php">Click me</a>

    <p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
</body>
<html>
