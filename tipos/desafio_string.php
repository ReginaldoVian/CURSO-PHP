<div class="titulo">Desafio String</div>

<?php

// Enunciado
// Avaliando os métodos da documentação da string,
// qual o método que a posição do texto 'abc'
//na string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';
echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));


$haystack = '!AbcaBcabc';
$needle   = ('ABC');

$pos      = stripos($haystack, $needle);

if ($pos === false) {
    echo "Sinto muito, nós não encontramos ($needle) em ($haystack)";
} else {
    echo "Parabéns!\n";
    echo "Nós encontramos a última ($needle) em ($haystack) na posição ($pos)";
}
?>