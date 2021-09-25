<?php
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$correo=$_POST["correo"];
	$genero=$_POST["genero"];
	$sugerencias=$_POST["sugerencias"];
	$comentario=$_POST["comentario"];
	$contenido="SUGERENCIAS\n\n";
	$contenido.="NOMBRE DEL CLIENTE: ".$nombre;
	$contenido.="\nAPELLIDO DEL CLIENTE ".$apellido;
	$contenido.="\nGENERO: ".$genero;
	$contenido.="\n\nCORREO ELECTRONICO: ".$correo;
	$contenido.="\nTIPO DE SUGERENCIAS: ".$sugerencias;
	$contenido.="\nCOMENTARIOS: ".$comentario;
	mail("dalejandro.hernandez19@itca.edu.sv",$sugerencias,$contenido);
	header("Location:../html/sugerencias.html");
?>