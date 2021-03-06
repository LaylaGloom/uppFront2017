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
			<h1>Ingenieria en Software</h1>
			<div id="gallery">
				<a href="images/1.png"><img src="images/1.png" title="MTIC. Mayra Fabiola González Peralta" /></a>
        <a href="images/2.png"><img src="images/2.png" title="Dr. Jaime Aguilar Ortiz" /></a>
        <a href="images/3.png"><img src="images/3.png" title="M. en C. Alicia Ortiz Montes" /></a>
        <a href="images/4.png"><img src="images/4.png" title="M. en C. Jazmín Rodríguez Flores" /></a>
        <a href="images/5.png"><img src="images/5.png" title="M. en C. Juan Augusto Valdés Hernández" /></a>
        <a href="images/6.png"><img src="images/6.png" title="MTIC. Erika Cerón Cornejo" /></a>
			</div>
		</div>
	</body>
</html>
