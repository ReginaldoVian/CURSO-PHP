<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
echo $usuario->apresentar(), '<br>';
unset($usuario);

$usuario = new Usuario('Reginaldo Viana', 36, 'reg_vian');
echo $usuario->apresentar();
unset($usuario);