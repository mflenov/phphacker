<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<form action="hidden.php?HiddenParam=00000" method="post">
 <input name="UserName">
</form>

<?php
    print("<p>HiddenParam: " . $_GET['HiddenParam'] . '</p>');
    print("<p>UserName: " . $_POST['UserName'] . "</p>");
?>
        <p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
    </body>
<html>
