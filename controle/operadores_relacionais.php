<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 == '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p>Relacionais no IF/Else</p><hr>";
$idade = 15;
if($idade < 18){
    echo "Menor de idade = $idade anos!<br>";
}elseif($idade < 65){
    echo "Adulto= $idade anos!<br>";
}else{
    echo "Terceiro idade = $idade anos!";
}