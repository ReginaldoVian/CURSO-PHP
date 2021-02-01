<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}

echo '<hr>';

for(; $cont <= 15; ){
    echo "$cont <br>";
    $cont++;
}

$array = [1 => 'Domingp', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

print_r($array);