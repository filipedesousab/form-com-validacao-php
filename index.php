<?php
include "./dao.php";
include "./pagina.php";

if($_SERVER ["REQUEST_METHOD"] == "GET")
{
	if(!isset($_SERVER["PATH_INFO"]) || $_SERVER["PATH_INFO"] == "/"){
		
		//var_dump($_SERVER);
		new Pagina("index.html");

	}else if ($_SERVER["PATH_INFO"] == "/insert") {
		new Pagina("insert.html");

	}else if (strpos( $_SERVER["PATH_INFO"], "update")) {
		new Pagina("update.php");

	}else if($_SERVER["PATH_INFO"] == "/select"){
		$dao = new DAO();
		$data = $dao->select("*","user");
		
		$string = "<table class='table'>";
		$string = $string . "<tr><td><b>Nome</b></td><td><b>Email</b></td><td><b>Senha</b></td><td><b>Ação</b></td></tr>";
		foreach ($data as $linha){
			$string = $string. "<tr><td>".$linha->nome."</td>";
			$string = $string."<td>".$linha->email."</td>";
			$string = $string."<td>".$linha->senha."</td>";
			$string = $string."<td><a href='#' class='acao deletar' id='".$linha->id."'>Deletar</a> / <a href='update/".$linha->id."' class='acao atualizar' id='".$linha->id."'>Atualizar</a></td></tr>";
		}
		$string = $string."</table>";
		new Pagina($string);
	}else{
		$arquivo = file_get_contents(str_replace("/index.php","",$_SERVER["SCRIPT_NAME"]).$_SERVER["PATH_INFO"]);
		echo $arquivo;
	}

}else if($_SERVER["REQUEST_METHOD"] == "POST"){
	$dao = new DAO();
	//echo var_dump($_POST);
	if($_POST["tipo"]=="insert"){

		echo $dao->insert($_POST, "user");

	}elseif ($_POST["tipo"]=="delete") {

		echo $dao->delete($_POST["id"], "user");

	}elseif ($_POST["tipo"]=="update") {
		echo $dao->update($_POST, "user");

	}
}
 
?>