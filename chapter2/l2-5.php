<meta charset="utf-8">

<?php
    if (isset($index))
        print('Переменная установлена');     // Переменная установлена
    else
        print('Переменная не установлена'); // Переменная не установлена

    // Устанавливаем переменную
    $index = 1;
?>

<hr/>

<?php
    if (isset($index))
        print('Переменная установлена');     // Переменная установлена
    else
        print('Переменная не установлена'); // Переменная не установлена
?>

<p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
