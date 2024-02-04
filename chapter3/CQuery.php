<?php
class CQuery {
	private $query;
	private $line = 0;
	private $row;
	private $lines = array();

	public function __construct($sql, $params) {
		$this->query = CDatabase::ConnectToDB('test')->prepare($sql);

		foreach ($params as $key => $value) {
			$this->query->bindValue(":" . $key, $value);
		}

		$this->query->execute();
		$this->line = 0;
	}

	public function fetchLines() {
		while (($line = $this->fetch()) != FALSE) {
			$this->lines[$this->line] = $line;
			$this->line++;
		}

		return $this->lines;
	}

	public function fetch() {
		$this->line += 1;
		return $this->query->fetch(PDO::FETCH_ASSOC);
	}

	public function getvalue($columnname, $defaultvalue) {
		if ($this->line == 0)
			$this->row = $this->fetch();
		if ($this->row == FALSE)
			return $defaultvalue;
		if ($this->row[$columnname] == NULL)
			return $defaultvalue;
		return $this->row[$columnname];
	}

	public function fetchvalue($columnname, $defaultvalue) {
		$this->row = $this->fetch();
		return $this->getvalue($columnname, $defaultvalue);
	}

	public function rowCount() {
		return $this->query->rowCount();
	}

	public function lastId() {
		return CDatabase::$pdo->lastInsertId();
	}

	 public static function FetchTableRow($sql, $params, $pfx)
	 {
	  $query = new CQuery($sql, $params, $pfx);
	  return $query->fetch();
	 }

	 public static function FetchTableValue($sql, $params,
	    $column, $default, $pfx) {
	      $query = new CQuery($sql, $params, $pfx);
		return $query->fetchvalue($column, $default);
	  }
}
?>
