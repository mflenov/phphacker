<HTML>
<HEAD>
<TITLE>Param test</TITLE>
</HEAD>
<BODY>
<center><h3>Param test</h3></center>
<hr>

<form action="param1.php" method="get">
 <select size="1" name="where">
 <option value="1">News</option>
 <option value="2">Download</option>
 <option value="3">Story</option>
 <option value="4">Contacts</option>
 </select>
 <input type="submit" value="Go">
</form>

<hr>

<?
 if (isset($_GET['where']))
 {
  if ($_GET['where']==1)
    $file = 'news/news.html';

  if ($_GET['where']==2)
    $file = 'news/download.html';

  if ($_GET['where']==3)
    $file = 'news/story.html';

  if ($_GET['where']==4)
    $file = 'news/contacts.html';

  include($file);
 }
?>

</BODY>
</HTML>
