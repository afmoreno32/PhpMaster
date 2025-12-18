<?php

$tags = [
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
</head>
<body>
    <h1>BIENVENIDO A LA PAGINA DE CURSOS</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure repellendus praesentium 
        deleniti aspernatur mollitia similique sequi? Corporis natus consequatur asperiores esse, 
        suscipit nesciunt, est sunt deserunt eveniet eaque ut quo.</p>
    <p>
        <strong>Etiquetas:</strong>
    
    <ul>
        <?php 
        foreach ($tags as $tag) {
            echo "<li>$tag</li>";
        } 
        ?>
    </ul>
     </p>   
</body>
</html>