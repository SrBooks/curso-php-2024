<?php
    // $name = "Javi";
    // $isDesign = true;
    // $age = "30";

    // $output = "Hola, ".$name ." con edad ".$age;

    // $outputAge = match(true) {
    //     $age < 2 => "Eres un bebe, $name 👶",
    //     $age < 10 => "Eres un niño, $name 👦",
    //     $age < 18 => "Eres un adolescente, $name 😽",
    //     $age === 18 => "Eres mayor de edad, $name 👮",
    //     $age < 35 => "Estás en la mejor época, disfruta viejales $name 🎮",
    //     default => "Suerte",
    // };

    $bestLanguages = ["PHP", "JavaScript", "React", "TypeScript"];

    foreach($bestLanguages as $key => $language){
        echo $language ." ";
    }

    $pets  = [
        "name" => "Dok",
        "age" => 4,
        "type" => "dog",
        "breed" => "Mastin with Pastor Belga",
    ];

    var_dump($pets);
    echo "The name of the dog is: " . $pets["name"];
?>

<h1>
    <!-- <?= $outputAge; ?> -->
</h1>
<section>
    <h2>Mejores lenguajes de programación</h2>
    <ul>
       <?php foreach($pets as $pet ) : ?>
            <li><?=$pet["name"]?></li>
            
       <?php endforeach; ?>
    </ul>
</section>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>

