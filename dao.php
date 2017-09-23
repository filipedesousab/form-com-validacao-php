<?php 
include "conn.php";

class DAO{

	private $conn = null;
	private $db = null;

	public function __construct()
	{
		$this->conn = new Conn();
		$this->db = $this->conn->connMysqli();
	}

	public function select($campos = '*', $tabela = 'user', $condicao = "1=1")
	{
		$sql = "SELECT ".$campos." FROM ".$tabela." WHERE ".$condicao;
		$data = $this->db->query($sql);
		mysqli_close($this->db);
		$return = [];
		while ($row = mysqli_fetch_object($data)) {
        	array_push($return, $row);
    	}
		return $return;
	}

	public function insert($values, $tabela = "user")
	{
		$nome = $values["nome"];
		$email = $values["email"];
		$senha = md5($values["senha"]);

		$stmt = $this->db->prepare("INSERT INTO user (nome, email, senha) VALUES (?,?, ?)");
		//$stmt = $db->query("INSERT INTO 'user' ('id', 'nome', 'email', 'senha') VALUES (null,'fulsss', 'dfdf@ddd','senha')");
		$stmt->bind_param('sss', $nome , $email, $senha);
		if(!$stmt->execute()){
			return false;
		}
		return true;
	}

}

?>
