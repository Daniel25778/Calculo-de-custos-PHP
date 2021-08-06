
<link rel="stylesheet" href="style.css">

<?php

if(isset($_POST["nomeCompleto"]) && isset($_POST["consumo"]) 
    && isset($_POST["endereco"])){

        $nomeCompleto = $_POST["nomeCompleto"];
        $consumo = $_POST["consumo"];
        $endereco = $_POST["endereco"];
    }  
else{

    echo "<h1>Você não enviou as informação corretamente</h1>";
}

if($consumo >= 120){
    $valorApagar = $consumo * 0.42;
    echo" <div class='nome'>Conta de Luz de $nomeCompleto</div>";
    echo" <div class='endereco'>Endereço: $endereco</div>";
    echo" <div class='naoEconomico'>Consumo: $consumo</div>";
    echo" <div class='valorApagar'>Valor à pagar: R$ $valorApagar</div>";

}else{
    $valorApagar = $consumo * 0.32;
    echo" <div class='nome'>Conta de Luz de $nomeCompleto</div>";
    echo" <div class='endereco'>Endereço: $endereco</div>";
    echo" <div class='economico'>Consumo: $consumo</div>";
    echo" <div class='valorApagar'>Valor à pagar: R$ $valorApagar</div>";
    echo" <div class=''>Obrigado por economizar!!</div>";
}