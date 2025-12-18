<?php
    $course = [
        'title'=> 'Curso profesional de Para ser Master En Php Y Laravel',
        'subtitle' => 'Aprendiendo PHP y LARAVEL desde cero',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
         quidem! Libero voluptas maiores sapiente enim recusandae dolorem eveniet quaerat, 
         reiciendis officiis fugiat, nobis quo quae aliquid. Fugit voluptatem maiores sed?',
        'tags' => [
            'PHP',
            'LARAVEL',
            'JAVASCRIPT',
            'HTML',
            'CSS',
            'MYSQL',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1> Bienvenido al <?= $course['title']?></h1>

    <h2><?=  $course['subtitle']?></h2>

    <p><?=  $course['description'] ?></p>

    <p>
        <strong>Etiquetas:</strong>
            <ul>
                <?php foreach($course['tags'] as $tag): ?>
                    <li><?= $tag ?></li>
                    <?php endforeach ?>
            </ul>

    
     </p>   
</body>
</html>