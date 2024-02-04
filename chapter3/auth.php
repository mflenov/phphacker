<html>
<head>
<title>injection test</title>
</head>
<body>
<style>td { border: 1px solid #000; padding:4px;  }
table { border-collapse: collapse; }</style>
<h3>Injection test</h3>
<hr>
<form name="dbquery" action="auth.php" method="post">
User name: <input name="username" size="25" value="<?= $_POST['username'] ?>">
Password: <input name="password" size="25" value="<?= $_POST['password'] ?>">
<input type="submit" value="Find">
</form>
<hr>

<?
 // Connect to MySQL
 $connection = new PDO('mysql:host=127.0.0.1;dbname=testdb', 'testuser', 'password');

 $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
 $query = $connection->prepare($sql);

 $query->execute([":username" => $_POST['username'], ":password" => $_POST['password']]);

$line = $query->fetch(PDO::FETCH_ASSOC);
if ($line[username] == $_POST['username'] && $line[password] == $_POST['password']) {
	echo "<h2>Welcome</h2>";
} else {
	echo "<h2>Try again</h2>";
}

$sql = "select * from table where column in (";
for ($i = 0; $i < $num; $i++) {
	if ($i > 0) {
		$sql = $sql . ',';
	}
	$sql = $sql . ' :param' . $i;
}
$sql = $sql . ')';

 ?>

</body>
</html>
