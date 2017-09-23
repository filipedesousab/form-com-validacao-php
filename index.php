<?php

if($_SERVER ["REQUEST_METHOD"] == "GET")
{
	echo file_get_contents('./pagina.html');
}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	echo "Requisição POST";
}
 
?>