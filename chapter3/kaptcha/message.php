<? session_start(); ?>
<html>
<head>
<title>Using kaptcha</title>
</head>
<body>

<?
if ($_SESSION[secret_number] == "")
{
 $_SESSION[secret_number] = "ABCD";
} 

if (isset($_POST[comtext]))
{
 if ($_SESSION["secret_number"] != $_POST[pkey])
 {
  ?><h1>Wrong secret number</h1><?
 }
 else
 {
  ?><h1>You are the best</h1><?
 }
}
?>
<form name="product" action="message.php" method="post">
<table width="100%" border="0">
<tr>
<td ><p>Имя пользователя:</p> </td>
<td><input name="username" value="<? print($_POST[username]); ?>" size="72"></td>
</tr>
<tr>
<td ><p>Комментарий:</p> </td>
<td><textarea cols="56" name="comtext" rows="10" wrap="virtual">
  <? print(stripslashes($_POST[comtext])); ?></textarea></td>
</tr>
<tr>
<td ><p>Код безопасности:</p> </td>
<td><input name="pkey" value="" size="50"> <img src="protect.php" border="1" align="top"></td>
</tr>
</table>
<p><input type="submit" value="Сохранить"></p>
</form>
</body>