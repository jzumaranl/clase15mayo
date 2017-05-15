<!DOCTYPE html>
<html lang="es">
<?php
// A continuación encontrarán algunas variables al modo en que son escritas en PHP.
// Sus contenidos son: una palabra; una frase; un valor numérico; y un arreglo simple.
$title = "Portafolio Académico";
$descripcion_index = "Datos de profesores";
$descripcion_estudiantes = "Datos de estudiantes."
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo($title);?></title>
<meta name="robots" content="noindex">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<header>
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo($title);?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Profesores</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='estudiantes.php'){?> class="active" <?php };?>><a href="estudiantes.php">Estudiantes</a></li>
</nav>
</div>
</div>
<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
  <h2><?php echo($descripcion_index);?></h2>
  <?php }else{ ?>

    <h2><?php echo($descripcion_estudiantes);?></h2>
    <?php } ;?>
</header>
