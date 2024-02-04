<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=test', 'test', 'P1srT59k0*&6%e3',
         array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$query = $db->prepare("select * from TestTable where CityName = :city");
$query->execute();
if (($line = $query->fetch(PDO::FETCH_ASSOC)) != FALSE) {
    print_r($line);
    print('<hr/> <p>' . $line['CityName'] . '</p>');
} 
else {
    print('Ничего не найдено');
}

print('Колчиество записей' . $query->rowCount());
?>