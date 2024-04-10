<?php
const URL_API = 'https://whenisthenextmcufilm.com/api';
$curl = curl_init(URL_API);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Devolver el resultado en lugar de imprimirlo
$response = curl_exec($curl);
    $data = json_decode($response, true);
curl_close($curl);
?>

<main>
    <h2>Bienvenido a la zona de películas "Muchi"</h2>
    <img src="<?= $data['poster_url']; ?>" alt="">
    <h3><?= $data['title']; ?> dentro de <?= $data['days_until']; ?> días</h3>
    <h4>Fecha de lanzamiento: <?= $data['release_date'];?></h4>
    <h2>Siguiente película: <?= $data['following_production']['title'];?></h2>
</main>

<style>
    :root{
        background-color: #000;
        color: #fff;
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
    body{
        display: grid;
        place-content: center;

    }
    main{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    img{
        border-radius: 15px;
        height: 500px;
        width: 350px;
    }
</style>
