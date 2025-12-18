<?php
$course = "Curso de PHP";

$tag = [
"HTML",
"CSS",
"JAVASCRIPT",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
   <p>
            <strong>Etiquetas:</strong>
            <li><?= $tag[0] ?></li>
            <li><?= $tag[1] ?></li>
            <li><?= $tag[2] ?></li>
        </p>
        <p>
            <?= $mensaje ?>
        </p>


</body>
</html>