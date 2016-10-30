<?php
mysql_connect("localhost", "root", "") or die(mysql_error()) ;
mysql_select_db("bd_banners") or die(mysql_error()) ;
$imagen1= $_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="imagenes/".$imagen1;
 $fp     = fopen($ruta, 'r+b');
$data = fread($fp, filesize($ruta));
fclose($fp);

                //escapar los caracteres
                $data = mysql_escape_string($data);
copy($ruta, $destino);
mysql_query("INSERT INTO imagenes (imagen, tipo_imagen) VALUES ('$data', '$destino')") ;
header("location: dashboard.php");

/*
echo "asd";

$command = escapeshellcmd('/home/laurens/repoLaurens/ProyectoInteligenciaArtificial/EntregI/Main.py');
$output = shell_exec($command);
echo $output;

*/

?>