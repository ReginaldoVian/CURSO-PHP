<div class="titulo">Switch</div>

<?php
$categoria = 'SUV';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo'){
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV'){
    $carro = 'Renegate';
    $preco = 80000;
}elseif($categoria === 'Sedan'){
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = '???';