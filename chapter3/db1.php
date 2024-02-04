<?php
 if (mysql_connect("localhost", "username", "password")==0)
    die("Can't connect to Database Server");
 mysql_select_db("database");

 $result=mysql_query("SELECT * FROM table");
 $rows=mysql_num_rows($result);
 print($rows);

 mysql_close();
?> 
