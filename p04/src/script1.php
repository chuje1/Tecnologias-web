<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<?php
            $age = $_POST['edad'];
            $sex = $_POST['sexo'];

            if (!empty($age)&&!empty($sex)) {
				if($age>=18 && $age<=35 && $sex =='f'){
					echo '<h1>BIENVENID@, ESTA EN EL RANGO DE EDAD PERMITIDO</h1>';
					echo '<p>Edad: '.$age.'<br>';
                    echo 'Sexo: '.$sex.'</p>';
					echo '<form action="../index.php"><input type="submit" value="volver"></form>';
				}
                else{
					echo '<body><h1 style="color:FF0000">
					ERROR! DATOS INCORRECTOS .<br> REVISE DE NUEVO</h1>';
					echo '<p>Edad: '.$age.'<br>';
                    echo 'Sexo: '.$sex.'</p>';
					echo '<form action="../index.php"><input type="submit" value="regresar"></form></body>';
				}
			}
        ?>
	</body>
</html>