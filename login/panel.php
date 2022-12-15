<?php
session_start();
//if(!isset($_SESSION['user_name'])) {
//    header('Location: ../index.html');
//    exit();
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo!</title>
</head>
<link rel="stylesheet"">
<body>
<div class="container" id="container">


    <h1>Olá Seja Bem Vindo!</h1>
    <h2>email: <?php print($_SESSION['user_email']); ?></h2>
</div>
<div class="h3">
    <h3>Conheça Opções Além do Nosso Resort</h3>
</div>

<div class="list" id="list">
    <ul>
        <li>
            Praia de Taíba - (0.2KM)<a href="https://www.tripadvisor.com.br/Attraction_Review-g1193283-d4057147-Reviews-Praia_da_Taiba-Taiba_State_of_Ceara.html" target="_blank">Saiba Mais!</a>
        </li>
        <li>
            Restaurante Petit Bistro - (3KM) <a href="https://www.tripadvisor.com.br/Restaurant_Review-g1193283-d4506936-Reviews-Petit_Bistrot-Taiba_State_of_Ceara.html" target="_blank">Saiba Mais!</a>

        </li>
        <li>
            Praia Da Pedra Rachada - (10KM) <a href="https://www.tripadvisor.com.br/Attraction_Review-g1720824-d4057174-Reviews-Pedra_Rachada_Beach-Paracuru_State_of_Ceara.html" target="_blank">Saiba Mais!</a>
        </li>

        <li>
            Vila de Jericoacoara - (35km) <a href="https://www.tripadvisor.com.br/Attractions-g303297-Activities-Jericoacoara_Jijoca_de_Jericoacoara_State_of_Ceara.html" target="_blank">Saiba Mais!</a>
        </li>

    </ul>
</div>
</body>
</html>

