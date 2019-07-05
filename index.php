<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login do Administrador</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<form action="processo.php" method="POST">
		
		<div class="row">

			<div class="container">
				<img src="icon.png">
				<p><label>Nome Completo</label></p>
				<input type="text" name="nome"></input>
				<p><label>CPF</label></p>
				<input type="number" name="cpf"></input>
				</div>

				<div class="but">
				<button>Login</button>
			</div>
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];

				unset($_SESSION['msg']);
			}
		?>

			<div>
				<a href="cad_index.php"><p>Cadastrar Cliente</p></a>
			</div>
		</div>
	</form>
</div>

</body>
</html>