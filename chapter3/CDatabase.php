<?
class CDatabase {
	static $connections = array();

	public static function ConnectToDB($pfx)
	{
		$db_name = "test";
		$db_login = "test";
		$db_pass = "P1srT59k0*&6%e3";
        $dbhost = "127.0.0.1";

		if (in_array($pfx, CDatabase::$connections))
			return CDatabase::$connections[$pfx];

        try {
		  CDatabase::$connections[$pfx] = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db_name. '', $db_login, $db_pass,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch(PDOException $e) {
            print($e->getMessage());
        }

		return CDatabase::$connections[$pfx];
	}
}
?>
