<?php
    $name = 'Kevin';
    $isDev = true;
    $age = 21;

    define('LOGO_URL', 'https://kinsta.com/es/wp-content/uploads/sites/8/2020/03/tutoriales-php.png');

    $output = "Hola $name, con una edad de $age. 😎";
    $outputAge = match (true) {
        $age < 2    => "Eres un bebe, $name 👶",
        $age < 10   => "Eres un niño, $name 👦",
        $age < 18   => "Eres un adolescente, $name 👦",
        $age === 18 => "Eres un adulto, $name 🧑",
        $age < 40   => "Eres un adulto Joven, $name 🧑",
        default     => "Eres un anciano $name 👴"
    };

    $bestLanguages = ["PHP", "JavaScript", "Python"];
    $bestLanguages[] = "Java";
    $bestLanguages[] = "TypeScript";

    $person = [
        "name" => "Kevin",
        "age" => "21",
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];
?>

<ul>
    <?php foreach ($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>
</ul>

<h3>
    El mejor lenguaje es <?=$bestLanguages[1];?>
</h3>

<h2><?=$outputAge ?></h2>
<img src="<?= LOGO_URL ?>" alt="PHP LOGO" width="200">
<h1>
    <?= $output;?>
</h1>

<style>
    :root{
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>