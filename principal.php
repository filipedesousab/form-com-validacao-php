<?php

echo '<br>
<a href="'.str_replace("index.php","",$_SERVER["SCRIPT_NAME"]).'/index.php/insert"><button class="btn btn-primary">Inserir Usuário</button></a><br><br>
<a href="'.str_replace("index.php","",$_SERVER["SCRIPT_NAME"]).'/index.php/select"><button class="btn btn-primary">Listar Usuários</button></a>';