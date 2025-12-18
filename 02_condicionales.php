<?php
$course = "Curso de PHP";
$archived = true;
$status = $archived ? "inactivo" : "activo"; //ternario
$lvlcurso = "intermedio";
$mensaje = "";

if ($lvlcurso == "basico") {
  $mensaje = "Recomendado para quienes recién comienzan en programación.";
} else if($lvlcurso == "intermedio" ){
  $mensaje = "Recomendado para estudiantes que tienen conocimientos básicos de programación.";
}else{
    $mensaje = "Este curso es ideal para estudiantes con conocimientos sólidos de programación.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course ?></h1>


        <p>
            Este curso esta <?= $status ?>
        </p>
        <p>
            <?= $mensaje ?>
        </p>


</body>
</html>