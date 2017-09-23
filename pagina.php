<?php 

class Pagina{

	public function __construct($value='index.html')
	{
		echo'<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Teste Formulário</title>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			<script type="text/javascript" src="./js/jquery.validate.min.js"></script>
			<script type="text/javascript" src="./js/script.js" charset="utf-8"></script>
		</head>
		<body>
			<div class="container">';

			if(file_exists($value)){
				echo file_get_contents("./".$value);
			}else{
				echo $value;
			}
			

		echo '</div>
		</body>
		</html>';
	}
} 

?>
