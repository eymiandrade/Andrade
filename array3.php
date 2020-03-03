<!DOCTYPE html>
<html>
<head>
	<title>Actividad en clase</title>
</head>
<body>
<form action="array3.php" method="POST">
	Nombre del alumno:
	<input type="text" name="info[nombre]" required>
	Matricula:
	<input type="number" name="info[matricula]" required>
	Edad:
	<input type="number" name="info[edad]" required>
	Carrera:
	<input type="text" name="info[carrera]" required>
	Email:
	<input type="text" name="info[email]" required>
	Telefono:
	<input type="number" name="info[telefono]" required>
	Tutor:
	<input type="text" name="info[tutor]" required>
	<input type="submit" value="enviar">
</form>
<?php
if (isset($_POST['info'])) {
	$array=$_POST['info'];
	$nombre=$array['nombre'];
	$matricula=$array['matricula'];
	$edad=$array['edad'];
	$carrera=$array['carrera'];
	$email=$array['email'];
	$telefono=$array['telefono'];
	$tutor=$array['tutor'];
if ($matricula>=100 and $matricula<=1000) {
	echo "Los valores obtenidos en el formulario son: <br>
	Nombre:".$nombre."<br>Matricula:".$matricula."<br>Edad:".$edad."<br>Carrera:".$carrera."<br>Email:".$email."<br>Telefono:".$telefono."<br>Tutor:".$tutor."";
}
}
else {
	echo "Tus datos no son correctos, vuelve a intentarlo";
	echo "</br>";
}
?>
</body>
</html>