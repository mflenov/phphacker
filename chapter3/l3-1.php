<html>
    <head>
        <meta charset="utf-8">
        <title> Test page </title>
    </head>
<body>
<?
include("CQuery.php");
include("CDatabase.php");

$query = new CQuery('select * from TestTable', array());
if ($query->rowCount() == 0) {
    ?><h1>Ничего не найдено</h1><?
}

?><ul><?
while (($row = $query->fetch()) != FALSE) {
    ?><li><?= $row['CityName'] ?></li><?
}
?></ul><?
?>
</body>
</html>
