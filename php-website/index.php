<?php
include 'backend/controller.php';
include 'backend/datos.php';
include 'backend/User.php';

/**
 * Crea el usuario con la función crearUsuario que está en controller.php
 * el primer parámetro es el array que está en datos.php
 * el segundo parámetro es el ID del usuario que se va a crear
 */
$user = crearUsuario($array_users, 1);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title>Prueba</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<?php
					/**
					 * Imprime el índice en la barra lateral
					 */
					echo imprimirIndiceUsuarios($array_users);
					?>
				</div>
			</div>
			<div class="col-md-9">
				<h1><?php echo $user->mostrarDato('nombre'); ?> <?php echo $user->mostrarDato('apellido'); ?></h1>
			</div>
		</div>
	</div>
</body>
</html>