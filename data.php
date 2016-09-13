<?
//Data brasil sem hora
function data_brasil_simples($alvo){
 $peca_data=explode("-", $alvo);
 return  $peca_data[2]."/".$peca_data[1]."/".$peca_data[0];
}

//Data usa sem hora
function data_usa_simples($alvo){
 $peca_data=explode("/", $alvo);
 return  $peca_data[2]."-".$peca_data[1]."-".$peca_data[0];
}

//Data brasil com hora
function data_brasil_completa($alvo){
 $peca = explode(" ", $alvo);
 $peca_data=explode("-", $peca[0]);
 return  $peca_data[2]."/".$peca_data[1]."/".$peca_data[0]." - ".$peca[1];
}

//Data usa com hora
function data_usa_completa($alvo){
 $peca = explode(" - ", $alvo);
 $peca_data=explode("/", $peca[0]);
 return  $peca_data[2]."-".$peca_data[1]."-".$peca_data[0]." ".$peca[1];
}
?>