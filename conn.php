<?php
	
class Conn{
	private $host = "localhost";
	private $dbname = "form";
	private $user = "root";
	private $pass = "";
	public $db = null;

	public function connPdo()
	{
		self::$db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
	}
	public function connMysqli()
	{
		$this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		mysqli_set_charset($this->db, 'utf8');
		return $this->db;
	}
	public function connMysql()
	{
		$conn = mysql_connect($this->host, $this->user, $this->pass);
		self::$db = mysql_select_db($this->dbname, $conn);
	}
}
//PDO
//



//MYSQLI_CONNECT

/*if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
	echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;	
	mysqli_close($conn);
}*/

// MYSQL_CONNECT
/*$conn = mysql_connect('localhost', 'form', '');
if (!$link) {
    die('Erro ao conectar ao banco: ' . mysql_error());
}else{
	echo 'Conectado com sucesso';
	mysql_close($conn);
}*/

?>