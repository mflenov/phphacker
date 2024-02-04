<html>
<head>
<title> test page </title>
</head>

<body>
    <pre>
<?php
$title='We are glad to see you again';

$str = "This is a string.
   PHP is a next generation of WEB programming.
   You will like this";
print($str);
?>
</pre>
<p>hello. <?php echo $title ?>
<p>current time <?php echo date('y-m-d h:i:s') ?>
        <p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
</body>
<html>
