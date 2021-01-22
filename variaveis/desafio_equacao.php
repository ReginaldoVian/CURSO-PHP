<div class="titulo">Desafio Equação</div>

<?php
// Questão

// ([6*(3+2)]² - ((1-5)*(2-7))²)³
// __________    _______________
//    3 * 2             2
// ______________________________
//              10³

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = ($numA / $denA);
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;

echo "O resultado final é " . $final. ".";

// primeira parte
$p1 = (6 * (3 + 2)) ** 2 / (3 * 2);
//segunda parte
$p2 = ((1 - 5) * (2 - 7) / 2) ** 2;
//terceira parte
$p3 = (($p1 - $p2) ** 3) / (10 ** 3);

echo '<br>' . "O resultado final é " . $p3 . ".";