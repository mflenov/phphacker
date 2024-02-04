<html>
<head>
   <title>XSS test</title>
</head>
<body>
<h3>XSS test</h3>

<hr/>
<form name="messageadd" method="get">
<p>Имя: <input name="username" size=50></p>
<p>Сообщение: <textarea cols="65" name="message" rows="10" wrap="virtual"><?= $_GET['message'] ?></textarea></p>
<p><input name="button" type="submit" value="Send"></p>
</form>

<hr/>
<h3>Результат</h3>
<?
if ($_GET['button'] == 'Send') {
   ?>
   <b><?= $_GET['username'] ?></b>
   <b><?= $_GET['message'] ?></b>
   <?
}
?>


<a href='/login.php?data=<?= htmlspecialchars($_GET['username'], ENT_QUOTES | ENT_HTML401) ?>'>Login</a>

</body>
</html>
