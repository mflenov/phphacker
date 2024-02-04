<html>
    <head>
        <meta charset="utf-8">
        <title> File Upload Test </title>
    </head>
<body>
    <h1> File Upload.</h1>
    <form action="http://phpbook/chapter5/l5-1-FileUpload.php"
        method="post" enctype="multipart/form-data" >
        Файлы для отправки
        <p><input name="file1" type="file"></p>
        <p><input type="submit" value="Send files"></p>
    </form>
<hr/>

<p>Files: <?= count($_FILES) ?></p>
<p>File Size: <?= $_FILES["file1"]["size"] ?></p>
<p>File Type: <?= $_FILES["file1"]["type"] ?></p>
<p>File Name: <?= $_FILES["file1"]["name"] ?></p>
<p>File Temp Name: <?= $_FILES["file1"]["tmp_name"] ?></p>
<?php
 if (move_uploaded_file($_FILES["file1"]["tmp_name"],
   "/var/www/html/files/".$_FILES["file1"]["name"])) {
  print("Копирование завершено");
 }
 else {
  print("Ошибка копирования файла");
 }
?>
</body>
