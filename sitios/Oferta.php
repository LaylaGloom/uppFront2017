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
    <link href="../coreFRONTx/prensa/rmbc.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/twbs/estilos/estilos.css">
		<link rel="stylesheet" href="../vendor/twbs/estilos/mostrar.css">
    <style type="text/css">
    body.custom-background { background-color: #f2f2f2; background-image: url("../oferedu/images/fondo-upp.jpg"); background-position: left top; background-size: auto; background-repeat: repeat; background-attachment: scroll; }

    </style>
    <?php
        $recibe_pagina = "";
        if(isset($_GET['pagina']))
        {
          $recibe_pagina = $_GET['pagina'];
        }
    ?>
</head>
<body class="custom-background">
	<!-- Logos e imagen de hidalgo -->
    <?php include ('../seph/hf/header.html'); ?>
    <!-- Menu principal superior -->
    <?php include ('../coreFRONTx/menu-superior/menu.html'); ?>
    <!-- Motor de busqueda de google -->

		<a class="btnfloat" href="#lisind"><center><i class="fa fa-chevron-circle-up fa-4x"></i></center></a>
        <section  class="container ">

            <?php
              switch ($recibe_pagina){
                 case "med-c":
                   include ("../oferedu/MedCir.html");
                break;
                case "t-fis":
                  include ("../oferedu/TerapiaF.html");
                break;
                case "biomed":
                  include ("../oferedu/Biomedica.html");
                break;
                case "biotec":
                  include ("../oferedu/Finan2.html");
                break;
                case "finan":
                  include ("../oferedu/Financiera.html");
                break;
                case "mecauto":
                  include ("../oferedu/MecAuto.html");
                break;
                case "meca":
                  include ("../oferedu/Mecatronica.html");
                break;
                case "soft":
                  include ("../oferedu/Software.html");
                break;
                case "tele":
                  include ("../oferedu/Telematica.html");
                break;
                case "bioAmb-esp":
                  include ("../oferedu/BioAmb-E.html");
                break;
                case "meca-esp":
                  include ("../oferedu/Meca-E.html");
                break;
                case "segInf-esp":
                  include ("../oferedu/SegInf-E.html");
                break;
                case "ma-bio":
                  include ("../oferedu/MaeBio-M.html");
                break;
                case "ma-mec":
                  include ("../oferedu/MEC-M.html");
                break;
                case "ma-meca":
                  include ("../oferedu/MaMeca-M.html");
                break;
                case "ma-tics":
                  include ("../oferedu/MaTics-M.html");
                break;
                case "doc-biotec":
                  include ("../oferedu/DocBio-D.html");
                break;
                default:
                  include ("../oferedu/infoGenOE.html");
                }
            ?>


        <div class="col-md-3"> <!-- agragadp container fluid= columnas juntas casi sin espacio, y thumbnail que hace borde redondeado del menú -->
            <?php include ('../coreFRONTx/menu-lateral/oferta-edu.html'); ?>
        </div>

    </section>




	<!-- footer de gobierno del estado -->
	<?php include ('../seph/hf/footer.html'); ?>

<script src="../vendor/components/jquery/jquery.min.js"></script>
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendor/components/jquery/jquery.mlens-1.7.min.js"></script>
<script src="../vendor/components/js/lupa.js"></script>
<script src="../coreFRONTx/prensa/rmbc.js"></script>
<script src="../vendor/components/js/javas.js"></script>
<script src="../vendor/components/js/indice.js"></script>
<script src="../vendor/components/js/btnflot.js"></script>

<!--intento fallido para cargar el contenido de las diferentes carreras en esta pagina
<script type="text/javascript">
            document.getElementById("oe-mc").addEventListener('click', function() {
                document.querySelector("#contenido").innerHTML = '<object type="text/html" data="../oferedu/MedCir.html" ></object>';
            });
            document.getElementById("oe-tf").addEventListener('click', function() {
                document.querySelector("#contenido").innerHTML = '<object type="text/html" data="../oferedu/infoGenOE.html" ></object>';
            });

</script>
-->
</body>
</html>
