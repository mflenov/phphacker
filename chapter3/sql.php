<html>
<head>
<title>injection test</title>
</head>
<body>
<style>td { border: 1px solid #000; padding:4px;  }
table { border-collapse: collapse; }</style>
<h3>Injection test</h3>
<hr>
<form name="dbquery" action="sql.php" method="get">
User name: <input name="username" size="25" value="<?= $_GET['username'] ?>">
<input type="submit" value="Find">
</form>
<hr>

<?
 // Connect to MySQL
 $connection = new PDO('mysql:host=127.0.0.1;dbname=testdb', 'testuser', 'password');

 // execute sql
 $username=$_GET['username'];
 $sql = "SELECT * FROM phone WHERE lastname like '". $username . "'";
 $query = $connection->prepare($sql);
 echo "Search: $username";
 print($sql . "<br/>");
 $query->execute();
 if ($query->errorInfo()[1]) {
 	print_r($query->errorInfo());
 }

 // show result
?>
<table width="100%">
<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Phone</th>
</tr>
<?

  // Get result columns
  while (($line = $query->fetch(PDO::FETCH_ASSOC)) != FALSE) {
   ?><tr>
	   <td><?= $line['firstname'] ?></td>
	   <td><?= $line['lastname'] ?></td>
	   <td><?= $line['phone'] ?></td>
	</tr><?
  }
?>
</table>

</body>
</html>
