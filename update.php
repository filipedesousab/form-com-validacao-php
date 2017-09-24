<h4>Atualizar usuário: <?php echo str_replace("/update/","",$_SERVER["PATH_INFO"]); ?></h4><br>
<form id="formulario" method="POST">
	<div class="form-group row">
		<label for="nome" class="col-sm-1 col-form-label">Nome: </label>
		<div class="col-sm-3">
			<input class="form-control" type="text" placeholder="Nome" id="nome" name="nome"></input>
		</div>
	</div>
	<div class="form-group row">
		<label for="email" class="col-sm-1 col-form-label">Email: </label>
		<div class="col-sm-3">
			<input class="form-control" type="email" placeholder="Email" id="email" name="email"></input>
		</div>
	</div>
	<div class="form-group row">
		<label for="senha" class="col-sm-1 col-form-label">Senha: </label>
		<div class="col-sm-3">
			<input class="form-control" type="password" placeholder="Senha" id="senha" name="senha"></input>
		</div>
	</div>
	<div class="form-group wor">
		<div class="col-sm-1"></div>
		<div class="col-sm-2">
			<?php 
			echo '<input class="btn btn-primary form-control" type="hidden" value="'.str_replace("/update/","",$_SERVER["PATH_INFO"]).'" id="id" name="id"></input>';
			 ?>
			 <input class="btn btn-primary form-control" type="hidden" value="update" id="tipo" name="tipo"></input>
			<input class="btn btn-primary form-control" type="submit" value="Enviar" id="enviar"></input>
		</div>
	</div>
</form>
