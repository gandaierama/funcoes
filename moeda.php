<?
//Moeda com virgula
function moeda($alvo){
 return  number_format($alvo, 2, ',', '.');
}
//Moeda com ponto
function moeda2($alvo){
 return  number_format($alvo, 2, '.', '');
}

?>