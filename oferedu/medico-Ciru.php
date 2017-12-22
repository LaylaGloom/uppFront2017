<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Universidad Politécnica de Pachuca">
    <meta name="author" content="DTIC's">
	<title>Oferta Educativa|Universidad Politécnica de Pachuca</title>
	<link rel="icon" href="./images/favicon.ico">
    <!-- Font Awesome -->
    <link href="../vendor/fortawesome/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo SEP HIDALGO -->
    <link href="../seph/style.css" rel="stylesheet">
    <!--estilos extra-->
    <link rel="stylesheet" href="/uppFRONT2017/vendor/twbs/estilos/estilos.css">
</head>
<body>
	<!-- Logos e imagen de hidalgo -->
    <?php include ('../seph/hf/header.html'); ?>
    <!-- Menu principal superior -->
    <?php include ('../coreFRONTx/menu-superior/menu.html'); ?>
    <!-- Motor de busqueda de google -->
    <?php include ('../coreFRONTx/google/gsearch.html'); ?>
        <section  class="container well">
        <?php include('../oferedu/MedCir.html') ?>
        <div class="col-md-3">
            <?php include ('../coreFRONTx/menu-lateral/oferta-edu.html'); ?>
            <?php include ('../coreFRONTx/menu-lateral/menu-lateral.html'); ?>
        </div>
        
    </section>

    
        
    
	<!-- footer de gobierno del estado -->
	<?php include ('../seph/hf/footer.html'); ?>

<script src="../vendor/components/jquery/jquery.min.js"></script>
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>



</body>
</html>