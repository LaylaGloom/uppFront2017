<!DOCTYPE HTML>
<html>
	<head>
		<title>galeria</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="http://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
      crossorigin="anonymous"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<style>

			body { font-family: sans-serif; font-size: 12pt; color: #444; line-height: 1.5em; }
			h1 { font-size: 1.5em; }
			#wrapper { max-width: 1000px; margin: 0 auto; text-align: center; }
			#gallery { overflow: hidden; }
			#gallery a { display: block; float: left; padding-left: 10px; padding-right: 10px; padding-bottom: 20px;}
			#gallery a img { display: block; border: 0; }

			img { height: 150px; width: 120px;	}

		</style>
		<script>
			$(function() {

				var foo = $('#gallery');
				foo.poptrox({
					usePopupCaption: true,
          usePopupEasyClose: true,
          popupCloserText:'&#215;',
          popupWidth: 800
				});

			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<h1>Ingenieria Mecatronica</h1>
			<div id="gallery">
				<a href="images/1.png"><img src="images/1.png" title="Armando Silva Castillo - Doctorado en Física" /></a>
        <a href="images/2.png"><img src="images/2.png" title="Nazario Bautista Elivar - Maestría en Optoelectrónica" /></a>
        <a href="images/3.png"><img src="images/3.png" title="Javier Hernández Pérez - Maestría en Ciencias en Ingenieria Mecánica" /></a>
        <a href="images/4.png"><img src="images/4.png" title="Adrián Meneses Figueroa - Maestría en Mecatronica" /></a>
        <a href="images/5.png"><img src="images/5.png" title="Cándido Cuevas Gutiérrez - Ingeniero Electrico con Especialidad en Mecatronica" /></a>
        <a href="images/6.png"><img src="images/6.png" title="Cesar Alejandro Vilchis Rodríguez - Maestría en Mecatronica" /></a>
				<a href="images/7.png"><img src="images/7.png" title="José Gerardo Benítez Morales - Maestría/Doctorado en Ingenieria Electrica con Especialidad en Mecatronica" /></a>
				<a href="images/8.png"><img src="images/8.png" title="Roberto Saúl Castillo Ojeda - Doctorado en Ingenieria Electrica" /></a>
				<a href="images/9.png"><img src="images/9.png" title="Clodoaldo Elizalde Nava - Maestría en Energias Renovables" /></a>
				<a href="images/10.png"><img src="images/10.png" title="Filiberto Muñoz Palacios - Maestría en Ciencias en Automatización y Control" /></a>
				<a href="images/11.png"><img src="images/11.png" title="Marco Antonio Márquez Vera - Maestría en Ciencias en Automatización y Control" /></a>
				<a href="images/12.png"><img src="images/12.png" title="Juan Manuel Xicoténcatl Pérez - Doctorado en Electrica" /></a>
				<a href="images/13.png"><img src="images/13.png" title="Luis Alberto Zamora Campos - Maestría en Ciencias en Mecatronica" /></a>
				<a href="images/14.png"><img src="images/14.png" title="Ángel de Jesús Castro Romero - Maestría en Mecatronica" /></a>
				<a href="images/15.png"><img src="images/15.png" title="Roel Gonzáles Montes de Oca - Maestría en Mecatronica" /></a>
				<a href="images/16.png"><img src="images/16.png" title="Tonatiuh Hernández Cortes - Doctorado en Ciencias en Ingenieria Mecatronica" /></a>
				<a href="images/17.png"><img src="images/17.png" title="Juan Pablo Vázquez Hernández - Maestría en Proyectos de Desarrollo" /></a>
				<a href="images/18.png"><img src="images/18.png" title="Víctor Escobar Guerrero - Doctorado en Ciencias Quimicas" /></a>
				<a href="images/19.png"><img src="images/19.png" title="Rosa María Addauto Medina - Maestría en Educación con Campo Práctica Educativa" /></a>
				<a href="images/20.png"><img src="images/20.png" title="Mario Oscar Ordaz Oliver - Maestría en Ciencias en Automatización y Control" /></a>
				<a href="images/21.png"><img src="images/21.png" title="Mara Marlen Manzano Flores - Licenciatura en Ciencies de la Computación" /></a>
				<a href="images/22.png"><img src="images/22.png" title="Miguel Antonio Álvarez Quezada - Maestría en Ingenieria Mecánica" /></a>
				<a href="images/23.png"><img src="images/23.png" title="Jorge Díaz Moreno - Maestría en Mecatronica" /></a>
				<a href="images/24.png"><img src="images/24.png" title="Guillermo Hernández García - Ingenieria en Sistemas Computaciones" /></a>
				<a href="images/25.png"><img src="images/25.png" title="Miguel Ángel Aguilera Jiménez - Maestría en Mecatronica"/></a>
				<a href="images/26.png"><img src="images/26.png" title="Ana Leticia Reyes Hernández - Licenciatura en Sistemas Computaciones" /></a>
			</div>
		</div>
	</body>
</html>
