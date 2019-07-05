<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro do cliente</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<form action="cadastro.php" method="POST">
		<div class="row">

			<div class="container">
				<img src="icon.png">
				<p><label>Nome Completo</label></p>
				<input type="text" name="cad_nome"></input>
				 <p><label>E-mail</label></p>
                <input type="email" name="cad_email"></input>
                <p><label>CPF</label></p>
                <input type="number" name="cad_cpf"></input>
               
				</div>

				<div class="but">
				<button>Cadastrar</button>
			</div>
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];

				unset($_SESSION['msg']);
			}
		?>

		</div>
	</form>
</div>

</body>
</html>