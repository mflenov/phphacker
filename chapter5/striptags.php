<?
	$str = "Это <b>жирный</b> текст, а это <i>наклонный</i>.
		И еще <a href='http://www.flenov.ru'>ссылка</a>";

	print("В чистом виде: " . $str . "<hr/>");
	print("Без тэгов: " . strip_tags($str) . "<hr/>");
	print("Только тэги i и b: " . strip_tags($str, '<i><b>') . "<hr/>");


	$str = "<i onmouseover=\"alert('Привет')\">наклонный</i> 
		Безопасная <i>безопасно</i>";
	print("Уязвимый i: " . strip_tags($str, '<i><b>') . "<hr/>");

	$str = "<i onmouseover=\"alert('Привет')\">наклонный</i> 
		Безопасная [i]безопасно[/i]";
	$notagsstr = strip_tags($str);
	$notagsstr = str_replace('[i]', '<i>', str_replace('[/i]', '</i>', $notagsstr));
	print("Уязвимый i: " . $notagsstr . "<hr/>");
?>
