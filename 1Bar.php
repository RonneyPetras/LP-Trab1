<?php
echo "Informe o sexo do cliente (M/F) ";
$sexo = trim(fgets(STDIN));

echo "Quantas cervejas foram consumidas? ";
$qtdcerveja = trim(fgets(STDIN));

echo "Quantos refrigerantes foram consumidos? ";
$qtdrefri = trim(fgets(STDIN));

echo "Quantos espetinhos foram consumidos? ";
$qtdespeto = trim(fgets(STDIN));

if ($sexo == "M" || $sexo == "m") {
	$entrada = 10;
}
else{
	$entrada = 8;
}

$despesa = ($qtdcerveja*2.5) + ($qtdrefri*2)+ ($qtdespeto*4);

if ($despesa <= 15) {
	$cover= 3;
}
else {
	$cover = 0;
}

$subtotal = $entrada + $despesa + $cover;
$dezporcento = $subtotal*0.1;
$total = $subtotal + $dezporcento;

echo "\nValores \nEntrada =  $entrada Reais \nDespesas = $despesa Reais\nCover = $cover Reais\nGarçon = $dezporcento Reais\nTOTAL da conta =  $total Reais";

