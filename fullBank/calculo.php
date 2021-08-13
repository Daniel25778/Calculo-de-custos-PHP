<?php

if(isset($_POST["nome"]) && isset($_POST["salarioAtual"]) && isset($_POST["cargo"]) && isset($_POST["genero"])  ){

    
    $nome = $_POST["nome"];
    $salarioAtual = $_POST["salarioAtual"];
    $cargo = $_POST["cargo"];
    $genero = $_POST["genero"];
    

    // $salarioNovo = 0;

    // if($salarioAtual > 5000 ){
    //     $salarioNovo = $salarioAtual + ($salarioAtual * (10/100));
    // echo(" $masculino $nome passará a receber R$ $salarioAtual");
    // }else{
    //     $salarioNovo = $salarioAtual + ($salarioAtual * (20/100));
    //     echo(" $feminino $nome passará a receber R$ $salarioAtual ," );
    // }

$salarioNovo = $salarioAtual > 5000 ? $salarioAtual * 1.1 : $salarioAtual * 1.2;

}else{

    echo ("<h1>Você não enviou as informação corretamente</h1>");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>calcular</title>
</head>
<body>
    <main>

        <p><?=$genero === "m" ? "O" : ($genero === "f" ? "A" : "") ?>
         <?= $nome?> passará a receber R$ 
        <?= number_format($salarioNovo, 2, ",", ".") ?> no cargo de <?= $cargo ?></p>
    </main>
</body>
</html>

