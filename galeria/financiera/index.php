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
          popupWidth: 700
				});

			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<h1>Ingenieria financiera</h1>
			<div id="gallery">
				<a href="images/1.png"><img src="images/1.png" title="Adriana Arlette Ibarra Ramírez - Maestría en Educación" /></a>
        <a href="images/2.png"><img src="images/2.png" title="Alejandra Gonzáles Callejas - Licenciatura en Contaduria" /></a>
        <a href="images/3.png"><img src="images/3.png" title="Alfredo Anaya Rosales - Licenciatura en Administración" /></a>
        <a href="images/4.png"><img src="images/4.png" title="Arquimedes Avilés Vargas - Licenciatura en Economía" /></a>
        <a href="images/5.png"><img src="images/5.png" title="Arturo Maldonado Marmolejo - Maestría en Administración" /></a>
        <a href="images/6.png"><img src="images/6.png" title="Carlos Armando Nava Vite - Maestría en Ingenieria Económica y Financiera" /></a>
				<a href="images/7.png"><img src="images/7.png" title="Edith Muñoz Estrada - Maestría en Dirección Comercial" /></a>
				<a href="images/8.png"><img src="images/8.png" title="Elizabeth Olmos Blanquel - Maestría en Ingenieria Económica y Financiera" /></a>
				<a href="images/9.png"><img src="images/9.png" title="Estrella Pérez Hernández - Licenciaturas en Economía" /></a>
				<a href="images/10.png"><img src="images/10.png" title="Fabián Sánchez Valdovinos - Maestría en Ingenieria Económia y Financiera" /></a>
				<a href="images/11.png"><img src="images/11.png" title="Gregoria del Carmen Godínez Flores - Doctorado en Humanidades" /></a>
				<a href="images/12.png"><img src="images/12.png" title="Victor Manuel Juárez Pérez - Maestría en Desarrollo Rural" /></a>
				<a href="images/13.png"><img src="images/13.png" title="Jose Luis Renteria Núñez - Maestría en Administración" /></a>
				<a href="images/14.png"><img src="images/14.png" title="Jose Sergio Eduardo Martínez Vázquez - Maestría en Ciencias de la Educación" /></a>
				<a href="images/15.png"><img src="images/15.png" title="Lizbeth Elena Guzmán Escorza - Maestría en Educación, Área Administración-Educativa y Gestión" /></a>
				<a href="images/16.png"><img src="images/16.png" title="Marco Antonio Vera Jiménez - Maestría en Gestión Administrativa" /></a>
				<a href="images/17.png"><img src="images/17.png" title="Marco Tulio Valdés Acosta - Maestría en Administración" /></a>
				<a href="images/18.png"><img src="images/18.png" title="Mayte Olivares Escorza - Doctorado en Humanidades con opción de Educación" /></a>
				<a href="images/19.png"><img src="images/19.png" title="Miguel Ángel Torres Gonzáles - Doctorado en Planeación Estratégica y Dirección de Tecnología" /></a>
				<a href="images/20.png"><img src="images/20.png" title="Oscar Garnica Skewes - Maestría en Desarrollo Organizacional" /></a>
				<a href="images/21.png"><img src="images/21.png" title="Paola Márquez Cerón - Licenciatura en Matemáticas Aplicadas" /></a>
				<a href="images/22.png"><img src="images/22.png" title="Pedro Diaz Romo - Ingenieria Industrial" /></a>
				<a href="images/23.png"><img src="images/23.png" title="Rodolfo Eduardo Contreras Acevedo - Licenciatura en Derecho" /></a>
				<a href="images/24.png"><img src="images/24.png" title="Rosalia América Juárez Aguirre - Maestría en Proyectos de Desarrollo" /></a>
				<a href="images/25.png"><img src="images/25.png" title="Saúl López López - Licenciatura en Economía"/></a>
				<a href="images/26.png"><img src="images/26.png" title="Sonia Gómez Gómez - Maestría en Administración de Empresas" /></a>
				<a href="images/27.png"><img src="images/27.png" title="Víctor Manuel Juárez Pérez - Maestría en Administración" /></a>
			</div>
		</div>
	</body>
</html>
