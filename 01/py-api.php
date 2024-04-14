<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
    main {
        place-items: center;
        display: grid;
    }
    hgroup{
        text-align: center;
    }
</style>

<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesión de cURL; ch = cURL Handle

$ch = curl_init(API_URL);
# Indicar que queremos recibir el resultado de la petición, pero que no la muestre por pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


# Ejecutar la petición y guardar el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);



?>

<main>
    <section>
        <img src="<?= $data["poster_url"];?>" alt="<?= $data["title"]; ?>" style="width:300px;border-radius:10px;" >
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"];?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente película es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
    
</main>