
<link rel="stylesheet" href="style.css">

<?php

if(isset($_POST["cidadeDeOrigem"]) && isset($_POST["cidadeDeDestino"]) 
    && isset($_POST["distancia"]) && isset($_POST["quantidadeDePedagios"])){
    
    $cidadeDeOrigem = $_POST["cidadeDeOrigem"];
    $cidadeDeDestino = $_POST["cidadeDeDestino"];
    $distancia = $_POST["distancia"];
    $quantidadeDePedagios = $_POST["quantidadeDePedagios"];
    $valorFixoPedagio = 9.40;

    $valorTotal = ($distancia * 6 ) + ($quantidadeDePedagios * $valorFixoPedagio);

    echo" <div class='valorTotal'>A viagem de $cidadeDeOrigem à $cidadeDeDestino irá custar o valor total de R$ $valorTotal.  </div>";
   
}else{

    echo "<h1>Você não enviou as informação corretamente</h1>";
}