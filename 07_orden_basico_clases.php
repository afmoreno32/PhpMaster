<?php

class Course
{
    public function __construct(
        
        public string $title,
        public string $subtitle,
        public string $description,
        public array $tags
        ) {
        
    }
}

class autor 
{
    public function __construct(
        
        public string $name,
        public string $job,
        public string $company
        ) {

        }
    }

$autor = new autor(
    name: "Andres Moreno",
    job: "Desarrollador Web",
    company: "Harp Data Solutions"
);

$course = new Course(
    title:"Curso de PHP",
    subtitle:"Aprende PHP desde cero",
    description:"Este curso te enseñará los fundamentos de PHP, un lenguaje de programación del lado del servidor.",
    tags:["PHP", "Backend", "Programación", "Web"]
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1> Bienvenido al <?= $course->title ?></h1>

    <h2><?= $course->subtitle ?></h2>

    <p><?= $course->description ?></p>

    <p>
        <strong>Etiquetas:</strong>
    <ul>
        <?php foreach ($course->tags as $tag): ?>
            <li><?= $tag ?></li>
        <?php endforeach ?>
    </ul>


    </p>
</body>

</html>