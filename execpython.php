<?php 

      
//echo "RUNNING PYTHON SCRIPT";

/*
$command = escapeshellcmd('/home/edern/Git-repo/ProyectoInteligenciaArtificial/EntregaI/Main.py');
system($command);
$output = shell_exec($command);
echo $output;
echo "END";
*/ 

//passthru('python /home/laurens/repoLaurens/ProyectoInteligenciaArtificial/EntregI/Main.py');
      
//$command = escapeshellcmd('python /home/laurens/PycharmProjects/prueba/pruebaMain.py');
$command = escapeshellcmd('python /home/edern/Git-repo/ProyectoInteligenciaArtificial/EntregaI/Main.py');
system($command);
$output = shell_exec($command);
//echo $output;
echo "END";    
?>
