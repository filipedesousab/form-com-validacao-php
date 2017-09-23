<?php
include "./dao.php";
include "./pagina.php";

if($_SERVER ["REQUEST_METHOD"] == "GET")
{
	if(!isset($_SERVER["PATH_INFO"]) || $_SERVER["PATH_INFO"] == "/"){
		
		$dao = new DAO();
		
		new Pagina("index.html");

	}else if($_SERVER["PATH_INFO"] == "/lista"){
		$dao = new DAO();
		$data = $dao->select("*","user");
		
		$string = "<table class='table'>";
		$string = $string . "<tr><td>Nome</td><td>Email</td><td>Senha</td></tr>";
		foreach ($data as $linha){
			$string = $string. "<tr><td>".$linha->nome."</td>";
			$string = $string."<td>".$linha->email."</td>";
			$string = $string."<td>".$linha->senha."</td></tr>";
		}
		$string = $string."</table>";
		new Pagina($string);
	}

}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$dao = new DAO();
	//echo var_dump($_POST);
	var_dump($dao->insert($_POST, "user"));
}
 
?>