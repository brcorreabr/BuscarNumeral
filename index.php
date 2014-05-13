<?php

include_once "config/config.php";

$smarty = new Smarty();

$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 60;

$contador = 1000;

while($contador < 9999):
	
	$numeral = new Numeral($contador);

	if($numeral->encontrarNumeralValido()):
		$listaDosNumeros[] = $numeral->impressaoDoResultadoValido();
	endif;
	
	unset($numeral);
	$contador++;
	
endwhile;

$smarty->assign("ListaDosNumeros", $listaDosNumeros);
$smarty->assign("AUTOR", AUTOR);
$smarty->assign("SITENAME", SITENAME);

$smarty->display("index.tpl");