<?php 
	
	$conexion=mysqli_connect("localhost","root","","simat")
	or die("Problemas con la conexión");

    mysqli_query($conexion,"insert into usuario 
    	(usuario,contrasena,email,activo) values 
    	('$_REQUEST[usuario]','$_REQUEST[contrasena]'
    		,'$_REQUEST[email]',1)")

    or die("Problemas en el insert".mysqli_error($conexion));

    mysqli_close($conexion);

    header("location: login.php");
?>