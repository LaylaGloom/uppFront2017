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
          popupWidth: 400
				});

			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<h1>Ingenieria en Biotecnologia</h1>
			<div id="gallery">
				<a href="images/1.png"><img src="images/1.png" title="Dr. Jorge Álvarez Cervantes" /></a>
        <a href="images/2.png"><img src="images/2.png" title="Dra. María del Rocío Ramírez Vargas" /></a>
        <a href="images/3.png"><img src="images/3.png" title="Dr. Juan Manuel González Lara" /></a>
        <a href="images/logo.png"><img src="images/logo.png" title="Dr. Rafael Torres Robles" /></a>
        <a href="images/logo.png"><img src="images/logo.png" title="Dra. Rocío Álvarez García" /></a>
        <a href="images/logo.png"><img src="images/logo.png" title="M.C. Ubaldo Baños Rodríguez" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Dra. Angélica Jiménez Gonzáles" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Dr. Sergio Alejandro Medina Moreno" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Dra. Lilia Benítez Corona" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Dra. Patricia Nayeli Olvera Venegas" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Dra. Xochitl Tovar Jiménez9 " /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Dra. Matilde Villa García" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Dr. Genaro Vargas Hernández" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Mtra. Alejandra Hernández Espinosa" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="L.Q. María de los Ángeles Martínez Pérez" /></a>
				<a href="images/4.png"><img src="images/4.png" title="L.Q. Ana Rosa Gayosso Mexia" /></a>
				<a href="images/logo.png"><img src="images/logo.png" title="Ing. Claudia Pérez Vargas" /></a>
			</div>
		</div>
	</body>
</html>
