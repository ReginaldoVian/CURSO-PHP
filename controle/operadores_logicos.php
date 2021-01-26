<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
echo '<br>';

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);
echo '<br>';

var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo '<br>';

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);
echo '<br>';

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 60;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomen = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomen || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar, '<br>'";

$pagouPrevidencia = true;
$podeSeAposentar = $pagouPrevidencia &&
(
    ($idade >= 60 && $sexo === 'F') ||
    ($idade >= 65 && $sexo === 'M')
);
echo "Pode se aposentar -> $podeSeAposentar, '<br>'";

if($idade >= 60 && $sexo === 'F'){
    echo "Com $idade anos pode se aposentar se for do sexo:$sexo!";
}elseif($idade >= 65 && $sexo === 'M') {
    echo "Com $idade anos pode se aposentar!";
}else{
    echo 'Vai ter que trabalhar mais um pouco...';
}

