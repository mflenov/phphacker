<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<form action="l2-16-1.php" method="post">
User Name: <input name="UserName">
 <input type="hidden" name="Password" value="qwerty">
 <input type="submit" name="sub" value="Go">
</form>

<?php
 if ($_POST["sub"] == "Go")
  {
   print("<p>Submitted:  " . $_POST["sub"] . "</p>");
  } 
?>

<p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
    </body>
<html>
